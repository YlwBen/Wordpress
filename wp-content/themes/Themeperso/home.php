<!-- /*
* Template Name: home
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

    <!-- présentation produit -->
    <div class="container">
        <div class="row">
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <div class="col-12 text-center"> <!-- produit 1 -->
                    <a href="<?php the_permalink();?>"> <?php the_post_thumbnail(array(350,466)) ;?></a>
                    <h6><?php the_title(); ?></h6>
                    <div class="text-center">
                        <?php the_content(); ?>
                        <p>Posté le : <?php the_time('l d F'); ?></p>
                    </div>
            </div>
        <?php endwhile; endif; ?>
        </div>
    </div>
    <!-- présentation produit -->

    <div class="spacer">
    </div>


<?php get_footer(); ?>
