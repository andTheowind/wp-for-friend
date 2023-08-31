<?php if( $post->post_parent !== 0 ): ?>



	<?php
		$curPageID = get_the_ID();
		$subpages = new WP_Query(array(
			'post_type' => 'page',
			'post_parent' => $post->post_parent,
			'posts_per_page' => -1,
			'order' => 'ASC',
			'orderby' => 'menu_order'
			)
		);
	?>
	<?php if($subpages->have_posts()) : ?>
		<div class="sidebar">
			<ul>
				<?php while($subpages->have_posts()): $subpages->the_post(); ?>
					<li<?php if($curPageID === get_the_ID()) echo ' class="current_page_item"'; ?>><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php endwhile; ?>
			</ul>
		</div>
	<?php endif; ?>
	<?php wp_reset_postdata(); ?> 




<?php else: ?>

	<div class="sidebar">
		<ul>
			<?php 
				wp_nav_menu( array('menu' => 'sidebar_menu', 'container' => '', 'items_wrap' => '%3$s',) );
			?>
		</ul>
	</div>



<?php endif; ?>
