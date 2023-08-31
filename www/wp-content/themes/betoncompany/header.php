<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="expires" content="0">
	<title><?php wp_title(); ?> <?php bloginfo('name'); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="icon" href="<?php the_field('site_favicon', 'option'); ?>" type="image/png">
	<link rel="shortcut icon" href="<?php the_field('site_favicon', 'option'); ?>" type="image/png">

	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css?v124" type="text/css" media="screen" />

	<?php the_field('head_scripts', 'option'); ?>

	<?php wp_head(); ?>

	<?php get_template_part( 'assets/css/slider-style' ); ?>

	<?php get_template_part( 'assets/css/dinamic-style' ); ?>

</head>

<body <?php body_class(); ?>>

	<!-- Preloader object -->
	 <div id="page-preloader">
		<div class="cssload-thecube">
			<div class="cssload-cube cssload-c1"></div>
			<div class="cssload-cube cssload-c2"></div>
			<div class="cssload-cube cssload-c4"></div>
			<div class="cssload-cube cssload-c3"></div>
		</div>
	</div> 
	<!-- /Preloader object -->

	<!-- Mobile menu -->
	<a class="nav_close"><span></span></a>
	<nav class="mobile_menu">
		<!-- Основное меню -->
		<ul class="mob_menu_ul">
			<li<?php if(is_home()) echo ' class="current_page_item"'; ?>><a href="/">Главная</a></li>
			<?php wp_nav_menu( array( 'menu'=>'header_menu', 'menu_class' => 'main', 'container' => false, 'items_wrap' => '%3$s' ) ); ?>
		</ul>
		<div class="wrapper">
			<?php if( have_rows('contacts-locations', 'option') ): ?>
			
			
				<!--Закомментирован адрес в мобилке -->
			
<!-- 				<div class="header_group">
					<i>
						<svg role="img" width="9" height="13"><use xlink:href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#location"></use></svg>
					</i>
					<div class="links">
						<?php while(have_rows('contacts-locations', 'option')): the_row(); ?>
							<span><?php the_sub_field('address'); ?></span>
						<?php endwhile; ?>
					</div>
				</div> -->
			
			
			<?php endif; ?>
			<?php if( have_rows('contacts-emails', 'option') ): ?>
				<div class="header_group">
					<i>
						<svg role="img" width="15" height="10"><use xlink:href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#email"></use></svg>
					</i>
					<div class="links">
						<?php while(have_rows('contacts-emails', 'option')): the_row(); ?>
							<a href="mailto:<?php the_sub_field('email'); ?>"><?php the_sub_field('email'); ?></a>
						<?php endwhile; ?>
					</div>
				</div>
			<?php endif; ?>
			<?php if( have_rows('contacts-phones', 'option') ): ?>
			
					<!-- Закомментирован телефон -->			
			
<!-- 				<div class="header_group">
					<i>
						<svg role="img" width="12" height="12"><use xlink:href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#phone"></use></svg>
					</i>
					<div class="links">
						<?php while(have_rows('contacts-phones', 'option')): the_row(); ?>
							<a href="tel:<?php the_sub_field('phone'); ?>"><?php the_sub_field('phone'); ?></a>
						<?php endwhile; ?>
					</div>
				</div> -->
			<?php endif; ?>
			<div class="mobile_search">
				<form method="get" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="search_form">
					
					<!-- Закомментирован поиск в мобилке -->
<!-- 					<input type="text" placeholder="Поиск" value="<?php echo get_search_query(); ?>" name="s" id="s" />
					<div class="search_button">
						<input type="submit" value="" id="searchsubmit">
						<svg role="img" width="15" height="16">
							<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php bloginfo('template_url'); ?>/assets/images/sprite.svg#lupa_icon"></use>
						</svg>
					</div> -->
				</form>
			</div>
			<a href="#" class="calc_price">
				<svg role="img" width="22" height="22"><use xlink:href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#rub_icon"></use></svg>
				Оставить заявку
			</a>
		</div>
	</nav>
	<!-- /Mobile menu -->

	<div class="wrapper">
		<main>
			<header>
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="wrapper_container">
								<div class="logo_wrapper">
									<a href="/" id="logo">
										<?php $logo = get_field('site_logo', 'option') ? get_field('site_logo', 'option') : get_bloginfo( 'template_url' ) . '/assets/images/logo.png' ?>
										<img src="<?php echo $logo; ?>" alt="<?php wp_title(); ?> <?php bloginfo('name'); ?>" itemprop="image" id="logo_img">
									</a>
								</div>
								<div class="wrapper">
									<div class="upper_header hidden-lg-down">
										<?php if( have_rows('contacts-locations', 'option') ): ?>
										
											<!--Закомментирован адрес -->
										
<!-- 											<div class="header_group">
												<i>
													<svg role="img" width="9" height="13"><use xlink:href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#location"></use></svg>
												</i>
												<div class="links">
													<?php while(have_rows('contacts-locations', 'option')): the_row(); ?>
														<span><?php the_sub_field('address'); ?></span>
													<?php endwhile; ?>
												</div>
											</div> -->
										<?php endif; ?>
										<?php if( have_rows('contacts-emails', 'option') ): ?>
											<div class="header_group">
												<i>
													<svg role="img" width="15" height="10"><use xlink:href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#email"></use></svg>
												</i>
												<div class="links">
													<?php while(have_rows('contacts-emails', 'option')): the_row(); ?>
														<a href="mailto:<?php the_sub_field('email'); ?>"><?php the_sub_field('email'); ?></a>
													<?php endwhile; ?>
												</div>
											</div>
										<?php endif; ?>
										<?php if( have_rows('contacts-phones', 'option') ): ?>
										
									<!--Закомментирован телефон -->
										
<!-- 											<div class="header_group">
												<i>
													<svg role="img" width="12" height="12"><use xlink:href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#phone"></use></svg>
												</i>
												<div class="links">
													<?php while(have_rows('contacts-phones', 'option')): the_row(); ?>
														<a href="tel:<?php the_sub_field('phone'); ?>"><?php the_sub_field('phone'); ?></a>
													<?php endwhile; ?>
												</div>
											</div> -->
										<?php endif; ?>
										<a href="#" class="calc_price" data-target="#exampleModal" data-toggle="modal">
											<svg role="img" width="22" height="22"><use xlink:href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#rub_icon"></use></svg>
											Оставить заявку
										</a>
									</div>
									<div class="lower_header">
										<div class="mobile_menu_open hidden-xl-up">
											<a href="tel:<?php the_field('contacts-mob_phone', 'option'); ?>" class="phone">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="19.5 0.1 161 160.9" enable-background="new 19.5 0.1 161 160.9"><path d="M180.4 127c.3 2.6-.5 4.9-2.4 6.8l-22.7 22.5c-1 1.1-2.4 2.1-4 2.9-1.6.8-3.3 1.3-4.9 1.5-.1 0-.5 0-1 .1-.6.1-1.3.1-2.2.1-2.2 0-5.7-.4-10.5-1.1-4.8-.7-10.7-2.6-17.7-5.5s-14.9-7.2-23.8-13-18.3-13.7-28.3-23.9c-8-7.8-14.5-15.3-19.8-22.5-5.2-7.2-9.4-13.8-12.6-19.9-3.2-6.1-5.6-11.6-7.2-16.5s-2.7-9.2-3.2-12.8c-.6-3.6-.8-6.4-.7-8.4.1-2 .2-3.2.2-3.4.2-1.6.7-3.2 1.5-4.9.8-1.6 1.8-3 2.9-4l22.8-22.6c1.6-1.6 3.4-2.4 5.5-2.4 1.5 0 2.8.4 3.9 1.3s2.1 1.9 2.9 3.2l18.2 34.6c1 1.8 1.3 3.8.9 6s-1.4 4-2.9 5.5l-8.4 8.4c-.2.2-.4.6-.6 1.1-.2.5-.3.9-.3 1.3.5 2.4 1.5 5.1 3.1 8.2 1.4 2.7 3.5 6.1 6.3 10 2.8 3.9 6.9 8.4 12.1 13.5 5.1 5.2 9.7 9.3 13.6 12.2 4 2.9 7.3 5 10 6.4 2.7 1.4 4.7 2.2 6.1 2.5l2.1.4c.2 0 .6-.1 1.1-.3.5-.2.9-.4 1.1-.6l9.7-9.9c2-1.8 4.4-2.7 7.2-2.7 1.9 0 3.5.3 4.6 1h.2l32.9 19.4c2.4 1.4 3.9 3.3 4.3 5.5z"/></svg>
											</a>
											<div class="ps__m_menu_btn" data-ps-menu="m_menu" data-ps-m-menu="ps__m_menu"><div></div></div>
										</div>
										<div class="menu_items hidden-lg-down">
											<?php wp_nav_menu( array( 'menu'=>'header_menu', 'menu_class' => 'header_menu', 'container' => false ) ); ?>
<!-- 											<div class="search">
												<a href=""><svg role="img" width="16" height="16"><use xlink:href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#lupa_icon"></use></svg></a>
												<div class="search-form">
													<?php get_search_form(); ?>
												</div>
											</div> -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
