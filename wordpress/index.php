<?php get_header(); ?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

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
        <?php if(count(get_post_meta( get_the_ID(), 'roles')) > 0) : ?>
          <h5 class="project-role">Rôle(s)</h5>
          <h5 class="project-roles"><?php echo get_post_meta( get_the_ID(), 'roles', true ); ?></h5>
        <?php endif; ?>
      </div>
      <?php the_content(); ?>
    </section>
    <section class="column col-2 img-col">
      <div class="galery">
        <?php
          if(count(get_post_meta( get_the_ID(), 'slider_shortcode')) > 0)
            echo do_shortcode(get_post_meta( get_the_ID(), 'slider_shortcode', true ));
          else {
            if(has_post_thumbnail())
            the_post_thumbnail('post-thumbnail', array('class' => "project-img featured-img"));
            else
            echo (`<img src="<?php echo get_bloginfo('template_url'); ?>/images/dots.jpg" alt="Project featured image" class="project-img featured-img">`);
          }
        ?>
      </div>
    </section>
  </article>

<?php endwhile; endif; ?>
<?php get_footer(); ?>
