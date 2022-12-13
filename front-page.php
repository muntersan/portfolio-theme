<?php
/*
Template Name: front page
*/
?>

<?php get_header(); ?>

        <!-- hero -->
        <section id="home" class="hero">
            <div class="hero__inner">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-fade@2x.jpg" alt="" class="hero-background">

            </div>
        </section>

        <!-- about -->
        <section class="section about">
            <div class="section__inner about__inner">

                <div class="about__content">
                    <h2 class="about__title">Hi! I’m <span class="accent">Julia</span>,</h2>
                    <p class="about__text">a Berlin-based web- design and development student! I am specializing in Front-End and enjoy creating personalized responsive websites.</p>
                    <button class="button"><a href="https://www.juliamunters.com/projects/" class="button__link">Take a look at my work!</a></button>
                </div>

            </div>
        </section>

        <!-- gallery -->
        <section class="gallery">
            <div class="gallery__inner">

                <div class="gallery__content">

                    <div class="gallery__item">
                        <img src="<?php echo get_template_directory_uri(  ); ?>/assets/images/citrus-illustrations.png" alt="" class="gallery__img">
                    </div>

                    <div class="gallery__item">
                        <img src="<?php echo get_template_directory_uri(  ); ?>/assets/images/greenliving-thumb.png" alt="" class="gallery__img">
                    </div>

                    <div class="gallery__item gallery__item--tall">
                        <img src="<?php echo get_template_directory_uri(  ); ?>/assets/images/donut-sticker.png" alt="" class="gallery__img">
                    </div>

                    <div class="gallery__item gallery__item--big">
                        <img src="<?php echo get_template_directory_uri(  ); ?>/assets/images/hero-image.jpg" alt="" class="gallery__img">
                    </div>

                    <div class="gallery__item">
                        <img src="<?php echo get_template_directory_uri(  ); ?>/assets/images/lab54-thumb.png" alt="" class="gallery__img">
                    </div>

                </div>

            </div>
        </section>   

  <?php get_footer(); ?>