<?php $elements = get_sub_field('index-block-elements', 'option'); ?>

<?php if( $elements ): ?>
	<section id="section-production" class="index_section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="index_section-title">
						<?php if(get_sub_field('index-block-title')): ?>
							<span><?php the_sub_field('index-block-title'); ?></span>
						<?php else: ?>
							<span>Популярная продукция</span>
						<?php endif; ?>
						<a href="<?php the_permalink(90); ?>">В раздел</a>
					</div>
				</div>
				<?php foreach($elements as $element) : ?>
					<?php setup_postdata( $GLOBALS['post'] =& $element ); ?>
						<?php get_template_part('components/production_block'); ?>
					<?php wp_reset_postdata(); ?>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
<?php endif; ?>