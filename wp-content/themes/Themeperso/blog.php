
<!-- /*
* Template Name: blog
*/ -->

<?php get_header(); ?>

<!-- carousel main img -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/mac.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/macbook.jpg" alt="Second slide">
    </div>
  </div>
  <a class="carousel-control-prev carouctrl" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next carouctrl" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- fin carousel main img -->

<div class="spacer">
</div>


<?php
$args = array(
    'posts_per_page'   => -1,
    'post_type'        => 'post',
);
// The Query
$the_query = new WP_Query( $args );

?>

<!-- présentation produit -->
<div class="container">
    <div class="row">
        <?php if($the_query->have_posts()): while($the_query->have_posts()): $the_query->the_post(); ?>
        <div class="col-sm-12 col-md-6 col-lg-4"> <!-- produit 1 -->
                <a href="<?php the_permalink();?>"> <?php the_post_thumbnail(array(350,466)) ;?></a>
                <!--<img class="imgpdt1" src="img/manetteps4.jpg"/>-->
                <h6 class="text-center"><?php the_title(); ?></h6><?php comments_popup_link('0','1','%'); ?>
                <div class="text-center">
                    <?php the_content('Lire la suite'); ?>
                    <p>Posté le : <?php the_time('l d F'); ?></p>
                </div>
        </div>
    <?php endwhile; endif; ?>
    </div>
</div>

<div class="spacer">
</div>

<?php get_footer(); ?>
