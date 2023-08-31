			</main>
			<footer class="footer">
				<div class="container">
					<div class="row">
						<div class="col-sm-11 col-xs-12">
							<div class="footer-copyright">
								<p>©<?php $date = (int) date('Y'); $date_start = 2016; print "&nbsp;" . $date_start; if( $date > $date_start ) print "-".$date; ?> <?php the_field('contacts-company_name', 'option'); ?></p>
								<a href="<?php the_permalink(135); ?>" target="_blank">Политика конфиденциальности</a>
							</div>
						</div>
						<!-- <div class="col-sm-1 col-xs-12">
							<div class="footer-create">
							</div>
							<div class="footer-soc">
								<a href="<?php the_field('vk-soc', 112);  ?>" target="_blank" class="footer-vk"><img src="<?php bloginfo('template_url') ?>/assets/images/vk.png" ></a>
								<a href="<?php the_field('insta-soc', 112); ?>" target="_blank" class="footer-insta"><img src="<?php bloginfo('template_url') ?>/assets/images/instagram.png"></a>		
							</div>
						</div> -->
					</div>
				</div>
			</footer>
		</div>
		<div id="exampleModal" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="form">
						<div class="form-top">
							<b class="form_header">Рассчитать стоимость</b>
						</div>
						<div class="form-bottom">
							<div><?php echo do_shortcode('[contact-form-7 id="283" title="Без названия"]') ?></div>
							<p class="form_warning">Нажимая кнопку, вы соглашаетесь на обработку <a target="_blank" href="<?php echo get_permalink(133);?>">персональных данных</a></p>
							<div class="mail_sent">
								<svg role="img" width="122" height="122"><use xlink:href="<?php bloginfo('template_url') ?>/assets/images/sprite.svg#okay"></use></svg>
								<p>Ваша заявка успешно отправлена</p>
							</div>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/close.svg" alt="" class="close">
							<!-- <svg class="close" role="img" width="14" height="14"><use xlink:href="<?php bloginfo('template_url') ?>/assets/images/sprite.svg#close"></use></svg> -->
							<div class="loader">
								<svg role="img" width="60" height="60"><use xlink:href="<?php bloginfo('template_url') ?>/assets/images/sprite.svg#preloader"></use></svg>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="<?php bloginfo('template_url'); ?>/assets/js/main.js"></script>
		<?php get_template_part('assets/js/script'); ?>

		<?php the_field('footer_scripts', 'option'); ?>


		<script>
			$(window).load(function(){
				var $preloader = $('#page-preloader');
					$preloader.fadeOut(300);
			})
		</script>

		<script>
		
			$('#index_slider').bxSlider({
				nextText: '<span><svg role="img" width="20" height="12"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php bloginfo('template_url'); ?>/assets/images/sprite.svg#arr"></use></svg></span>',
				prevText: '<span><svg role="img" width="20" height="12"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php bloginfo('template_url'); ?>/assets/images/sprite.svg#arr"></use></svg></span>',
				<?php if(get_field( 'slider_auto', 'options' )) echo 'auto: '.get_field( 'slider_auto', 'options' ).','; ?>
				<?php if(get_field( 'slider_speed', 'options' )) echo 'speed: '.get_field( 'slider_speed', 'options' ).','; ?>
				<?php if(get_field( 'slider_effect', 'options' )) echo 'mode: "'.get_field( 'slider_effect', 'options' ).'",'; ?>
				<?php if(get_field( 'slider_time', 'options' )) echo 'pause: '.get_field( 'slider_time', 'options' ).','; ?>
				startSlide: 0,
				onSliderLoad: function () {
					$("#index_slider li .text_wrapper b").addClass("animated <?php the_field( 'slider_effect_title_show', 'options' ); ?>");
					$("#index_slider li .text_wrapper span").addClass("animated <?php the_field( 'slider_effect_title_show', 'options' ); ?>");
					$("#index_slider li .text_wrapper a").addClass("animated <?php the_field( 'slider_effect_button_show', 'options' ); ?>");
					$("#index_slider li .text_wrapper button").addClass("animated <?php the_field( 'slider_effect_button_show', 'options' ); ?>");
				},
				onSlideBefore: function() {
					$("#index_slider li .text_wrapper b").removeClass("<?php the_field( 'slider_effect_title_show', 'options' ); ?>");
					$("#index_slider li .text_wrapper span").removeClass("<?php the_field( 'slider_effect_title_show', 'options' ); ?>");
					$("#index_slider li .text_wrapper b").addClass("<?php the_field( 'slider_effect_title_hide', 'options' ); ?>");
					$("#index_slider li .text_wrapper span").addClass("<?php the_field( 'slider_effect_title_hide', 'options' ); ?>");
					$("#index_slider li .text_wrapper a").removeClass("<?php the_field( 'slider_effect_button_show', 'options' ); ?>");
					$("#index_slider li .text_wrapper a").addClass("<?php the_field( 'slider_effect_button_hide', 'options' ); ?>");
					$("#index_slider li .text_wrapper button").removeClass("<?php the_field( 'slider_effect_button_show', 'options' ); ?>");
					$("#index_slider li .text_wrapper button").addClass("<?php the_field( 'slider_effect_button_hide', 'options' ); ?>");
				},   
				onSlideAfter: function(){
					$("#index_slider li .text_wrapper b").removeClass("<?php the_field( 'slider_effect_title_hide', 'options' ); ?>");
					$("#index_slider li .text_wrapper span").removeClass("<?php the_field( 'slider_effect_title_hide', 'options' ); ?>");
					$("#index_slider li .text_wrapper b").addClass("<?php the_field( 'slider_effect_title_show', 'options' ); ?>");   
					$("#index_slider li .text_wrapper span").addClass("<?php the_field( 'slider_effect_title_show', 'options' ); ?>");   
					$("#index_slider li .text_wrapper a").removeClass("<?php the_field( 'slider_effect_button_hide', 'options' ); ?>");
					$("#index_slider li .text_wrapper a").addClass("<?php the_field( 'slider_effect_button_show', 'options' ); ?>");
					$("#index_slider li .text_wrapper button").removeClass("<?php the_field( 'slider_effect_button_hide', 'options' ); ?>");
					$("#index_slider li .text_wrapper button").addClass("<?php the_field( 'slider_effect_button_show', 'options' ); ?>");
				}
			});

		</script>

		<?php do_action('wp_footer'); ?>
	</body>
</html>
