<section id="section-1">

	<div class="container">

		<div class="row">

			<div class="col-12">

				<div class="slider_wrapper">

					<ul id="index_slider">

						<?php while (have_rows('main-slider', 'option')):
							the_row(); ?>

							<li class="clearfix" style="background-image: url(<?php the_sub_field('main-slider-img'); ?>);">

								<div class="text_wrapper">

									<b>
										<?php the_sub_field('main-slider-title'); ?>
									</b>

									<span class="main-slider-big">
										<?php the_sub_field('main-slider-big'); ?>
									</span>

									<span class="main-slider-subtitle">
										<?php the_sub_field('main-slider-subtitle'); ?>
									</span>

									<?php if (get_sub_field("type") === "link") { ?>
										<a href="<?php the_sub_field('main-slider-link'); ?>">
											<?php the_sub_field('main-slider-btn'); ?>
										</a>
									<?php } ?>

									<?php if (get_sub_field("type") === "button") { ?>
										<button data-toggle="modal" data-target="<?php the_sub_field("popup-id"); ?>">
											<?php the_sub_field('main-slider-btn'); ?>
										</button>
									<?php } ?>

								</div>

							</li>

						<?php endwhile; ?>

					</ul>

				</div>

			</div>

		</div>

	</div>

</section>