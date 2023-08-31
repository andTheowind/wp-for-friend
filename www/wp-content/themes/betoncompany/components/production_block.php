<div class="col-12 col-sm-6 col-md-4 col-lg-3">
	<a href="<?php the_permalink(); ?>" class="production_block">
		<?php if( get_the_post_thumbnail() ): ?>
			<div class="img_wrapper" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?> );"></div>
		<?php else: ?>
			<div class="img_wrapper">
				<svg role="img" width="60" height="50">
					<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php bloginfo('template_url'); ?>/assets/images/sprite.svg#no_picture"></use>
				</svg>
			</div>
		<?php endif; ?>
		<div class="info">
			<?php if(get_field('product-min_price')): ?>
				<div class="block_label">
					от <?php echo(number_format(get_field('product-min_price'), 0, '.', ' ')); ?> руб./м<sup>3</sup>
				</div>
			<?php endif; ?>
			<span><?php the_title(); ?></span>
		</div>
	</a>
</div>