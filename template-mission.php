<?php
/*
Template Name: Szablon Nasza Misja
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


<div class="singlepage-content mission stars">
<div class="mission__header">
    <p> <?php echo the_field('mission_firstcontent') ?> </p>
    <?php if (get_field('mission_firstimage')): ?>
    <img src="<?php echo the_field('mission_firstimage') ?>" alt="Dzieci">
    <?php endif;?>
    <h2><?php echo the_field('mission_header') ?></h2>
</div>
<div class="mission__content">
    <p><?php echo the_field('mission_ndcontent') ?></p>
<?php if (get_field('mission_ndimage')): ?>
    <img src="<?php echo the_field('mission_ndimage') ?>" alt="Dzieci">
    <?php endif;?>
</div>

</div>


<?php get_footer(); ?>



