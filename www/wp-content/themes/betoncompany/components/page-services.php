<?php get_template_part('components/breadcrumbs'); ?>

<section class="page production_page">

	<div class="container">

		<div class="row" style="justify-content: center;">

			<div class="col-12">

				<?php get_template_part('components/page-title'); ?>

			</div>

			<?php 

				$services = new WP_Query(array(

					'post_type' => 'page',

					'post_parent' => get_the_ID(),

					'posts_per_page' => -1,

					'order' => 'ASC',

					'orderby' => 'menu_order'

					)

				);

			?>

			<?php if($services->have_posts()) : ?>

				<?php while($services->have_posts()): $services->the_post(); ?>

					<?php get_template_part('components/service_block'); ?>

				<?php endwhile; ?>

			<?php endif; ?>

			<?php wp_reset_postdata(); ?> 

		</div>

	</div>       

</section> 