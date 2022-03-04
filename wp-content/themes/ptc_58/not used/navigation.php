<nav class="navbar navbar-expand-md  navbar-light ">
             
             <a class="navbar-brand" href="#">
             <img src="<?php echo get_template_directory_uri();?>/assets/img/ptc-web-logo.png"></a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarNav">
               <ul class="navbar-nav  mr-auto">
                 <li class="nav-item ">
                   <a class="nav-link" href="<?php  echo site_url('');?>">Home </a>
                 </li> 
                 <li class="nav-item ">
                   <a class="nav-link" href="<?php echo site_url('/index.php/about');?>"
                   <?php if(is_page('about')) echo 'class="active"'?> >About us </a>
                 </li>
                 <li class="nav-item ">
                   <a class="nav-link" href="<?php echo site_url('/index.php/programmes');?>"
                   <?php if(get_post_type()=='post') echo 'class="active"'?>
                   >Programmes </a>
                 </li> 
                 <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                    Services
                   </a>
                   <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <div class="list-group">
                       <ul>
                         <li class="nav-item dropdown-item"> 
                           <a class="nav-link" href="<?php echo site_url('index.php/services-library');?>"> Library</a>
                         </li> 
                         <li class="nav-item dropdown-item"> 
                           <a class="nav-link" href="<?php echo site_url('index.php/services-hire');?>"> Hire grounds</a>
                         </li> 
                       </ul>
                     </div>                     
                   </div>
                 </li>
                 
                 <li class="nav-item ">
                   <a class="nav-link" href="<?php echo site_url('index.php/student-resources');?>">Student Resources </a>
                   <!-- add Student and lecturer login link  into teachable.com  -->
                 </li>
                 <li class="nav-item ">
                   <a class="nav-link" href="<?php echo site_url('index.php/contact-us');?>">Contact </a>
                 </li>
                 <li class="nav-item ">
                   <a class="nav-link" href="<?php echo site_url('index.php/blog');?>">Blog </a>
                 </li>
               </ul>                
             </div>
</nav>
           