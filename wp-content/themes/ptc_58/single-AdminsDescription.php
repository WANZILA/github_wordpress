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
    <main class="col-md-12 container-backgrounds">
        <?php 
          while(have_posts()){
            the_post();
            
          ?>
          <!-- <p> Admin description</p> -->
          <h2> <b><?php the_title(); ?></b> </h2>
          <!-- <h2> <?php the_title(); ?> </h2> Posted by <?php the_author(); ?> -->
          <!-- <div class="img-size-edits">
                     
                        <img class="img-contain" id="principle"  src="<?php //echo get_the_post_thumbnail_url(get_the_ID());?>">
                      </div>                      -->
                    </div>
         
          <?php 
            the_content();
            
          ?>
          <?php do_shortcode('[mashshare shares="false" networks="facebook,twitter,linkedin" services="3" size="large" text="Share Me" buttons="true" align="right" url="https://google.com"'); ?>
        <?php } ?>
        
    </main>
    
  </section>  
</section>
<?php get_footer(); ?>