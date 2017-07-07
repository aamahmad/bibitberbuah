<?php if ( post_password_required() ) {
	return;
} ?>
	<div id="comments" class="comments-area">
		<?php if ( have_comments() ) : ?>
			<h3 class="comments-title">
				<?php
				printf( _nx( 'One comment on “%2$s”', '%1$s comments on “%2$s”', get_comments_number(), 'comments title'),
					number_format_i18n( get_comments_number() ), get_the_title() );
				?>
			</h3>
			<ul class="comment-list">
				<?php 
				wp_list_comments( array(
					'short_ping'  => true,
					'avatar_size' => 50,
				) );
				?>
			</ul>
		<?php endif; ?>
		<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
			<p class="no-comments">
				<?php _e( 'Comments are closed.' ); ?>
			</p>
		<?php endif; ?>
		<?php comment_form(); ?>
	</div>

<div id="comments" class="comments-area">
	<h3 class="comments-title">One comment on “tes postingan”</h3>
	<ul class="comment-list">
	<li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1 parent media" id="comment-2">
		<div id="div-comment-2" class="comment-body">
			<div class="comment-author vcard">
				<img alt='' src='http://2.gravatar.com/avatar/84ae6308f3d4f151ab59ab1a4873b511?s=50&#038;d=mm&#038;r=g' srcset='http://2.gravatar.com/avatar/84ae6308f3d4f151ab59ab1a4873b511?s=100&amp;d=mm&amp;r=g 2x' class='avatar avatar-50 photo' height='50' width='50' />			
				<cite class="fn">admin</cite> <span class="says">says:</span>
			</div>
		
			<div class="comment-meta commentmetadata"><a href="http://localhost/banyakpromo/tes-postingan/#comment-2">
			June 8, 2017 at 3:37 pm</a>
			</div>

			<p>tes</p>

			<div class="reply"><a rel='nofollow' class='comment-reply-link' href='http://localhost/banyakpromo/tes-postingan/?replytocom=2#respond' onclick='return addComment.moveForm( "div-comment-2", "2", "respond", "6" )' aria-label='Reply to admin'>Reply</a>
			</div>
		</div>

		<ul class="children">
			<li class="comment odd alt depth-2 " id="comment-3">
					<div id="div-comment-3" class="comment-body">
					<div class="comment-author vcard">
				<img alt='' src='http://1.gravatar.com/avatar/75d23af433e0cea4c0e45a56dba18b30?s=50&#038;d=mm&#038;r=g' srcset='http://1.gravatar.com/avatar/75d23af433e0cea4c0e45a56dba18b30?s=100&amp;d=mm&amp;r=g 2x' class='avatar avatar-50 photo' height='50' width='50' />			<cite class="fn">ss</cite> <span class="says">says:</span>		</div>
					<em class="comment-awaiting-moderation">Your comment is awaiting moderation.</em>
			<br />
			
			<div class="comment-meta commentmetadata"><a href="http://localhost/banyakpromo/tes-postingan/#comment-3">
				June 8, 2017 at 4:36 pm</a>		</div>

			<p>tes</p>

			<div class="reply"><a rel='nofollow' class='comment-reply-link' href='http://localhost/banyakpromo/tes-postingan/?replytocom=3#respond' onclick='return addComment.moveForm( "div-comment-3", "3", "respond", "6" )' aria-label='Reply to ss'>Reply</a></div>
					</div>
			</li><!-- #comment-## -->
		</ul><!-- .children -->


	</li><!-- #comment-## -->


	<li class="comment even thread-odd thread-alt depth-1" id="comment-4">
		<div id="div-comment-4" class="comment-body">
			<div class="comment-author vcard">
				<img alt='' src='http://1.gravatar.com/avatar/75d23af433e0cea4c0e45a56dba18b30?s=50&#038;d=mm&#038;r=g' srcset='http://1.gravatar.com/avatar/75d23af433e0cea4c0e45a56dba18b30?s=100&amp;d=mm&amp;r=g 2x' class='avatar avatar-50 photo' height='50' width='50' /><cite class="fn">ade</cite> <span class="says">says:</span>
			</div>
		
			<div class="comment-meta commentmetadata"><a href="http://localhost/banyakpromo/tes-postingan/#comment-4">
				June 8, 2017 at 4:50 pm</a>
			</div>

			<p>tes lagi</p>

			<div class="reply"><a rel='nofollow' class='comment-reply-link' href='http://localhost/banyakpromo/tes-postingan/?replytocom=4#respond' onclick='return addComment.moveForm( "div-comment-4", "4", "respond", "6" )' aria-label='Reply to ade'>Reply</a>
			</div>

		</div>
	</li><!-- #comment-## -->



	</ul>
							<div id="respond" class="comment-respond">
		<h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link" href="/banyakpromo/tes-postingan/#respond" style="display:none;">Cancel reply</a></small></h3>			<form action="http://localhost/banyakpromo/wp-comments-post.php" method="post" id="commentform" class="comment-form">
				<p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p><p class="comment-form-comment"><label for="comment">Comment</label> <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" aria-required="true" required="required"></textarea></p><p class="comment-form-author"><label for="author">Name <span class="required">*</span></label> <input id="author" name="author" type="text" value="ade" size="30" maxlength="245" aria-required='true' required='required' /></p>
<p class="comment-form-email"><label for="email">Email <span class="required">*</span></label> <input id="email" name="email" type="text" value="admin@gmail.com" size="30" maxlength="100" aria-describedby="email-notes" aria-required='true' required='required' /></p>
<p class="comment-form-url"><label for="url">Website</label> <input id="url" name="url" type="text" value="" size="30" maxlength="200" /></p>
<p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Post Comment" /> <input type='hidden' name='comment_post_ID' value='6' id='comment_post_ID' />
<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
</p>			</form>
			</div><!-- #respond -->
</div>