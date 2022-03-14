     
<?php get_header();?>
   <?php
echo do_shortcode('[smartslider3 slider="2"]');
?> 
 <main >
   <!-- start of intro section -->
    <div class="container">
        <section class="row mt-3 shadow">
          <div class="col-sm-12 col-md-7 col-lg-7 mb-3">
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
          <div class="col-sm-12 col-md-5 col-lg-5  mt-2 grad-inverse">
              <iframe id="iframes" src="https://www.youtube.com/embed/fcc2pu84zGA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </section>
    </div>
    <!--end of intro section  -->
  <div class="container">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 200 1440 320"><path fill="#FF9494" fill-opacity="1" d="M0,224L120,240C240,256,480,288,720,282.7C960,277,1200,235,1320,213.3L1440,192L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
  </div>
    

 </main>
 




<div class="container">
      <!-- call to action -->
      <section class="row row-padding">
          <div class="col-sm-12  col-md-12 ">
              <h2 class="text-edit"> <b>join us now!!!!</b></h2> 
          </div>
        <div class="col-sm-12 col-md-12">
          <!-- http://localhost/wp_ptc_58/wp-content/uploads/2021/09/apply1.jpg" alt="Graduate receives transcript -->
            <!-- <img  src="/wp-content/themes/ptc_58/assets/img/indexs/apply1.jpg" alt="Graduates"> -->
            <img class="card-img-top d-block w-100"src="<?php echo get_template_directory_uri().'/assets/img/indexs/apply1.jpg'; ?>" alt="Graduates">
        </div>
      </section>
            <!--call to action links -->
      <section class="row text-center row-padding">
       
        <div class="col-sm-12 col-md-4 col-lg-4 cols cols-lg-4-edit" > 
              <span><a  class="apply_links cols" href="<?php echo site_url('index.php/programmes');?>"   >Courses Offered</a>  </span>           
        </div>
    
        <div class="col-sm-12 col-md-4 col-lg-4 cols cols-lg-4-edit  ">
           <span><a class="apply_links" href="<?php echo site_url('index.php/college-life');?>" >Life at the college</a>  </span>
        </div>       
        <div class="col-sm-12 col-md-3 col-lg-3  cols cols-lg-4-edit ">
            <span><a class="apply_links" href="<?php echo site_url('index.php/application-procedure');?>">How to Apply</a>  </span>
        </div>
     </section>

</div>

  


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
  




