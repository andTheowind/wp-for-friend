<?php

	if(!get_field('color_scheme_replace', 'option')) return false;

	$hexColor = get_field('color_scheme', 'option');
	$red = hex_to_rgb($hexColor)['red'];
	$green = hex_to_rgb($hexColor)['green'];
	$blue = hex_to_rgb($hexColor)['blue'];
	$rgbaBorder = "rgba($red, $green, $blue, 0.2)";
	$rgbaOpacity = "rgba($red, $green, $blue, 0.2)";
	$rgbaOpacityGallery = "rgba($red, $green, $blue, 0.5)";

	$block = get_field('callback_form_bg', 'option');

	$hexColorPreloader = get_field('color_scheme_preloader', 'option');
	$hexColorForm = get_field('color_scheme_form', 'option');
	$hexColorButton = get_field('color_scheme_button', 'option');


?>
<style>
	a {
		color: <?php echo $hexColor; ?>;
	}

	a:hover {
		color: #7791ac;
	}
	
	


/*	Стили основные
	---------------------------------------*/
	header .wrapper_container .wrapper .upper_header .calc_price,
	.index_section .index_section-title a,
	nav.mobile_menu .calc_price,
	.article_block .info i,
	.article_block .info:hover i,
	.not_found .not_found-body .not_found-content a,
	.navigation-wrapper .current:hover
	{
		border-color: <?php echo $hexColor; ?>;
	}
	.content .text_underline p
	{
		border-bottom-color: <?php echo $hexColor; ?>;
	}
	.subpage:hover .info span span,
	.content .files .file:hover .file-info .name em
	{
		border-bottom-color: <?php echo $rgbaOpacity; ?> !important;
	}
	.content .quote
	{
		border-left-color: <?php echo $hexColor; ?>;
	}

	header .wrapper_container .wrapper .upper_header .calc_price,
	header .wrapper_container .wrapper .lower_header .menu_items .header_menu > li:hover > a,
	header .wrapper_container .wrapper .lower_header .menu_items .header_menu .menu-dots > a:hover,
	.index_section .index_section-title a,
	.service_block:hover .info span,
	.production_block:hover .info span,
	nav.mobile_menu .mob_menu_ul > li > a:hover,
	nav.mobile_menu .calc_price,
	.article_block .info i,
	.article_block .info:hover b,
	.contacts-info .group span,
	.search-form form .button_wrapper:hover input,
	.search_page-form form .button_wrapper:hover input,
	.search_result_block:hover .search_result_block-title,
	.not_found .not_found-body .not_found-content a,
	.subpage:hover .info span span
	{
		color: <?php echo $hexColor; ?>;
	}
	
	.content .files .file:hover .file-info .name
	{
		color: <?php echo $rgbaOpacityGallery; ?> !important;
	}

	header .wrapper_container .wrapper .upper_header .calc_price > svg,
	header .wrapper_container .wrapper .lower_header .menu_items .header_menu > li:hover > a span > svg,
	header .wrapper_container .wrapper .lower_header .menu_items .search > a:hover svg,
	.mobile_menu_open a svg,
	nav.mobile_menu .mob_menu_ul > li > a:hover svg,
	nav.mobile_menu .mobile_search form .search_button:hover svg,
	nav.mobile_menu .calc_price > svg
	{
		fill: <?php echo $hexColor; ?>;
	}
	
	header .wrapper_container .wrapper .upper_header .calc_price:hover,
	.dropdown_menu, header .wrapper_container .wrapper .lower_header .menu_items .header_menu > li .sub-menu, 
	header .wrapper_container .wrapper .lower_header .menu_items .header_menu .menu-dots ul,
	.index_section .index_section-title a:hover,
	.production_block .info .block_label,
	#index_seo_block #index_seo_scroller .mCSB_dragger_bar,
	.mobile_menu_open .ps__m_menu_btn > div,
	.mobile_menu_open .ps__m_menu_btn > div:before, 
	.mobile_menu_open .ps__m_menu_btn > div:after,
	.nav_close span,
	nav.mobile_menu .calc_price:hover,
	nav.mobile_menu .mob_menu_ul > li .sub-menu,
	.article_block .info:hover i,
	.search-form,
	.search-form form .button_wrapper,
	.search_page-form,
	.search_page-form form .button_wrapper,
	.not_found .not_found-body .not_found-content a:hover,
	.navigation-wrapper .current,
	.table-title, 
	.content .table h3
	{
		background-color: <?php echo $hexColor; ?>;
	}

	.content .certificates .certificate-thumbnail:after,
	.content .gallery .item-thumbnail:after
	{
		background-color: <?php echo $rgbaOpacityGallery; ?>;
	}

	.sidebar ul > li.current-menu-item a, 
	.sidebar ul > li.current_page_item a
	{
		background-color: <?php echo $hexColor; ?> !important;
	}

/* Стили прелоадера */
	.cssload-thecube .cssload-cube:before
	{
		background-color: <?php echo $hexColorPreloader; ?>
	}

/* Стили при отправки формы*/
	.form .loader svg,
	.form .mail_sent svg
	{
		fill: <?php echo $hexColorForm; ?>
	}

	.form .mail_sent p
	{
		color: <?php echo $hexColorForm; ?>;
	}

/* Стили кнопок */
	header .wrapper_container .wrapper .upper_header .calc_price,
	.index_section .index_section-title a,
	.article_block .info i
		{
			color: <?php echo $hexColorButton; ?>;
			border-color: <?php echo $hexColorButton; ?>;
		}

	header .wrapper_container .wrapper .upper_header .calc_price > svg
		{
			fill: <?php echo $hexColorButton; ?>;
		}

	header .wrapper_container .wrapper .upper_header .calc_price:hover,
	.index_section .index_section-title a:hover,
	.article_block .info:hover i,
	.form input[type="submit"],
	.send_review-body form [type="submit"]
		{
			background-color: <?php echo $hexColorButton; ?>;
			border-color: <?php echo $hexColorButton; ?>;
		}

	.send_review-body form [type="submit"]:hover,
	.send_review-body form [type="submit"]:focus,
	.form [type="submit"]:hover
		{
			border-color: <?php echo $hexColorButton; ?>;
			color: <?php echo $hexColorButton; ?>;
		}





</style>
