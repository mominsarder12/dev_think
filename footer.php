<footer id="footer_area" class="bg-dark text-white">
  <section id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <?php dynamic_sidebar( 'footer-widget-1'); ?>
        </div>
        <div class="col-md-4">
          <?php dynamic_sidebar( 'footer-widget-1'); ?>
        </div>
        <div class="col-md-4">
          <?php dynamic_sidebar( 'footer-widget-1'); ?>
        </div>
      </div>
    </div>
  </section>
  <section id="copyright_area">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><?php echo get_theme_mod('ali_copyright_section'); ?></p>
        </div>
      </div>
    </div>
  </section>
</footer>


<?php wp_footer(); ?>
</body>
</html>