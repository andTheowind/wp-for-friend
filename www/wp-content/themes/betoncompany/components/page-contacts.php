<div class="contacts_page">
	<?php get_template_part('components/breadcrumbs'); ?>

	<section class="contacts-wrap">
		<div class="container">
			<div class="row" itemscope="" itemtype="http://schema.org/LocalBusiness">
				<div class="col-12">
					<?php get_template_part('components/page-title'); ?>
					<span class="contacts__subtitle accent">
						Москва, территория Восточная промзона, посёлок Совхоза имени Ленина, вл3с11
					</span>
					<div class="contacts">
						<div class="contacts-info">
							<p class="title">
								<?php the_field('contacts-company_name', 'option'); ?>
							</p>
							<?php if (have_rows('contacts-locations', 'option')): ?>
								<div class="group">
									<span>Адрес</span>
									<?php while (have_rows('contacts-locations', 'option')):
										the_row(); ?>
										<p>
											<?php the_sub_field('address'); ?>
										</p>
									<?php endwhile; ?>
								</div>
							<?php endif; ?>
							<?php if (have_rows('contacts-emails', 'option')): ?>
								<div class="group">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mail-icon.svg" alt=""
										class="contacts-emails__icon">
									<?php while (have_rows('contacts-emails', 'option')):
										the_row(); ?>
										<a class="contacts-info__mail" href="mailto:<?php the_sub_field('email'); ?>"><?php the_sub_field('email'); ?></a>
									<?php endwhile; ?>
								</div>
							<?php endif; ?>
							<?php if (have_rows('contacts-phones', 'option')): ?>
								<div class="group">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone-icon.svg" alt=""
										class="contacts-phones__icon">
									<?php while (have_rows('contacts-phones', 'option')):
										the_row(); ?>
										<a class="contacts-info__tel" href="tel:<?php the_sub_field('phone'); ?>"><?php the_sub_field('phone'); ?></a>
									<?php endwhile; ?>
								</div>
							<?php endif; ?>
							<div class="contacts-soc">
								<!--<div class="group">
									<span>Социальные сети</span>
										<a href="<?php the_field('vk-soc'); ?>" target="_blank" class="soc-vk" style="margin-right: 5px;"><img src="<?php bloginfo('template_url') ?>/assets/images/vk.png" ></a>
										<a href="<?php the_field('insta-soc'); ?>" target="_blank" class="soc-insta"><img src="<?php bloginfo('template_url') ?>/assets/images/instagram.png"></a>
								</div> -->
							</div>
						</div>
						<div class="contacts-map">
							<?php the_yandex_map('contacts-map', 'option'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>