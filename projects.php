<?php
/*
Template Name: Projects
*/
?>

<?php get_header(); ?>

<div class="content__inner">

<section class="single__hero"></section>

        <!-- projects -->

        <section class="section projects">
            <div class="section__inner projects__inner">

                <div class="projects__content">
                    <!-- <h3 class="projects__title">MY WORK</h3> -->
                    <h3>a collection of my projects & designs</h3>

                    <div class="projects__gallery">

                        <?php
                        
                            $args = [
                                'post_type' =>  'project'
                            ];

                            $query = new WP_Query($args);
                            
                            if ( $query->have_posts()) : while( $query->have_posts()) : $query->the_post(); 
                        ?>

                        <article class="project">

                            <a href=" <?php the_permalink(); ?>" class="project__link">
                                <div class="project__featured"> <?php the_post_thumbnail('medium'); ?> </div> 
                                <h4 class="project__title"><?php the_title(); ?></h4>
                            </a>
                            
                        </article>

                        <?php endwhile; wp_reset_postdata(); endif; ?>

                    </div>

                    <button class="button"><a href="http://portfolio.local/contact/" class="button__link">Work with me</a></button>
                    
                </div>

            </div>
        </section>

</div>

<?php get_footer(); ?>