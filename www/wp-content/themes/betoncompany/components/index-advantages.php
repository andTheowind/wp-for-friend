<?php if( get_sub_field('text-1', 'option') ): ?>
<section id="index-advantages-block">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<p class="title_plus"><?php the_sub_field('adv-title')?></p>
			</div>
			<div class="list_plus">	
				<div class="col-md-3 col-sm-4 col-12">
					<div class="plus">
						<img src="<?php echo get_sub_field('img-1','option')['sizes']['large']; ?>" alt="">
						<p><?php the_sub_field('text-1');?></p>
					</div>
				</div>
				<div class="col-md-3 col-sm-4 col-12">
					<div class="plus">
						<img src="<?php echo get_sub_field('img-2','option')['sizes']['large']; ?>" alt="">
						<p><?php the_sub_field('text-2');?></p>
					</div>
				</div>				
				<div class="col-md-3 col-sm-4 col-12">
					<div class="plus">
						<img src="<?php echo get_sub_field('img-3','option')['sizes']['large']; ?>" alt="">
						<p><?php the_sub_field('text-3');?></p>
					</div>
				</div>
				<div class="col-md-3 col-sm-4 col-12">
					<div class="plus">
						<img src="<?php echo get_sub_field('img-4','option')['sizes']['large']; ?>" alt="">
						<p><?php the_sub_field('text-4');?></p>
					</div>
				</div>							
			</div>
		</div>
	</div>
</section>
<?php endif; ?>