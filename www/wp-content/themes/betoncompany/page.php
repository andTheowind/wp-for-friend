<?php get_header(); ?>

<?php if(is_page(112)): ?>

	<?php get_template_part('components/page-contacts'); ?>

<?php elseif(is_page(135)): ?>

	<?php get_template_part('components/page-policy'); ?>

<?php elseif(is_page(133)): ?>

	<?php get_template_part('components/page-agreement'); ?>

<?php elseif(is_page(90)): ?>

	<?php get_template_part('components/page-production'); ?>

<?php elseif(is_page(103)): ?>

	<?php get_template_part('components/page-services'); ?>

<?php elseif(is_page(314)): ?>

	<?php get_template_part('components/page-reviews'); ?>

<?php elseif(is_page(88)): ?>

	<?php get_template_part('components/page-about'); ?>

<?php else: ?>

	<?php get_template_part('components/page-single'); ?>

<?php endif; ?>

<?php get_footer(); ?>

















