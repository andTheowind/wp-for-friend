<?php if( get_sub_field('seo-text', 'option') ): ?>

	<section id="index_seo_block">

		<div class="container">

			<h1 class="seo_title"><?php echo get_sub_field('seo-title'); ?></h1>

			<div class="row">

				<div class="col-12 hidden-md-up">

					<div class="seo_img">

						<img src="<?php echo get_sub_field('seo-img','option')['sizes']['large']; ?>" alt="<?php echo get_sub_field('seo-img','option')['alt']; ?>">

					</div>

				</div>

				<div class="col-12 col-md-8">

					<!-- <div id="index_seo_scroller"> -->

						<div class="content">

							<div class="content-text">

								<?php the_sub_field('seo-text', 'option'); ?>

							</div>

						</div>

					<!-- </div> -->

				</div>

				<div class="hidden-sm-down col-md-4">

					<div class="seo_img">

						<img src="<?php echo get_sub_field('seo-img','option')['sizes']['large']; ?>" alt="<?php echo get_sub_field('seo-img','option')['alt']; ?>">

					</div>

				</div>

			</div>

		</div>

	</section>

<?php endif; ?>