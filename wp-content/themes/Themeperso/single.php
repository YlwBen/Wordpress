<?php get_header(); ?>
<div class="main single">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <div class="post text-center">
        <h1 class="post-title"><?php the_title(); ?></h1>
        <a href="<?php the_permalink();?>"> <?php the_post_thumbnail(array(350,466)) ;?></a>
        <p class="post-info">
          Posté le <?php the_date(); ?> dans <?php the_category(', '); ?> par <?php the_author(); ?>.
        </p>
        <div class="spacer">
        </div>
        <div class="post-content offset-1 col-10">
          <?php the_content(); ?>
        </div>
        <div class="spacer">
        </div>
        <div class="post-comments">
          <?php comments_template(); ?>
        </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div>
<?php get_footer(); ?>
