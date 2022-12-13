<?php get_header(); ?>

<div class="content__inner">

    <section class="single__hero"></section>
            
    <section class="section">
        <div class="section__inner">

            <?php if (have_posts()) : while( have_posts()) : the_post(); ?>

                <article class="single__post">
                    <h2 class="single-title"><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                </article>

            <?php endwhile; endif; ?>

         </div>
    </section>
</div>



<?php get_footer(); ?>