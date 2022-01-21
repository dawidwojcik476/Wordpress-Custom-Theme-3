<?php
/*
Template Name: Szablon Zespół
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
    <div class="team__header">
        <h2>Skład naszego zespołu</h2>
    </div>

    <div class="team__list">
        <ul>
    
                <?php 

            $args = array(
                'post_type' => 'zespol',
                'numberposts' => -1,
                'suppress_filters' => false
                
                        );
                $team = get_posts($args);
                    if( ! empty( $team ) ){
                    foreach ($team as $member) : ?>
                <a href="<?php echo get_permalink($member->ID) ?>">
              
            <li class="team__list-item">
                <div class="team__list-item-image">
                    <img src="<?php echo the_field('teammember_photo', $member) ?>"
                        alt="Zdęcie zespołu">
                </div>
                <div class="team__list-item-content">
                    <p class="membername"><?php echo $member->post_title; ?></p>
                    <p class="memberexcerpt"><?php echo $member->post_excerpt; ?></p>
                </div>
            </li>
            </a>
            <?php endforeach; ?>
                <?php }; ?>


        </ul>
    </div>

</div>


<?php get_footer(); ?>