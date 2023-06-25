<?php

/**
 * this template decline the footer
 */
?>
<!-- footer section start here -->
<footer id="footer-area" class="bg-dark text-white">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">

                    <?php //dynamic_sidebar('footer-widget-1'); 
                    ?>

                    <!-- <h1>Static heading one</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.! Nobis.</p> -->
                </div>
                <div class="col-md-4">

                    <?php //dynamic_sidebar('footer-widget-2'); 
                    ?>


                    <!-- <h1>Static heading Two</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci nam aliquam Nobis.</p> -->

                </div>
                <div class="col-md-4">

                    <?php dynamic_sidebar('footer-widget-3'); ?>


                    <!-- <h1>Static heading three</h1>
                    <p>Lorem, ipsum dolor sitNobis.</p> -->

                </div>
            </div>
        </div>
    </div>
    <section id="copyright" class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="copyright-text"><?php echo get_theme_mod('dev_footer_option_setting'); ?></p>
                </div>
            </div>
    
        </div>

    </section>
</footer>
<!-- footer section end here -->



<!-- wp footer -->
<?php wp_footer(); ?>
</body>

</html>