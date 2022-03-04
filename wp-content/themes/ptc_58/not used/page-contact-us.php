<?php get_header();
    while(have_posts()){
      the_post();
    }
?> 
<!-- post=25 -->
 <section class="container-fluid">    
 <!-- <iframe class="google-mapslink" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.107405878217!2d34.17605141373497!3d1.081623699211031!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1778b66a61d7618d%3A0xfc04e932a4f37b9!2sPENTECOSTAL%20THEOLOGICAL%20COLLEGE%20MBALE%20-MBALE!5e0!3m2!1sen!2sug!4v1568107028500!5m2!1sen!2sug"
frameborder="0" style="border:0;" allowfullscreen=""></iframe>         -->
<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15956.429621931327!2d34.178239999999995!3d1.0816240000000057!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfc04e932a4f37b9!2sPENTECOSTAL%20THEOLOGICAL%20COLLEGE%20MBALE%20-MBALE!5e0!3m2!1sen!2sug!4v1632553991992!5m2!1sen!2sug" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
  <a href="https://goo.gl/maps/byK4d2NQGWQDe8Wq7"> Get Directions to your deivce Google Map </a>

 </section>
 <section class="container-md container-margins ">
  <section class="row">
    <main class="col-md-8 container-backgrounds">
        <?php 
          while(have_posts()){
            the_post();
            
          ?>
          <!-- <p> Admin description</p> -->
          
          <!-- <h2> <?php the_title(); ?> </h2> Posted by <?php the_author(); ?> -->
         <?php 
            the_content();
          ?>
        <?php } ?>
    </main>
    <aside class="col-md-4  ">
     
    <ul class="nav side-navs">   
      <h5 class="headings-color">College Administrators</h5>                                
                       
                      <?php 
                        $args = array(
                        'post_type' =>'AdminsDescription',
                        'posts_per_page' => '3'
                        );
                        
                        $upcoming = new WP_Query($args);
                        while($upcoming -> have_posts()){
                          $upcoming->the_post();
                      ?>                                               
                        
                          <li class="nav-item side-nav-item">                        
                          
                                  
                               <a href="<?php the_permalink();?>">
                               <img class=" mr-3 img-fluid post-thumb img-thumnails" src="<?php the_post_thumbnail_url('thumbnail');?>">
                                   <?php the_title();?> </a>                                  
                                      
                          </li>
                          
                      
                      <?php 
                        }
                        wp_reset_query();
                      ?>
                    
                      
                      </ul>

                         
    </aside>
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
