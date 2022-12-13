<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

<div class="contact">

    <div class="contact__inner">

        

            <?php
                
                if ( have_posts()) : while( have_posts()) : the_post(); 
            ?>

            <div class="contact__content">
                <h2> <?php the_title(); ?> </h2>
                <div> <?php the_content(); ?> </div>
            </div>
                
                
            

            <?php endwhile; wp_reset_postdata(); endif; ?>
        

    </div>
</div>




<?php get_footer(); ?>