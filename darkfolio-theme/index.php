<?php get_header(); ?>

<article id="<?php echo("projet-" . ++$counter); ?>" class="section project">
  <section class="column col-1 text-col">
    <div class="project-infos">
      <h2 class="project-title"><?php the_title(); ?></h2>
      <h5 class="project-type">
      <?php
      $categories = get_the_category();
      $categoriesHtml = '';
      if(!empty($categories)) {
        $categoriesHtml .= $categories[0]->name;
        for($i = 1; $i < count($categories); $i++)
          $categoriesHtml .= ", " . $categories[$i]->name;
      }
      echo $categoriesHtml;
      ?>
      </h5>
      <h5 class="project-date"><?php echo get_the_date("F Y"); ?></h5>
      <h5 class="project-role">Rôle(s)</h5>
      <h5 class="project-roles">Cheffe de projet, graphiste</h5>
    </div>
    <?php the_content(); ?>
  </section>
  <section class="column col-2 img-col">
    <div class="galery">
      <div class="galery-nav">
        <a href="#">&uarr;</a>
        <a href="#">&darr;</a>
      </div>
      <?php if(has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('post-thumbnail', array('class' => "project-img featured-img")); ?>
      <?php else: ?>
        <img src="<?php echo get_bloginfo('template_url'); ?>/images/dots.jpg" alt="Project featured image" class="project-img featured-img">
      <?php endif; ?>
    </div>
  </section>
</article>

<?php get_footer(); ?>
