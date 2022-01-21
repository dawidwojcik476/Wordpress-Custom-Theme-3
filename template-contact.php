<?php
/*
Template Name: Szablon Kontakt
Template Post Type: post, page, event
*/?>

<?php get_header(); ?>

<div class="singlepage">
    <div class="singlepage__header">
        <h1><?php the_title(); ?></h1>

    </div>
    <div class="singlepage__breadcrumbs">
        <p><?php breadcrumbs(); ?></p>

    </div>

</div>

</div>


<div class="singlepage-content contact">


    <div class="contact__top">
        <div class="contact__top-left">
            <div class="contact__top-header">
                <h3>Skorzystaj z formularza kontaktowego</h3>
                <p>Napisz do nas</p>
            </div>

           
        </div>
        <a class="contact__top-right" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                <?php if( get_field('header_logo', 'option') ): ?>
                <img class="contact__top-logo" src="<?php echo get_field('header_logo', 'option'); ?>" alt="Logo" />
                <?php endif; ?>

            </a>
    </div>

    <div class="contact__bottom">
        <div class="contact__bottom-left">
            <?php 
        $formshort = get_field('contact_form_shortcode');
        $short = "$formshort";
        echo do_shortcode($short);  ?>
        </div>
        <div class="contact__bottom-right">
            <?php if( have_rows('contact-blocks') ): ?>
            <?php while( have_rows('contact-blocks') ): the_row(); ?>
            <div class="contact__info-leftside">
                <div class="contact__adress">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/pin.png" alt="Adres">
                    <div class="contact__info">
                        <?php if( have_rows('contact-adress') ): ?>
                        <?php while( have_rows('contact-adress') ): the_row(); ?>
                        <p><?php echo get_sub_field('contact-adress-line') ?></p>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="contact__phone">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/phone-handset-linepink.png"
                        alt="Telefon">
                    <div class="contact__info">
                        <?php if( have_rows('contact-phone') ): ?>
                        <?php while( have_rows('contact-phone') ): the_row(); ?>
                        <p><?php echo get_sub_field('contact-phone-line') ?></p>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="contact__email">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/mail.png" alt="Email">
                    <div class="contact__info">
                        <?php if( have_rows('contact-email') ): ?>
                        <?php while( have_rows('contact-email') ): the_row(); ?>
                        <p><?php echo get_sub_field('contact-email-line') ?></p>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
            <div class="contact__info-rightside">
                <div class="contact__hours">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/time.png" alt="Email">
                    <div class="contact__info">
                        <p>Godziny otwarcia</p>
                        <?php if( have_rows('contanct-openhours') ): ?>
                        <?php while( have_rows('contanct-openhours') ): the_row(); ?>
                        <div class="openhours-block">
                            <p><?php echo get_sub_field('contanct-openhours-day') ?></p>
                            <p><?php echo get_sub_field('contanct-openhours-hours') ?></p>
                        </div>

                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>


</div>


<?php get_footer(); ?>