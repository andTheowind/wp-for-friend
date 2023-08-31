<?php get_header(); ?>

	<section class="index_block articles_archive">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="breadcrumbs clearfix">
						<ul class="clearfix">
							<?php bcn_display(); ?>
						</ul>
					</div>
					<p class="page_title">Информация</p>
					<div class="row">
						<?php while(have_posts()): the_post(); ?>
							<div class="col-12">
								<div class="article_block">
									<div class="row">
										<div class="col-12 col-sm-5 col-md-4 col-lg-3">
											<?php if( get_the_post_thumbnail() ): ?>
												<div class="article_img" style="background-image: url(<?php echo get_the_post_thumbnail_url( get_the_ID(), 'medium' ); ?>);">
												</div>
											<?php else: ?>
												<div class="article_img">
													<svg role="img" width="78" height="62">
														<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php bloginfo('template_url'); ?>/assets/images/sprite.svg#no_picture"></use> 
													</svg>
												</div>
											<?php endif; ?>
										</div>
										<div class="col-12 col-sm-7 col-md-8 col-lg-9">
											<a href="<?php the_permalink(); ?>" class="info">
												<b><?php the_title(); ?></b>
												<p><?php the_field('description'); ?></p>
												<i>Подробнее</i>
											</a>
										</div>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="navigation-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<?php 
						add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
						function my_navigation_template( $template, $class ){
							return '
							<nav class="navigation %1$s" role="navigation">
								<div class="nav-links">%3$s</div>
							</nav>    
							';
						}
					?>

					<?php 
						the_posts_pagination( array(
							'end_size'  => 1,
							'mid_size'  => 2,
							'prev_text' => '<svg role="img" width="10" height="6"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="'.get_bloginfo('template_url').'/assets/images/sprite.svg#arr"></use></svg>',
							'next_text' => '<svg role="img" width="10" height="6"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="'.get_bloginfo('template_url').'/assets/images/sprite.svg#arr"></use></svg>'
						) ); 
					?>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?> 