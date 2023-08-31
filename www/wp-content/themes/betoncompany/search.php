<?php get_header(); ?>

<section id="section_breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="breadcrumbs clearfix">
					<ul class="clearfix">
						<li><a href="/">Главная</a></li>
						<li><span>Поиск</span></li>
					</ul>
				</div>
				<p class="page_title">Поиск</p>
			</div>
		</div>
	</div>
</section>

<section class="search_page">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="search_page-form active">
					<form method="get" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="search_form">
						<input type="text" placeholder="Поиск" value="<?php echo get_search_query(); ?>" name="s" id="s" />
						<div class="button_wrapper">
							<input type="submit" value="Найти" id="searchsubmit">
						</div>
					</form>
				</div>
			</div>

			<?php if (have_posts()) : ?>

				<?php while (have_posts()) : the_post(); ?>

					<?php $class = ''; if( !get_the_post_thumbnail_url() ) $class = 'no-picture' ?>

					<div class="col-12">
						<a class="search_result_block" href="<?php the_permalink(); ?>">
							<p class="search_result_block-title"><em><?php the_title(); ?></em></p>
							<p class="search_result_block-desc"><?php the_field('description'); ?></p>
						</a>
					</div>

				<?php endwhile; ?>

				<div class="col-12">
					<div class="wrapper_pagination">
						<ul>
							<?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>
						</ul>
					</div>
				</div>

			<?php else : ?>
				<div class="col-12">
					<div class="content-text">
						<p><?php _e("No results found."); ?></p>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
