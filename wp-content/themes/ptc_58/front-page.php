     
<?php get_header();?>
   <?php
echo do_shortcode('[smartslider3 slider="2"]');
?> 
  <!-- <section class="row">
    <div class="col-12">
        <div class="fixed-attachment">
            <h1 class="heading1"> Pentecostal Theological College is a  instituition accredited by National council for Higher Education. It has inclusive and engaged
                research-intensive College that inspires creativity through outstanding achievements in Ministry, learning, Agricultural
                projects  and discovery.
            </h1>
        </div>
    </div>
  </section> -->

<div class="container">
                            
      <section class="row row-padding">
        <div class="col-12 ">
            <h2 ><b>Notice Board</b>  </h2> 
        </div>
        <div class="col-12 ">         
            <div class="card-deck">               
                    <div class="card">  
                      <!-- <h5 class="text-center"> </h5>                   -->
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
                      
                      
                          <h3 class="text-center heading1"><b>Welcome Message</b> </h3>
                     
            
                    <div class="img-size-edits">
                      <!-- img-fluid card-img-top -->
                        <img class="img-contain" id="principle"  src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>">
                      </div>
                    
                      <span class="excerpt_class">
                      <?php 
                      
                       echo wp_trim_words(get_the_excerpt(),1); ?>

                      </span>
                      <div class="readmore">
                      <a class="btn btn-primary" href="<?php the_permalink();?>">Read More</a>
                      </div>
                      <?php 
                        }
                        wp_reset_query();
                      ?>
                    
                      
                    </div>

                    <div class="card">   
                      <h5 class="text-center"><b>College Updates</b></h5>                  
                      <div class="card-body"> 
                      <?php 
                        $args = array(
                        'post_type' =>'UpcomingEvents',
                        'posts_per_page' => '3'
                        );
                        
                        $upcoming = new WP_Query($args);
                        while($upcoming -> have_posts()){
                          $upcoming->the_post();
                      ?>                                               
                        
                          <div class="media">                        
                              <img class=" mr-3 img-fluid post-thumb  d-md-flex img-thumnails" src="<?php the_post_thumbnail_url('thumbnail');?>">
                          
                              <div class="media-body">
                              <a href="<?php the_permalink();?>"><?php the_title();?> </a>
                                <?php 
                                    echo wp_trim_words(get_the_excerpt(),10);
                                ?>
                              </div>
                          </div>
                          <hr>
                      
                      <?php 
                        }
                        wp_reset_query();
                      ?>
                      </div> 
                      
                    </div>


                    <div class="card">  
                      <h5 class="text-center"><b>College Tour</b> </h5>                   
                        <div class="card-body">                                                
                          <div class="media">
                            <!-- <img class=" card-img-top mr-3 img-thumbnail" src="../../assets/img/index/4.svg" alt="card img"> -->
                              <div class="media-body">
                                <iframe id="iframes" src="https://www.youtube.com/embed/fcc2pu84zGA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                  
                              </div>
                            </div>
                
                        </div>
                        
                    </div>
                  
          </div>
        </div>

      </section>

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
  




