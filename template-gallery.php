<?php
/*
Template Name: Szablon Galeria
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


<div class="singlepage-content gallery">



    <?php 
$imagesArray = get_field('gallery_images');
  if( $imagesArray ): ?>
    <ul>
        <?php foreach( $imagesArray as $image ): ?>
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


<?php get_footer(); ?>