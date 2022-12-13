<!-- footer -->
<footer class="site-footer">

    <div class="site-footer__inner">

        <div class="site-footer__content">
            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/logo.svg" alt=""></figure>

            <?php 

                $args = [
                    'theme_location'    =>  'footer_menu',
                    'container'         =>  'nav',
                    'container_class'   =>  'footer__menu',
                    'menu_class'        =>  'footer__menu-list',
                            
                ];

                wp_nav_menu( $args );
            
            ?>

        </div>

        <div class="footer__overlay"></div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-bg@2x.jpg" alt="" class="footer-bg">
    </div>

</footer>




</div>

<script src=" <?php echo get_template_directory_uri( ); ?> /js/menu.js"></script>
<script src=" <?php echo get_template_directory_uri( ); ?> /js/header.js "></script>

<?php wp_footer(); ?>
</body>
</html>