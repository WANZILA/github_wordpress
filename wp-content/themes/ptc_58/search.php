<?php get_header();
    while(have_posts()){
      the_post();
    }
?> 
<!-- post=25 -->

 <section class="container-md container-margins ">
  <section class="row">
    <main class="col-md-12 container-backgrounds">
        <h2>Search results for "<?php echo get_search_query();?>"</h2>

        <?php if(have_posts()) { ?>
            <div class="row row-col-1 row-cols-md-3">
              <?php 
         
                 while(have_posts()){
                 the_post(); 
              ?>
              <div class="col mb-4">
                <div class="card">
               
                  <div class="card-body">
                     <!-- <img class="mr-3 img-fluid post-thumb d-none d-md-flex card-img-top" src="<?php the_post_thumbnail_url('thumbnail');?>" alt="image"> -->
                    <h5 class="card-tile">
                      <a class="btn btn-primary" href="<?php the_permalink();?>"> 
                        <b> <?php the_title();?></b>
                      </a>
                    </h5>
                    <div class="card-text">
                    
                    <!-- limiting the number of words to display -->
                    <?php echo wp_trim_words(get_the_excerpt(), 20);?>
               
                  </div>    
                </div>
              </div>
              </div>

              <?php
                  }
                  wp_reset_query();
              ?>
            </div>
        <?php  } else { ?>
          <h2> Couldn't find anything: Did you just mistype Something? </h2>
          <img src="https://source.unsplash.com/400x400/cats">
        
       
       <?php } ?>



    </main>
  </section>  
</section>
   
  <div class="container-fluid container-margins container-backgrounds">
      <section class="row row-padding ">
        <div class="col-12">
            <h2 ><b>Student Testimonies </b>  </h2> 
            
        </div>
        <div class="col-12">
          <?php dynamic_sidebar('stu-test1');?>
        </div>
      
      </section>

</div> 
<?php get_footer();?>
