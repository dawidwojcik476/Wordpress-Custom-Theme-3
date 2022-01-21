<?php
/*
Template Name: Szablon Oferta
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


<div class="singlepage-content mission offer">
    <div class="mission__header offer">
        <p> <?php echo the_field('offer_firstcontent') ?> </p>
        <?php if (get_field('offer_firstimage')): ?>
        <img src="<?php echo the_field('offer_firstimage') ?>" alt="Dzieci">
        <?php endif;?>
        <h2><?php echo the_field('offer_firstheader') ?></h2>
    </div>
    <div class="offer__cost">

        <?php if( have_rows('cost_points') ): ?>
        <?php while( have_rows('cost_points') ): the_row(); ?>
        <div class="offer__cost-item">
            <div class="offer__cost-price">
                <p><?php echo get_sub_field('cost_points-price') ?></p>
            </div>
            <div class="offer__cost-title">
                <p><?php echo get_sub_field('cost_points-title') ?></p>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>

    </div>
    <?php if( have_rows('offer_birthblocks') ): ?>
    <div class="birthoffer">
        <div class="birthoffer__header  mission__header">
            <h2><?php echo the_field('offer_birthheader') ?></h2>
        </div>
        <div class="birthoffer__blocks">

            <?php while( have_rows('offer_birthblocks') ): the_row(); ?>
            <div class="birthoffer__block">
                <div class="birthoffer__block-header">
                    <?php echo get_sub_field('offer_birthblocks-title') ?>
                    <p><?php echo get_sub_field('offer_birthblocks-price') ?></p>
                </div>
                <div class="birthoffer__block-content">
                    <?php if( have_rows('offer_birthblocks-points') ): ?>
                    <?php while( have_rows('offer_birthblocks-points') ): the_row(); ?>
                    <p><?php echo get_sub_field('offer_birthblocks-points-text') ?></p>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>

            <?php endwhile; ?>

        </div>

    </div>
    <?php endif; ?>

    <?php if( have_rows('offer_move-blocks') ): ?>
    <div class="moveoffer">
        <div class="moveoffer__header  mission__header">
            <h2><?php echo the_field('offer_moveheader') ?></h2>
        </div>
        <div class="moveoffer__blocks">
            <?php while( have_rows('offer_move-blocks') ): the_row(); ?>
            <div class="moveoffer__block">
                <div class="moveoffer__block-header">
                    <p><?php echo get_sub_field('offer_move-blocks-title') ?></p>
                    <img src="<?php echo get_sub_field('offer_move-blocks-image') ?>" alt="Zdjęcie Bloczek Ruchowy">
                </div>
                <div class="moveoffer__block-content">
                    <p><?php echo get_sub_field('offer_move-blocks-content') ?></p>
                </div>
            </div>

           <?php endwhile; ?>
        </div>
    </div>
    <?php endif; ?>

</div>


<?php get_footer(); ?>