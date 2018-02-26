
<!-- /*
* Template Name: exemple
*/ -->

<?php get_header(); ?>
<section class="container">
  <div class="row">
      <?php
      if (have_posts()):
      while (have_posts()) : the_post(); ?>
      <div class="col-12 col-md-4"> <!-- class="col-12 col-md-4" -->
          <a href="<?php the_permalink(); ?>"><?php the_content(); ?></a>
      </div>
      <?php endwhile; endif; ?>
  </div>
</section>
<?php get_footer(); ?>
