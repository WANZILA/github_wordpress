<ul class="nav side-navs">   
        <h5 class="sideHeadings-color">Programmes</h5>
            
            <li class="nav-item side-nav-item">
                <ul>
                  <li><a class="nav-link" href="<?php echo site_url('/index.php/programmes');?>"
                        >Programmes Offered at the College </a>
                  </li>
                  <li class="nav-item"> <a href="<?php echo site_url('index.php/application-procedure');?>" >How to Apply? </a>  </li>   
              </ul>
            </li> 
  
            
            <li class="nav-item side-nav-item">
              <?php dynamic_sidebar('Programmes'); ?>
            </li>


                             
                       

    

</ul>