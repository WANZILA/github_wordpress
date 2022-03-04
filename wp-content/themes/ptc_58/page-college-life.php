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
