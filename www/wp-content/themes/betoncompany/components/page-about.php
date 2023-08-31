<section class="first">
    <?php get_template_part('components/breadcrumbs'); ?>
    <div class="container">
        <?php echo get_template_part('components/page-title'); ?>
        
        <img src="<?php echo get_field('first-img');?>" alt="" class="first__img">
        <p class="first__subtitle">
            <?php echo get_field('first-subtitle');?>
        </p>

    </div>
</section>

<section class="about">
    <div class="container">
        <div class="about-wrapper">
            <h2 class="about__title">
                <?php echo get_field('about-title');?>
            </h2>
            <span class="about__subtitle">
                <?php echo get_field('about-subtitle');?>
            </span>
        </div>
        <span class="about-list__title">
            <?php echo get_field('about-list-title');?>
        </span>
        <?php if ( have_rows('about-list') ) : ?>
        <ul class="about-list">

            <?php while( have_rows('about-list') ) : the_row(); ?>
            <li class="about-list__item">
                <?php the_sub_field('about-list-item'); ?>
            </li>

            <?php endwhile; ?>
        </ul>
        <?php endif; ?>
        <?php if ( have_rows('about-features') ) : ?>
        <div class="about-features">
            <span class="about-features__title">
                <?php echo get_field('about-features-title');?>
            </span>
            <div class="row">
            <?php while( have_rows('about-features') ) : the_row(); ?>
                <div class="col-md-6">
                    <div class="about-features-item">
                        <img src="<?php the_sub_field('about-features-icon'); ?>" alt="" class="about-features__icon">
                        <span class="about-features__desc">
                            <?php the_sub_field('about-features-desc'); ?>
                        </span>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>