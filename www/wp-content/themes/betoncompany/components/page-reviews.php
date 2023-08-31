<?php get_template_part('components/breadcrumbs'); ?>
<section class="textpage">
	<div class="container">
		<h1 class="page_title"><?php the_title( ); ?></h1>
		<div class="row">			
			<div class="col-lg-9 col-xs-12">
				<div class="reviews">

					<?php if( $comments = get_comments( array( 'status' => 'approve' ) ) ) : $i = 0; ?>

						<?php foreach( $comments as $comment ) : ?>
							<?php
								$field_image = get_comment_meta( $comment->comment_ID, 'review_image', true );
								if( $field_image ) {
									$image_attributes = wp_get_attachment_image_src( $field_image );
									$review_image = $image_attributes[0];
									$class = '';
								} else {
									$review_image = '';
									$class = 'no-review-photo';
								}

								$review_name = apply_filters( 'ps/review_name', $comment->comment_author );
								$review_date = apply_filters( 'ps/review_date', get_comment_date( '', $comment->comment_ID ) );
								$review_content = apply_filters( 'ps/review_content', $comment->comment_content );
							?>
							<div class="review">
								<div class="review-top">
									<div class="review-thumbnail <?php echo $class; ?>">
										<svg role="img" width="20" height="20">
											<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php bloginfo('template_url'); ?>/assets/images/sprite.svg#no_man_template"></use> 
										</svg>
									</div>
									<div class="review-author">
										<p><?php echo $review_name; ?></p>
										<span><?php echo $review_date; ?></span>
									</div>
								</div>
								<p class="review-content"><?php echo $review_content; ?></p>
							</div>
						<?php endforeach; ?>

					<?php endif; ?>
				
				</div>
			</div>
			<div class="col-lg-3 col-xs-12">
				<div class="send_review">
					<div class="send_review-title">
						<p>Оставьте отзыв</p>
					</div>
					<div class="send_review-body" data-ps-tpl-review-form>

						<form action="#send_review" method="post" enctype="multipart/form-data">
							<?php wp_nonce_field( 'ps_extend_comment_write', 'ps_extend_comment_write', false ); ?>
							<input name="name" id="author" type="text" placeholder="Имя" value="" aria-required="true" aria-invalid="false">
							<textarea name="comment" id="comment" placeholder="Ваш отзыв" value="" aria-required="true" aria-invalid="false"></textarea>	
							<input class="the_button blue" type="submit" value="Отправить">
							<p class="form_warning">Нажимая кнопку, вы соглашаетесь на обработку <a target="_blank" href="/?p=133">персональных данных</a></p>
						</form>

					</div>
					
					<div class="send_review-success" data-ps-tpl-review-response>
						<div class="send_review-success-text">
							<p>Спасибо</p>
							<span>Ваш отзыв успешно отправлен</span>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>

<noindex>
	<script>
		// document.getElementById("acceptance").setCustomValidity("Пожалуйста подтвердите согласие на обработку персональных данных");

		(function( jQuery ) {
			jQuery( '[data-ps-tpl-review-form]' ).on( 'submit', function( event ) {
				var target = jQuery( this ).find( 'form' );
				var error_status = false;

				target.find( '[aria-required="true"]' ).each( function( i, element ) {
					if( jQuery( element ).val() == '' ) {
						jQuery( element ).addClass( 'error' );
						error_status = true;
					} else {
						jQuery( element ).removeClass( 'error' );
					}
				});

				if( error_status ) return false;

				event.preventDefault();

				jQuery.ajax({
					'url' : '<?php print admin_url( 'admin-ajax.php?action=jb_insert_comment' ); ?>',
					'data' : target.serialize(),
					'method' : 'POST',
					'success' : function( data ) {
						jQuery( '.send_review-body input[type=text], .send_review-body textarea' ).val('');
						jQuery( '.send_review-success' ).fadeIn(200);
					}
				});
			});
		})( jQuery );
	</script>
</noindex>