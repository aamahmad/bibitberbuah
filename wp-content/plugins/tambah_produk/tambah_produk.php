<?php
/*
Plugin Name: Tambah Produk
Plugin URI: http://bibitberbuah.com/
Description: menampilkan data produk yang dijual online shop
Version: 1.0
Author: aamDev
Author URI: http://bibitberbuah.com
License: GPLv2
*/
add_action( 'init', 'tambah_produk' );

function tambah_produk() {
    register_post_type( 'bibitberbuah',
        array(
            'labels' => array(
                'name' => 'Tambah Produk',
                'singular_name' => 'produk bibit',
                'add_new' => 'Tambah baru',
                'add_new_item' => 'Tambah data produk baru',
                'edit' => 'Ubah',
                'edit_item' => 'Ubah Produk Olshop',
                'new_item' => 'Baru Produk Olshop',
                'view' => 'Tampilkan',
                'view_item' => 'Tampilkan Produk Olshop',
                'search_items' => 'Pencarian Produk Olshop',
                'not_found' => 'Tidak ada Produk Olshop',
                'not_found_in_trash' => 'Tidak ada Produk Olshop ditemukan di tongsampah',
                'parent' => 'Induk Produk Olshop'
            ),
 
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title', 'editor', 'comments', 'thumbnail' ),
            'taxonomies' => array( '' ),
            'menu_icon' => 'dashicons-store',
            'has_archive' => true,
            'taxonomies'   => array(
                'post_tag',
                'category',
                'topics',
            )
        )
    );
    register_taxonomy_for_object_type( 'category', ID );
    register_taxonomy_for_object_type( 'post_tag', ID );
}

add_action( 'admin_init', 'add_field_olshop_metabox' );
function add_field_olshop_metabox() {
    add_meta_box( 
        'olshop_meta_box',  // $id
        'Produk Detail Olshop', // $title
        'display_olshop_meta_box', // $callback
        'bibitberbuah', // $screen custom post type
        'normal', // $context
        'high' // $priority
    );
}

function display_olshop_meta_box( $produk_olshop ) {
    // Retrieve current name of the Director and Movie Rating based on review ID
    $olshop_harga = esc_html( get_post_meta( $produk_olshop->ID, 'olshop_harga', true ) );
    $olshop_kode_produk = esc_html( get_post_meta( $produk_olshop->ID, 'olshop_kode_produk', true ) );
    $status_olshop = esc_html( get_post_meta( $produk_olshop->ID, 'status_olshop', true ) );
    $berat_olshop = esc_html( get_post_meta( $produk_olshop->ID, 'berat_olshop', true ) );
    $sumber_olshop = esc_html( get_post_meta( $produk_olshop->ID, 'sumber_olshop', true ) );
    $KetSingkat_olshop = esc_html( get_post_meta( $produk_olshop->ID, 'KetSingkat_olshop', true ) );
    ?>
    <table border="0px" cellpadding="0" cellspacing="0">
        <tr>
            <td style="width: 30%; text-align: right; padding-right: 10px;">Harga (Rp)</td>
            <td><input type="text" size="" name="olshop_harga_name" value="<?php echo $olshop_harga; ?>" /></td>
            <td style="width: 30%; text-align: right; padding-right: 10px;">Reference /Kode</td>
            <td><input type="text" size="" name="olshop_kode_name" value="<?php echo $olshop_kode_produk; ?>" /></td>
        </tr>
        
        <tr>
            <td style="width: 20%; text-align: right; padding-right: 10px;">Ketersediaan barang</td>
            <td><select style="width: 150px;" name="olshop_status_name">
                    <option value="<?php echo $status_olshop; ?>" selected><?php echo $status_olshop; ?></option>
                    <option value="Hubungi kami">Hubungi kami</option>
                    <option value="Tersedia">Tersedia</option>
                    <option value="Stok Kosong">Stok Kosong</option>
                </select></td>
            <td style="width: 20%; text-align: right; padding-right: 10px;">Berat </td>
            <td><input type="text" size="" name="olshop_berat_name" value="<?php echo $berat_olshop; ?>" /></td>
        </tr>

        <tr>
            <td style="width: 20%; padding-right: 10px; text-align: right; vertical-align: top;">Penjelasan Singkat</td>
            <td colspan="3"><textarea style="width: 100%; height: 100px;" name="singkat_berat_name"><?php echo $KetSingkat_olshop; ?></textarea></td>
        </tr>
        <tr>
            <td style="width: 20%; text-align: right; padding-right: 10px;">Sumber Barang(Dropsip)</td>
            <td><input type="text" size="" name="olshop_sumber_name" value="<?php echo $sumber_olshop; ?>" /></td>
            <td style="width: 20%; text-align: right; padding-right: 10px;"></td>
            <td></td>
        </tr>
    </table>
    <?php
}


add_action( 'save_post', 'add_olshop_fields', 10, 2 );
function add_olshop_fields( $produk_olshop_id, $produk_olshop ) {
    // Check post type for movie reviews
    if ( $produk_olshop->post_type == 'bibitberbuah' ) {
        // Store data in post meta table if present in post data
        if ( isset( $_POST['olshop_harga_name'] ) && $_POST['olshop_harga_name'] != '' ) {
            update_post_meta( $produk_olshop_id, 'olshop_harga', $_POST['olshop_harga_name'] );
        }

        if ( isset( $_POST['olshop_kode_name'] ) && $_POST['olshop_kode_name'] != '' ) {
            update_post_meta( $produk_olshop_id, 'olshop_kode_produk', $_POST['olshop_kode_name'] );
        }
        if ( isset( $_POST['olshop_status_name'] ) && $_POST['olshop_status_name'] != '' ) {
            update_post_meta( $produk_olshop_id, 'status_olshop', $_POST['olshop_status_name'] );
        }
         if ( isset( $_POST['olshop_berat_name'] ) && $_POST['olshop_berat_name'] != '' ) {
            update_post_meta( $produk_olshop_id, 'berat_olshop', $_POST['olshop_berat_name'] );
        }
         if ( isset( $_POST['olshop_sumber_name'] ) && $_POST['olshop_sumber_name'] != '' ) {
            update_post_meta( $produk_olshop_id, 'sumber_olshop', $_POST['olshop_sumber_name'] );
        }
         if ( isset( $_POST['singkat_berat_name'] ) && $_POST['singkat_berat_name'] != '' ) {
            update_post_meta( $produk_olshop_id, 'KetSingkat_olshop', $_POST['singkat_berat_name'] );
        }

         if ( isset( $_POST['olshop_ukuran_name'] ) && $_POST['olshop_ukuran_name'] != '' ) {
            update_post_meta( $produk_olshop_id, 'ukuran_olshop', $_POST['olshop_ukuran_name'] );
        }
    }
}

?>

