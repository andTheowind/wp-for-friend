<?php get_header(); ?>

	<?php if( have_rows('main-slider', 'option') ): ?>
			
		<?php get_template_part('components/index-slider'); ?>

	<?php endif; ?>


	<?php while( have_rows('main-general', 'option') ) : the_row(); ?>

		<?php if( get_row_layout() == 'main-general-advantages' ) : ?>
			
			<?php get_template_part('components/index-advantages'); ?>

		<?php elseif( get_row_layout() == 'main-general-production' ) : ?>
			
			<?php get_template_part('components/index-production'); ?>

		<?php elseif( get_row_layout() == 'main-general-services' ) : ?>
			
			<?php get_template_part('components/index-services'); ?>

		<?php elseif( get_row_layout() == 'main-general-seo' ) : ?>
			
			<?php get_template_part('components/index-seo'); ?>

		<?php endif; ?>

	<?php endwhile; ?>

<?php get_footer(); ?>