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


<div class="singlepage-content single-member">
    <div class="single-member__top">
        <div class="single-member__photo">
            <img src="<?php echo the_field('teammember_photo') ?>" alt="Zdęcie zespołu">
        </div>
        <div class="single-member__description">
                <h3> <?php the_title(); ?></h3>
                <?php the_excerpt();?>
                <p class="descript"><?php echo the_field('teammember_description') ?></p>
        </div>
    </div>
    <div class="single-member__bottom">
        <?php if (get_field('teammember_specs-description')):?>
        <div class="single-member__specs">
            <h3> Specjalizacje</h3>
            <p class="specsdescript"><?php echo the_field('teammember_specs-description') ?></p>
        </div>
        <?php endif;?>
        <?php if( have_rows('teammember_atributes') ): ?>
    <div class="single-member__atributes">
        <h3> Dodatkowe atrybuty</h3>
        <div class="single-member__points">
        <?php while( have_rows('teammember_atributes') ): the_row(); ?>
        <div class="single-member__point">
            <div class="single-member__icon">
                <img src="<?php echo get_sub_field('member-icon') ?>" alt="Atrybuty członka">
            </div>
            <div class="single-member__atribute">
                <p><?php echo get_sub_field('member-descript') ?></p>
            </div>
            
        </div>


        <?php endwhile; ?>
        </div>
    </div>
    <?php endif; ?>
    </div>





</div>


<?php get_footer(); ?>