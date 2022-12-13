<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Julia Munters</title>
    <link rel="stylesheet" href="https://use.typekit.net/ajd7qws.css">
    

    <?php wp_head(); ?>

</head>
<body>

    <?php 
         
        if ( is_home() ) {
            $link = '#home';
        } else {
            $link = home_url('/');
        }


     ?>

     <?php 
     
     if (is_home()){
        $class = 'container-home';
     } else {
        $class = 'container-single';
     }

     ?>

    <div class="container <?php echo $class ?> ">
    
        <!-- header -->
        <header class="site-header">
            <div class="site-header__inner">

            <a href="<?php echo $link ?>" class="branding-link">
                <img class="branding" src="<?php echo get_template_directory_uri(); ?>/assets/icons/logo.svg" alt="">
            </a>

                <button class="menu-button">
                    <div class="menu-button__hamburger"></div>
                </button>
    
            </div>
        </header>


        <?php 
            $args = [
                'theme_location'    =>  'main_menu',
                'container'         =>  'nav',
                'container_class'   =>  'menu',
                'menu_class'        =>  'menu__list',

            ];

            wp_nav_menu( $args );
        
        ?>