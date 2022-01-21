<footer class="footer" role="contentinfo">
    <div class="footer__leftside">
        <div class="footer__logo">
            <a class="footer__logo-link" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                <?php if( get_field('header_logo', 'option') ): ?>
                <img class="footer__logo-image" src="<?php echo get_field('header_logo', 'option'); ?>" alt="Logo" />
                <?php endif; ?>

            </a>

        </div>
    </div>
    <div class="footer__rightside">
        <div class="footer__menu">
            <a href="#header">
            <img src="<?php echo get_template_directory_uri(); ?>/public/images/ionic-ios-arrow-dropdown.png"
                alt="Przejdź do góry strony"></a>
            <?php    wp_nav_menu([
                              'theme_location'    => 'footer-menu',
                              'menu_id'            => 'footer-menu',
                              'container_class'   => 'footer__menu-list',
                              'container_id'      => '',
                              'menu_class'        => 'footer__menu-ul',
                ]); ?>

        </div>

        <div class="footer__googlemap">
            <?php 
                $location = get_field('footer_googlemap', 'option');
                        if( $location ): ?>
            <div class="acf-map" data-zoom="13">
                <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>"
                    data-lng="<?php echo esc_attr($location['lng']); ?>">
                    <?php 




                        $address = '';
                        foreach( array('street_number', 'street_name', 'city', 'state', 'post_code', 'country') as $i => $k ) {
                           if( isset( $location[ $k ] ) ) {
                              $address .= sprintf( '<span class="segment-%s">%s</span>, ', $k, $location[ $k ] );
                         }
                        }

                        $address = trim( $address, ', ' );

                        
                        echo '<p>' . $address . '.</p>';
                        ?><a class="directions"
                        href="https://www.google.com/maps?saddr=My+Location&daddr=<?php echo $location['lat'] . ',' . $location['lng']; ?>"><?php _e('Zobacz trasę w Mapach Google','roots'); ?></a>

                </div>
            </div>
            <?php endif; ?>


        </div>

        <div class="footer__rightside-bottom">
            <div class="footer__rightside-copyrights">
                <p>Wszystkie prawa zastrzeżone dla © 2021 Fajnietu</p>
                <span>Projekt i wykonanie:<p> CoolBrand.pl</p></span>
            </div>
            <div class="footer__rightside-socials">
            <?php if( have_rows('footer_socials', 'option') ): ?>
                <?php while( have_rows('footer_socials', 'option') ): the_row(); ?>
                <a class="footer__rightside-socials-link" href="<?php echo get_sub_field('footer_socials_link') ?>"><img
                        class="footer__rightside-socials-img" src="<?php echo get_sub_field('footer_socials_logo') ?>" alt=""></a>
                <?php endwhile; ?>

            <?php endif; ?>
            </div>
        </div>
    </div>

</footer>
<script>
    var scroll = new SmoothScroll('a[href*="#"]');
</script> 
</div>
<?php wp_footer(); ?>
</body>

</html>