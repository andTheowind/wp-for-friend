<div class="col-12 col-sm-6 col-md-4">
	<a href="<?php the_permalink(); ?>" class="service_block">
		<?php if( get_the_post_thumbnail() ): ?>
			<div class="img_wrapper" style="background-image: url(<?php echo get_the_post_thumbnail_url('', 'medium'); ?> );"></div>
		<?php else: ?>
			<div class="img_wrapper">
				<svg role="img" width="80" height="60">
					<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php bloginfo('template_url'); ?>/assets/images/sprite.svg#no_picture"></use>
				</svg>
			</div>
		<?php endif; ?>
		<div class="info">
			<span><?php the_title(); ?></span>
		</div>
	</a>
</div>