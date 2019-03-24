</main>
<footer>
  <section id="a-propos" class="section widgets widget-section-1">
    <section class="column col-1 text-col">
      <?php if(is_active_sidebar('footer-widget-1')) : ?>
        <?php dynamic_sidebar('footer-widget-1'); ?>
      <?php endif; ?>
    </section>
    <section class="column col-2 text-col profile-resume">
      <?php if(is_active_sidebar('footer-widget-2')) : ?>
        <?php dynamic_sidebar('footer-widget-2'); ?>
    <?php endif; ?>
    </section>
    <section class="column col-3 text-col accent">
      <?php if(is_active_sidebar('footer-widget-3')) : ?>
        <?php dynamic_sidebar('footer-widget-3'); ?>
      <?php endif; ?>
    </section>
  </section>
  <section id="contact" class="section widgets widget-section-2">
    <section class="column col-1 text-col">
      <?php if(is_active_sidebar('footer-widget-4')) : ?>
        <?php dynamic_sidebar('footer-widget-4'); ?>
      <?php endif; ?>
    </section>
    <section class="column col-2 text-col accent">
      <?php if(is_active_sidebar('footer-widget-5')) : ?>
        <?php dynamic_sidebar('footer-widget-5'); ?>
      <?php endif; ?>
    </section>
  </section>
</footer>
<?php wp_footer(); ?>
<script src="<?php echo get_bloginfo('template_url'); ?>/js/main.js" charset="utf-8"></script>
</body>
</html>
