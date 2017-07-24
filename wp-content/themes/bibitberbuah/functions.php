<?php
// WordPress Titles
add_theme_support( 'title-tag' );

// Support Featured Images
add_theme_support( 'post-thumbnails' );

add_filter('pre_get_posts', 'query_post_type');

function query_post_type($query) {
  if( is_category() ) {
    $post_type = get_query_var('post_type');
    if($post_type)
        $post_type = $post_type;
    else
        $post_type = array('nav_menu_item', 'post', 'bibitberbuah'); // don't forget nav_menu_item to allow menus to work!
    $query->set('post_type',$post_type);
    return $query;
    }
}

// Add scripts and stylesheets
function startwordpress_scripts() {
	wp_enqueue_style( 'bootstrap_min', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style( 'bootstrap_theme', get_template_directory_uri() . '/css/bootstrap-theme.min.css');
	wp_enqueue_style( 'ie10', get_template_directory_uri() . '/css/ie10-viewport-bug-workaround.css');
	wp_enqueue_style( 'custome_css', get_template_directory_uri() . '/custome.css');
	wp_enqueue_script( 'js_ie0emulation', get_template_directory_uri() . '/js/ie-emulation-modes-warning.js', array('jquery'), '3.3.6', true );
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', array('jquery'), '3.3.6', true );
}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );	

// Breadcrumb

function the_breadcrumb() {
		echo '<ol class="breadcrumb">';
	if (!is_home()) {
		echo '<li><a href="';
		echo get_option('home');
		echo '">';
		echo 'Home';
		echo "</a></li>";
		if (is_category() || is_single()) {
			echo '<li>';
			the_category(' </li><li> ');
			if (is_single()) {
				echo "</li><li>";
				the_title();
				echo '</li>';
			}
		} elseif (is_page()) {
			echo '<li>';
			echo the_title();
			echo '</li>';
		}
	}
	elseif (is_tag()) {single_tag_title();}
	elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
	elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
	elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
	elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
	elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
	elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
	echo '</ol>';
}
// end Breadcrumb



// crop thubnail
add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
    add_image_size( 'category-thumb', 300 ); // 300 pixels wide (and unlimited height)
    add_image_size( 'homepage-thumb', 300, 300, true ); // (cropped)
}

add_image_size( 'custom-size', 150, 150, true ); 
add_image_size( 'wordpress-thumbnail', 200, 200, TRUE ); // end crop thubmnail


// Pengaturan Kontak Kami
function pengaturan_kontak_kami() {
  add_menu_page( 'Custom Settings', 'Kontak kami', 'manage_options', 'custom-settings', 'custome_kontak_page', null, 99 );
}
add_action( 'admin_menu', 'pengaturan_kontak_kami' );


// ---
function custome_kontak_page() { ?>
  <div class="wrap">
    <h1>Pengaturan Kontak Kami</h1>
    <form method="post" action="options.php">
       <?php
           settings_fields( 'section' );
           do_settings_sections( 'theme-options' );      
           submit_button(); 
       ?>          
    </form>
  </div>
<?php }


// Kontak WA/SMS
function pengaturan_wa() { ?>
  <input type="text" name="kontak_wa" id="kontak_wa" value="<?php echo get_option( 'kontak_wa' ); ?>" />
<?php }

// Kontak call
function pengaturan_call() { ?>
  <input type="text" name="kontak_call" id="kontak_call" value="<?php echo get_option( 'kontak_call' ); ?>" />
<?php }
// Kontak bbm
function pengaturan_bbm() { ?>
  <input type="text" name="kontak_bbm" id="kontak_bbm" value="<?php echo get_option( 'kontak_bbm' ); ?>" />
<?php }

// Kontak Line
function pengaturan_line() { ?>
  <input type="text" name="kontak_line" id="kontak_line" value="<?php echo get_option( 'kontak_line' ); ?>" />
<?php }

// Kontak Telegram
function pengaturan_telegram() { ?>
  <input type="text" name="kontak_telegram" id="kontak_telegram" value="<?php echo get_option( 'kontak_telegram' ); ?>" />
<?php }

// menambahlan field kontak
function custom_settings_page_setup() {
  add_settings_section( 'section', 'Kontak Kami', null, 'theme-options' );
  	add_settings_field( 'kontak_wa', 'WA / SMS', 'pengaturan_wa', 'theme-options', 'section' );
  	add_settings_field( 'kontak_call', 'Call', 'pengaturan_call', 'theme-options', 'section' );
  	add_settings_field( 'kontak_bbm', 'BBM', 'pengaturan_bbm', 'theme-options', 'section' );
  	add_settings_field( 'kontak_line', 'Line', 'pengaturan_line', 'theme-options', 'section' );
  	add_settings_field( 'kontak_telegram', 'Telegram', 'pengaturan_telegram', 'theme-options', 'section' );

  	register_setting('section', 'kontak_wa');
  	register_setting('section', 'kontak_call');
  	register_setting('section', 'kontak_bbm');
  	register_setting('section', 'kontak_line');
  	register_setting('section', 'kontak_telegram');
}
add_action( 'admin_init', 'custom_settings_page_setup' );

// utuk tampil di web


// end pengaturan


function tag_filter($query) {
  if ( !is_admin() && $query->is_main_query() ) {
    if ($query->is_tag) {
      $query->set('post_type', array( 'bibitberbuah', ));
    }
  }
}
add_action('pre_get_posts','tag_filter');


// function to display number of posts.

function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "";
    }
    return $count.' kali dilihat';
}

// function to count views.
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}


// halaman postingan , simpan di mana aja, pengaturan limit di => pengaturan - reading

function wpbeginner_numeric_posts_nav() {

  if( is_singular() )
    return;

  global $wp_query;

  /** Stop execution if there's only 1 page */
  if( $wp_query->max_num_pages <= 1 )
    return;

  $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
  $max   = intval( $wp_query->max_num_pages );

  /** Add current page to the array */
  if ( $paged >= 1 )
    $links[] = $paged;

  /** Add the pages around the current page to the array */
  if ( $paged >= 3 ) {
    $links[] = $paged - 1;
    $links[] = $paged - 2;
  }

  if ( ( $paged + 2 ) <= $max ) {
    $links[] = $paged + 2;
    $links[] = $paged + 1;
  }

  echo '<nav><ul class="pagination">' . "\n";

  /** Previous Post Link */
  if ( get_previous_posts_link() )
    printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

  /** Link to first page, plus ellipses if necessary */
  if ( ! in_array( 1, $links ) ) {
    $class = 1 == $paged ? ' class="active"' : '';

    printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

    if ( ! in_array( 2, $links ) )
      echo '<li>…</li>';
  }

  /** Link to current page, plus 2 pages in either direction if necessary */
  sort( $links );
  foreach ( (array) $links as $link ) {
    $class = $paged == $link ? ' class="active"' : '';
    printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
  }

  /** Link to last page, plus ellipses if necessary */
  if ( ! in_array( $max, $links ) ) {
    if ( ! in_array( $max - 1, $links ) )
      echo '<li>…</li>' . "\n";

    $class = $paged == $max ? ' class="active"' : '';
    printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
  }

  /** Next Post Link */
  if ( get_next_posts_link() )
    printf( '<li>%s</li>' . "\n", get_next_posts_link() );

  echo '</ul></nav>' . "\n";

}

// end halaman postingan


?>