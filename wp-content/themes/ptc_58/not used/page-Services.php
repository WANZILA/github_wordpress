<?php get_header(); ?>
<section class="container-fluid">
  <img class="card-img-top d-block w-100"src="<?php echo get_template_directory_uri().'/assets/img/about/administrators.jpg'; ?>" alt="Graduates">
  <section class="row">
    <div class="col-12 row-padding">
        <h2> <b>Pentecostal Theological College Administrators</b> </h2> 
    </div>
      <div class="col-12 ">         
          <p class="text-justify" style="margin-bottom: 0rem;">
              At the College we know the value of working as a Team. we have different administrative 
              departments (i.e Department of community Transformation & Department of Theology) 
              that collaborate to transform peoples lives by impacting a positive change in their ministries 
              through Word and Deed!
          </p>
      </div>
  </section>
</section>
<section class="container-md container-margins ">
  <section class="row">
    <main class="col-md-8 container-backgrounds">
        <?php 
          while(have_posts()){
            the_post();
            
          ?>
          <!-- <p> Admin description</p> -->
          <h2> <?php the_title(); ?> </h2>
          <!-- <h2> <?php the_title(); ?> </h2> Posted by <?php the_author(); ?> -->
          <img class="mr-3 img-fluid post-thumb  d-md-flex" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Group photo of college governors">

         
          <?php 
            the_content();
          ?>
        <?php } ?>
    </main>


    <aside class="col-md-4  ">

        <ul class="nav side-navs">
            <h5 class="headings-color">Programmes</h5>
            <li class="nav-item side-nav-item">
                        <a class="nav-link" href="<?php echo site_url('/index.php/programmes');?>"
                        >Programmes </a>
            </li> 
            <li class="nav-item side-nav-item"> gg<?php dynamic_sidebar('progSidebar'); ?> </li>
        </ul>
     
    <ul class="nav side-navs">   
      <h5 class="headings-color">Programmes</h5>                                
                       
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
<?php get_footer(); ?>