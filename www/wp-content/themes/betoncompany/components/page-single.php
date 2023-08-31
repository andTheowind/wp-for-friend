<?php get_template_part('components/breadcrumbs'); ?>



<section class="page simple_page">

	<div class="container">

		<div class="row">
			<div class="col-lg-9 col-12">

				<?php get_template_part('components/page-title'); ?>

				<div class="wrapper_page_subpage" style="display:flex;flex-wrap: wrap; width:100%">

					<?php
					$subpages = new WP_Query(
						array(
							'post_type' => 'page',
							'post_parent' => get_the_ID(),
							'posts_per_page' => -1,
							'order' => 'ASC',
							'orderby' => 'menu_order'
						)
					);
					?>

					<?php if ($subpages->have_posts()): ?>
						<?php while ($subpages->have_posts()):
							$subpages->the_post(); ?>
							<?php get_template_part('components/production_block'); ?>
						<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>

				</div>

				<?php
				foreach (get_field('blocks') as $key => $block) {
					$type = $block["type"];
					$field = $block[$type];

					// echo $field;

					get_template_part('template-parts/services/block', $type,  ["field" => $field]);
				}
				?>

				<?php // new Content(); ?>

				<style>
					.wrapper_page_subpage>div {
						min-width: 280px;
						padding: 0;
					}

					.wrapper_page_subpage>div:nth-child(3n+2) {
						margin: 0 15px;
					}

					.sidebar {
						margin-top: 24%;
					}

					@media (max-width: 768px) {
						.wrapper_page_subpage>div:nth-child(3n+2) {
							margin: 0;
						}
					}

					@media (max-width: 575px) {
						.production_block .img_wrapper {
							height: 280px;
						}
					}

					@media (max-width: 350px) {
						.production_block .img_wrapper {
							height: 180px;
						}
					}
				</style>

			</div>

			<div class="col-lg-3 hidden-md-down">
				<?php get_sidebar(); ?>
			</div>

		</div>
	</div>
</section>