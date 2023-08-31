<style>
	<?php // Заголовок ?>
	#index_slider li .text_wrapper b.<?php the_field('slider_effect_title_show', 'option'); ?> {
		-webkit-animation-duration: <?php the_field('slider_effect_title_show-speed', 'option'); ?>s;
		-o-animation-duration: <?php the_field('slider_effect_title_show-speed', 'option'); ?>s;
		animation-duration: <?php the_field('slider_effect_title_show-speed', 'option'); ?>s;

		-webkit-animation-delay: <?php the_field('slider_effect_title_show-time', 'option'); ?>s;
		-o-animation-delay: <?php the_field('slider_effect_title_show-time', 'option'); ?>s;
		animation-delay: <?php the_field('slider_effect_title_show-time', 'option'); ?>s;
	}
	<?php // Текст ?>
	#index_slider li .text_wrapper span.<?php the_field('slider_effect_text_show', 'option'); ?> {
		-webkit-animation-duration: <?php the_field('slider_effect_text_show-speed', 'option'); ?>s;
		-o-animation-duration: <?php the_field('slider_effect_text_show-speed', 'option'); ?>s;
		animation-duration: <?php the_field('slider_effect_text_show-speed', 'option'); ?>s;

		-webkit-animation-delay: <?php the_field('slider_effect_text_show-time', 'option'); ?>s;
		-o-animation-delay: <?php the_field('slider_effect_text_show-time', 'option'); ?>s;
		animation-delay: <?php the_field('slider_effect_text_show-time', 'option'); ?>s;
	}
	<?php // Кнопка ?>
	#index_slider li .text_wrapper a.<?php the_field('slider_effect_button_show', 'option'); ?> {
		-webkit-animation-duration: <?php the_field('slider_effect_button_show-speed', 'option'); ?>s;
		-o-animation-duration: <?php the_field('slider_effect_button_show-speed', 'option'); ?>s;
		animation-duration: <?php the_field('slider_effect_button_show-speed', 'option'); ?>s;

		-webkit-animation-delay: <?php the_field('slider_effect_button_show-time', 'option'); ?>s;
		-o-animation-delay: <?php the_field('slider_effect_button_show-time', 'option'); ?>s;
		animation-delay: <?php the_field('slider_effect_button_show-time', 'option'); ?>s;
	}

	<?php // Заголовок ?>
	#index_slider li .text_wrapper b.<?php the_field('slider_effect_title_hide', 'option'); ?> {
		-webkit-animation-duration: <?php the_field('slider_effect_title_hide-speed', 'option'); ?>s;
		-o-animation-duration: <?php the_field('slider_effect_title_hide-speed', 'option'); ?>s;
		animation-duration: <?php the_field('slider_effect_title_hide-speed', 'option'); ?>s;
	}
	<?php // Текст ?>
	#index_slider li .text_wrapper span.<?php the_field('slider_effect_text_hide', 'option'); ?> {
		-webkit-animation-duration: <?php the_field('slider_effect_text_hide-speed', 'option'); ?>s;
		-o-animation-duration: <?php the_field('slider_effect_text_hide-speed', 'option'); ?>s;
		animation-duration: <?php the_field('slider_effect_text_hide-speed', 'option'); ?>s;
	}
	<?php // Кнопка ?>
	#index_slider li .text_wrapper a.<?php the_field('slider_effect_button_hide', 'option'); ?> {
		-webkit-animation-duration: <?php the_field('slider_effect_button_hide-speed', 'option'); ?>s;
		-o-animation-duration: <?php the_field('slider_effect_button_hide-speed', 'option'); ?>s;
		animation-duration: <?php the_field('slider_effect_button_hide-speed', 'option'); ?>s;

	}
	.slider_wrapper .bx-wrapper .bx-viewport ul#index_slider li:before{
		background: <?php the_field('slider-filter_color', 'option'); ?>;
	}
	.slider_wrapper .bx-wrapper .bx-viewport ul#index_slider li .text_wrapper b,
	.slider_wrapper .bx-wrapper .bx-viewport ul#index_slider li .text_wrapper a{
		color: <?php the_field('slider-text_color', 'option'); ?>;
	}
	.slider_wrapper .bx-wrapper .bx-viewport ul#index_slider li .text_wrapper a,
	.slider_wrapper .bx-wrapper .bx-controls .bx-pager-item a.active{
		border-color: <?php the_field('slider-text_color', 'option'); ?>;
	}
	.slider_wrapper .bx-wrapper .bx-controls-direction a span svg{
		fill: <?php the_field('slider-text_color', 'option'); ?>;
	}
	.slider_wrapper .bx-wrapper .bx-controls .bx-pager-item a{
		background-color: <?php the_field('slider-text_color', 'option'); ?>;
	}
</style>