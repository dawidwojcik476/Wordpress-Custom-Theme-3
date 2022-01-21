<?php
/*
Template Name: Szablon Aktualności
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


<div class="singlepage-content team">
<section class="news">

<div class="news__posts">
    <?php 

        $args = array(
            'post_type' => 'aktualnosci',
            'numberposts' => -1,
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

</div>


<?php get_footer(); ?>



