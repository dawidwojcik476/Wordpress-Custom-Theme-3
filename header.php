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
    <?php if (is_page() || is_single()): ?>
 <div class="singlepage-header-container">
    <?php endif; ?>
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