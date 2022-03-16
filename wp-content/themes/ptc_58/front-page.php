     
<?php get_header();?>
   <?php
echo do_shortcode('[smartslider3 slider="2"]');
?> 
 <main >
   <!-- start of intro section -->
    <div class="container">
        <section class="row mt-4 shadow-sm">
          <div class="col-sm-12 col-md-7 col-lg-7 mb-2">
            <?php 
                //displays all the college admin descriptions in ascending order 
                // https://denverdata.com/blog/how-use-wpquery-display-custom-post-type

                  $args = array(
                    'post_type' => 'AdminsDescription',
                    'posts_per_page'=> 1,
                    'order' => 'ASC'
                  );
                  
                  $adminDescrip = new WP_Query($args);
                
                while( $adminDescrip->have_posts()){
                  $adminDescrip->the_post();
                ?>
            <div class="row">
              <div class="col-sm-12 col-md-5 col-lg-5">
              <img class="img-fluid img-fit mx-auto d-block" src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>">

              </div>
              <div class="col-sm-12 col-md-7 col-lg-7 pt-2">
                <p class="word-wraps"><?php echo wp_trim_words(get_the_excerpt(),60); ?></p>
                <a class="btn btn-outline-light" href="<?php the_permalink();?>">Read More</a>
              </div>
            </div>
            <?php
              }  wp_reset_query(); ?>
          </div>
          <div class="col-sm-12 col-md-5 col-lg-5  mx-auto my-2  py-2  grad-inverse" >
              <iframe style="width:100%" class="mx-auto d-block" id="iframes" src="https://www.youtube.com/embed/fcc2pu84zGA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </section>
    </div>
    <!--end of intro section  -->
    <!-- <div class="container-fluid g-0 mt-3 mb-0">
        <div class="row ">
            <div class="col-12 ">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 250 1440 40"><path fill="rgb(174,0,0)" fill-opacity="1" d="M0,224L120,240C240,256,480,288,720,282.7C960,277,1200,235,1320,213.3L1440,192L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
            </div>          
        </div> 
        <div class="row back-color">
              <div class="col-12 py-0">
                <h2>Semester Theme</h2>
              <img class="img-fluid d-block img-fit mx-auto"src="<?php echo get_template_directory_uri().'/assets/img/indexs/apply1.jpg'; ?>" alt="Graduates">   

              </div>
        </div>  
        
        
    </div> -->
  <div class="container-fluid mt-4 g-0" >
      <div class="row g-0">
          <div class="col-12 ">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 250 1440 40"><path fill="#AE0000" fill-opacity="1" d="M0,224L120,240C240,256,480,288,720,282.7C960,277,1200,235,1320,213.3L1440,192L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
          </div>          
      </div>
     
      <div class="row back-color g-0">
        <div class="col-sm-12 ">
          <div class="container g-0">
            <div class="row">
              <div class="col-12 py-0">
                <h2>Semester Theme</h2>
                <img class="img-fluid d-block img-fit mx-auto shadow-lg"src="<?php echo get_template_directory_uri().'/assets/img/indexs/apply1.jpg'; ?>" alt="Graduates"> 
              </div>
            </div>
            <hr>
            <div class="row back-color">
              <div class="col-12 py-0">
                <h2>Join us now!!!! </h2>
                <img class="img-fluid d-block img-fit mx-auto shadow-lg" src="<?php echo get_template_directory_uri().'/assets/img/indexs/apply1.jpg'; ?>" alt="Graduates">   
              </div>
            </div>

             <!-- links to call to action -->
            <div class="row mt-2 align-items-center gx-3 back-color">
              <div class="col-sm-12 col-md-4 col-lg-3 border border-light item-border py-2 my-2  text-center">                                
                <a class="btn" href="<?php echo site_url('index.php/programmes');?>">Courses Offered</a>
              </div>
              
              <div class="col-sm-12 col-md-4 col-lg-4 border border-light py-2 my-2 mx-auto  text-center"> 
                <a class="btn" href="<?php echo site_url('index.php/college-life');?>">Life at the college</a>
              </div>
              <div class="col-sm-12 col-md-4 col-lg-4 border border-light py-2 my-2 mx-2  text-center" > 
                <a class="btn " href="<?php echo site_url('index.php/application-procedure');?>">How to Apply</a>
              </div>
            </div>
            <hr>

            <div class="row back-color">
              <div class="col-12 col-sm-12 col-md-12">
                <h2 ><b>Student Testimonies </b>  </h2> 
                <?php dynamic_sidebar('stu-test1');?>
              </div>
            </div>

          </div>
        </div> 
      </div> 
      <!-- bottom svg -->
      <div class="row gx-0">
          <div class="col-12 ">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="10 150 1400 100"><path fill="#AE0000" fill-opacity="1" d="M0,192L120,170.7C240,149,480,107,720,117.3C960,128,1200,192,1320,224L1440,256L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path></svg>
          </div>               
      </div>
               

    

 </main>
 


<div class="container-fluid container-margins container-backgrounds">
      <section class="row row-padding ">
        <div class="col-12">
            
            
        </div>
        <div class="col-12">
         
        </div>
      
      </section>

</div>
   
<?php get_footer();?>
  




