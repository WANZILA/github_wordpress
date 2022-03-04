<?php get_header(); ?>

<section class="container-md container-margins ">
  <section class="row">
    <main class="col-md-8 container-backgrounds">
        <?php 
          while(have_posts()){
            the_post();
            
          ?>
          <!-- <p> Admin description</p> -->
          <h1> <b><?php the_title(); ?></b> </h1>
          <!-- <h2> <?php the_title(); ?> </h2> Posted by <?php the_author(); ?> -->
          <img class="mr-3 img-fluid post-thumb  d-md-flex" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Group photo of college governors">
          <span class="date"><?php the_date(); ?></span>
            <?php 
            //the_tags('before the set of tags', 'what is in between the tags', 'after the entire set of tags')
              the_tags('<span class="tag"><i class="fa fa-tag"></i>','</span><span class="tag"><i class="fa fa-tag"></i>','</span>');
            ?>
          <?php 
            the_content();
          ?>
        <?php } ?>
    </main>


    <aside class="col-md-4  ">
      <?php include('inc/college-admins.php');?>
                          
    </aside>
  </section>  
</section>
<?php get_footer(); ?>