<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="icon" type="image/png" href="<?php the_field('favicon','option'); ?>" />
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="app-container">
<section class="front-welcome">

    <a href="#header">
        <div class="front-welcome__logo">
            <img src="<?php echo get_template_directory_uri(); ?>/public/images/logo.png" alt="Logo Fajnie Tu">
        </div>

        <div class="front-welcome__button">
            <button>Przejdź do strony</button>
        </div>

        <div class="front-welcome__arrow">
            <img src="<?php echo get_template_directory_uri(); ?>/public/images/arrowre.png" alt="Przejdź do strony">
        </div>

    </a>
</section>


<header class="header" id="header">

<div class="header__container">
    <div class="header__logo">
        <a class="header__logo-link" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
            <?php if( get_field('header_logo', 'option') ): ?>
            <img class="header__logo-image" src="<?php echo get_field('header_logo', 'option'); ?>"
                alt="Logo" />
            <?php endif; ?>

        </a>

    </div>
    <nav class="header__menu">
        <?php    wp_nav_menu([
              'theme_location'    => 'primary-menu',
              'menu_id'            => 'primary-menu',
              'container_class'   => 'header__menu-list',
              'container_id'      => '',
              'menu_class'        => 'header__menu-ul',
]); ?>

      
    </nav>
    <div class="header__phonenum">
            <img src="<?php echo get_template_directory_uri(); ?>/public/images/phone-handset-line.png"
                alt="Telefon">
            <p>+48 442 123 421</p>
        </div>
    <div class="header__ham">
        <div class="header__ham-menubtn"></div>
    </div>
</div>

</header>
<div class="main-slider__container">


<section class="main-slider" id="home">
    <?php   $args = array(
              'post_type'        => 'slider',
              'numberposts' => -1,
                 'suppress_filters' => false
                  );
               $slides = get_posts($args);

     

                  if( ! empty( $slides ) ){

             foreach ($slides as $slide) : ?>

    <div class="main-slider__item">
        <div class="main-slider__left">
            <div class="main-slider__header">
                <h1><?php echo $slide->post_title; ?></h1>
            </div>

            <div class="main-slider__descript">
                <p><?php the_field('slider_content', $slide) ?>
                </p>
            </div>
            <div class="main-slider__descriptnd">
                <p><?php the_field('small_top_header', $slide) ?> </p>
            </div>
            <div class="main-slider__button">
                <a href="<?php the_field('slider_url', $slide); ?>"><?php the_field('slider_button_title', $slide); ?>
                </a>
            </div>
        </div>

        <div class="main-slider__right">
            <div class="main-slider__image">
                <img src="<?php the_field('slider_image', $slide); ?>" alt="Zdjęcia slidera">
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    <?php }; ?>
    <?php  print_r( $term_obj_list);?>

   
</section>
<div class="main-slider__swapper-dots"></div>
</div>
<?php if( have_rows('frontpage-aboutus') ): ?>
    <?php while( have_rows('frontpage-aboutus') ): the_row(); ?>
<section class="aboutus">
    <div class="aboutus__header">
        <h2>
        <?php echo get_sub_field('aboutusfront_header') ?>
        </h2>
    </div>
    <div class="aboutus__content">
        <div class="aboutus__content-left">
            <div class="aboutus__content-header">
                <h3>   <?php echo get_sub_field('aboutusfront_content-header') ?></h3>
            </div>
            <div class="aboutus__content-descript">
                <p> <?php echo get_sub_field('trescaboutusfront_content') ?>

                </p>
            </div>
        </div>
        <div class="aboutus__content-right">
            <div class="aboutus__content-image">
                <img src="   <?php echo get_sub_field('aboutusfront_image') ?>" alt="">

            </div>
        </div>
    </div>
    <div class="aboutus__footer">
        <p><?php echo get_sub_field('aboutusfront_footer') ?></p>
    </div>

</section>
<?php endwhile; ?>
    <?php endif; ?>

    <?php if( have_rows('frontoffer') ): ?>
    <?php while( have_rows('frontoffer') ): the_row(); ?>
<section class="front-offer">
    <div class="front-offer__header">
        <h3>
        <?php echo get_sub_field('frontoffer_header') ?>
        </h3>
    </div>
    <div class="front-offer__content">
        <div class="front-offer__content-left">
            <div class="front-offer__content-image">
                <img src=" <?php echo get_sub_field('frontoffer_image') ?>" alt="">

            </div>
        </div>
        <div class="front-offer__content-right">

            <div class="front-offer__content-header">
                <h4><?php echo get_sub_field('frontoffer_content-header') ?></h4>
            </div>
            <div class="front-offer__content-descript">
                <p><?php echo get_sub_field('frontoffer_title-descript') ?>

                </p>
            </div>

            <div class="front-offer__content-descriptnd">
                <p><?php echo get_sub_field('frontoffer_content') ?>

                </p>
            </div>

            <div class="front-offer__content-list">
                <ul>
                <?php if( have_rows('frontoffer_points') ): ?>
            <?php while( have_rows('frontoffer_points') ): the_row(); ?>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/star.png" alt="Gwiazdka">
                        <p><?php echo get_sub_field('frontoffer_points-content') ?></p>
                    </li>

                    <?php endwhile; ?>
            <?php endif; ?>
                </ul>
            </div>

            <div class="front-offer__content-button">
                <a href="<?php echo get_sub_field('frontoffer_button-url') ?>" class="pinkbutton"><?php echo get_sub_field('frontoffer_button') ?></a>
            </div>
        </div>
    </div>

</section>
<?php endwhile; ?>
    <?php endif; ?>
<section class="front-gallery">
    <div class="front-gallery__points">
    <?php if( have_rows('frontofferblocks') ): ?>
            <?php while( have_rows('frontofferblocks') ): the_row(); ?>
        <a href="<?php echo get_sub_field('frontofferblocks_url') ?>">
            <div class="front-gallery__point">
                <div class="front-gallery__point-icon">
                    <img src="<?php echo get_sub_field('frontofferblocks_icon') ?>" alt="Gwiazdka">
                </div>
                <div class="front-gallery__point-title">
                    <p><?php echo get_sub_field('frontofferblocks_title') ?></p>
                </div>
                <div class="front-gallery__point-descript">
                    <p><?php echo get_sub_field('frontofferblocks_descript') ?> </p>
                </div>
                <div class="front-gallery__point-button pinkbutton"><?php echo get_sub_field('frontofferblocks_button') ?></div>
            </div>
        </a>
        <?php endwhile; ?>
    <?php endif; ?>
       
    </div>

    <div class="front-gallery__content">
        <div class="front-gallery__content-header">
            <h5>Galeria zdjęć</h5>
        </div>
    </div>
    <div class="front-gallery__content-images">


        <?php 
        $images = get_field('frontpage-gallery');
          if( $images ): ?>
        <ul>
            <?php foreach( $images as $image ): ?>
            <li class="gallery__item">
                <a href="<?php echo esc_url($image['url']); ?>" data-lightbox="roadtrip">
                    <img src="<?php echo esc_url($image['sizes']['large']); ?>"
                        alt="<?php echo esc_attr($image['alt']); ?>" />
                </a>
                <p><?php echo esc_html($image['caption']); ?></p>
            </li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>

    </div>

    <div class="front-gallery__content-button">
        <button class="pinkbutton">Zobacz wszystkie</button>
    </div>


</section>

<section class="news">
    <div class="front-gallery__content-header">
        <h5>Aktualności</h5>
    </div>
    <div class="news__posts">
        <?php 

            $args = array(
                'post_type' => 'aktualnosci',
                'numberposts' => 3,
                'suppress_filters' => false
                
                        );
                $news = get_posts($args);
                    if( ! empty( $news ) ){
                    foreach ($news as $new) : ?>
        <a href="<?php echo get_permalink($new->ID) ?>">
            <div class="news__posts-item">
                <div class="news__posts-image">

                    <img src="<?php echo the_field('single_post_thumbnail', $new) ?> " alt="">
                </div>
                <div class="news__posts-content">
                    <h4 class="news__posts-header"><?php echo $new->post_title; ?></h4>
                    <p class="news__posts-textarea"><?php echo $new->post_excerpt;  ?> </p>
                    <div class="news__posts-button">
                        <button class="pinkbutton">Czytaj więcej</button>
                    </div>
                </div>
            </div>
        </a>


        <?php endforeach; ?>
        <?php }; ?>

    </div>
</section>




<?php get_footer(); ?>