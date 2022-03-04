<?php get_header();
    while(have_posts()){
      the_post();
    }
?> 
<!-- post=25 -->
<section class="container-fluid">    
          <!-- if some pages have no pages -->
          <?php if(has_post_thumbnail()){ ?>
            <img class="mr-3 img-fluid post-thumb  d-md-flex" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Group photo of college governors">
                      <?php  } ?>          
 </section>
 <section class="container-md container-margins ">
  <section class="row">
    <main class="col-md-12 container-backgrounds">
         <!-- displaying all content in the  programme page -->
        <?php 
          while(have_posts()){
            the_post();
            
        ?>
        <?php 
            the_content();
        ?>
        <?php } ?>


        <!-- displaying all the programme titles -->
        <?php 

       dynamic_sidebar('searchbar');
      $args = array(
        'post_type' => 'Programmes',
        'posts_per_page'=> 20,
        'order' => 'ASC'
      ); 

      
       ?>
       <div class="row row-col-1 row-cols-md-3">
         <?php 
          $programmes = new WP_Query($args);
           while($programmes->have_posts()){
            $programmes->the_post(); 
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
                  <?php echo wp_trim_words(get_the_excerpt(), 10);?>
               
                  </div>    
                </div>
              </div>
          </div>

         <?php
         }
         wp_reset_query();
    ?>
      </div>





       <!-- displaying all short courses offered  -->
       <hr>
       <h2> Short Courses </h2>
       <div class="row row-col-1 row-cols-md-3">
         
         <?php 
          $args = array(
            'post_type' => 'ShortCourses',
            'posts_per_page'=> 10,
            'order' => 'ASC'
          );
          
          $shortcourse = new WP_Query($args);
                    while($shortcourse->have_posts()){
                      $shortcourse->the_post();
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
