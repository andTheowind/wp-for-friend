<script>

$(window).load(function(){
	var $preloader = $('#page-preloader');
	$preloader.fadeOut(300);

	(function($){

		$(".header_menu li.menu-item-has-children > a, .mob_menu_ul > li.menu-item-has-children > a").each(function(e){
			$(this).append('<span><svg role="img" width="9" height="9"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php bloginfo('template_url'); ?>/assets/images/sprite.svg#arr"></use></svg></span>');
		});
		
		/*	Search btn
		---------------------------------------*/
		$('.search > a').click(function(event) {
			event.preventDefault();

			$(this).siblings('.search-form').stop(true, false).fadeToggle(150);
		});
		$(document).click(function(event) {
			if ($(event.target).closest(".search").length) return;
			$('.search .search-form').fadeOut(150);
			event.stopPropagation();
		});

		$(".mob_menu_ul > li.menu-item-has-children a span").click(function(e){
			e.preventDefault();
			$( $(this).parents('li.menu-item-has-children')[0] ).toggleClass("active"); 
		});

		/*	Обработка клика по точкам в меню
		---------------------------------------*/
		$('body').on('click', '.menu-dots > a', function(event) {
			event.preventDefault();
		});

		$('.subpage .info, .production_block .info').dotdotdot({});

		/*	SEO-блок
			---------------------------------------*/
		$('.post_index .show-button').click(function(){
			if ( $(this).text() === "Скрыть" ){
				$(this).text('Показать');
			}
			else 
				$(this).text('Скрыть');
		});

		/*	Открыть/закрыть мобильное меню
		---------------------------------------*/
		$(".mobile_menu_open .ps__m_menu_btn").click(function(){
			$(".mobile_menu").addClass("opened"); 
			$("a.nav_close").addClass("opened");
			$("body").addClass("opened");
		});
		$("a.nav_close").click(function(){
			$(".mobile_menu").removeClass("opened");
			$("a.nav_close").removeClass("opened");
			$("body").removeClass("opened");
		});

		$("#index_seo_scroller").mCustomScrollbar();

	})(jQuery);
	custom_resize();
});

/*	Меню внутри точек
---------------------------------------*/
$(window).load(function() {
	setMenu();
});
$(window).resize(function() {
	setMenu();
});
function setMenu(){

	const MAX_WIDTH_MENU = 852;
	var totalWidthMenu = 0;
	var counter = 0;

	$('.header_menu > li').each(function(i, e) {
		totalWidthMenu += $(e).width();
		if(totalWidthMenu >= MAX_WIDTH_MENU)
		{
			counter++;
			if(counter == 1)
				$('.menu_items .header_menu').append('<div class="menu-dots"><a href="">...</a><ul></ul></div>');
			$('.menu-dots > ul').append( $(e)[0].outerHTML );

			$(e).remove();
		}
		
	});
}


function custom_resize(){
	
	$('.content img').each(function(i, e) {					
		var w_post_img = $(e).width();
		var h_post_img = w_post_img * 32 / 87;
		$(e).css('height', h_post_img);
	});

	$('.gallery a').each(function(i, e) {
		var w_gallery_img = $(e).width();
		var h_gallery_img = w_gallery_img / 1.5;
		$(e).css('height', h_gallery_img);
	});	

	$('.gallery .item-thumbnail, .certificates .certificate-thumbnail').each(function(i, e) {
		var w_gallery_img = $(e).width();
		var h_gallery_img = w_gallery_img / 1.5;
		$(e).css('height', h_gallery_img);
	});
}
custom_resize();
$(window).resize( function(){custom_resize();} );


$('.content-text > table').prev('h3').addClass('for_table');
$(".content-text > table").wrap("<div class='table'><div class='table-responsive'></div></div>");
$('.content-text > .table').each(function(){
	$(this).prev('h3.for_table').prependTo( $(this) );
});

$('input[type="tel"]').mask("+7 (999) 999-99-99");
$('#exampleModal').on('hide.bs.modal', function(event){
		$(this).find('.loader').hide();
		$(this).find('.mail_sent').hide();
		$(this).find('input').removeClass('wpcf7-not-valid');
		$(this).find('.wpcf7-not-valid-tip').hide();
	});
	$('.close').click(function(){
		$('#exampleModal').modal('hide');
	});
	$('.close').click(function(){
		$('#exampleModal2').modal('hide');
	});
	$('.wpcf7').on('wpcf7mailsent',function(){
		$(this).parent().siblings('.mail_sent').css('display','flex');
		$(this).parent().siblings('.loader').hide();
	});
	$('.wpcf7').on('submit',function(){
		$(this).parent().siblings('.loader').show();
	});
	$('.wpcf7').on('wpcf7failed, wpcf7invalid',function(){
		$(this).parent().siblings('.loader').hide();
});
</script>