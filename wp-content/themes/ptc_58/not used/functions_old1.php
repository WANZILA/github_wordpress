<?php 

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . 'inc//class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


  function phi_theme_support() {
    remove_theme_support( 'widgets-block-editor' );
}
add_action( 'after_setup_theme', 'phi_theme_support' );


//clears the WP_Scripts::localize error from displaying in on the screen 
add_filter('doing_it_wrong_trigger_error', function () {return false;}, 10, 0);


  function ptc_register_styles(){
    //gets Version number from style.css 
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('ptc_bootstrap',"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css",'4.5.3','all');
    wp_enqueue_style('ptc_js',"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js",'4.5.3','all');

    //wp_enqueue_style('ptc_fontawesome',"",'','all');  
    wp_enqueue_style('style', get_template_directory_uri()."/style.css",array('ptc_bootstrap'),$version,'all');
    wp_enqueue_style('ptc_header_style',get_template_directory_uri()."/assets/css/header.css",array('ptc_bootstrap','style'),$version,'all');
    wp_enqueue_style('ptc_home_style',get_template_directory_uri()."/assets/css/home.css",array('ptc_bootstrap','style'), $version,'all');
    wp_enqueue_style('ptc_footer_style',get_template_directory_uri()."/assets/css/footer.css",array('ptc_bootstrap','style','ptc_header_style'),$version,'all');
  }
  //add this hook 
  add_action('wp_enqueue_scripts','ptc_register_styles');

  function ptc_register_scripts(){
    
    wp_enqueue_script('ptc-pooper',"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js",'1.16.1',true);
    wp_enqueue_script('ptc-jquery',"https://code.jquery.com/jquery-3.5.1.slim.min.js",array(),'3.5.1',true);
    wp_enqueue_script('ptc-bootstrap',"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js",'4.5.3',true);
  }
  add_action('wp_enqueue_scripts','ptc_register_scripts');

  //adding a custome logo
  function ptc_theme_support(){
    //thumbnails
    add_theme_support('post-thumbnails');
    //support for tags
    add_theme_support('custom-logo');
    //shows title of the page
    add_theme_support('title-tag');
    //html 5 elements
    add_theme_support('html5',
      array('comment-list', 'comment-form','search-form')
  ); 
  //support nav menus
  register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'ptc_58' ),
  ));
  }

  add_action('after_setup_theme','ptc_theme_support');

  // //custom post types
  // function ptc_admins_post_type(){
  //   //register it 
  //   register_post_type('AdminsDescription',
  //     array(
  //       'rewrite'=> array('slug' => 'adminsDescrip'),
  //       'labels' => array(
  //         'name' => 'Admin',
  //         'singular_name' =>'College Adminstrators',
  //         'add_new_item' => 'Add New Admin description',
  //         'edit_item' => 'Edit Admin description'
  //       ),
  //       'menu-icon' => 'dashicons-clipboards',
  //       'public' => true,
  //       'has_archieve'=> true,
  //       'supports' => arrary(
  //         'title','thumbnail','editor','excerpt','comments'
  //         )          
  //       )
  //     );
  // }
  // add_action('init', 'ptc_admins_post_type');
  function ptc_admins_post_type(){
    // register_post_type('name of the custome post type', 'array)
    register_post_type('AdminsDescription',
      array(
        //url for the custom post type
        'rewrite' => array('slug' => 'adminsDescrip'),
        'labels' => array (
          'name' => 'Admins Description',
          'singular_name' => 'AdminsDescription',
          // for editing the project
          'add_new_item' => 'Add new AdminsDescrip',
          'edit_item' => 'Edit AdminsDescription'
        ),
        //adding icons  www.developer.wordpress.org/resource/dashicon or google search for 'dashicons fro wordpress'
        'menu-icon' =>'dashicons-clipboards',
        //if you want it to be accessed by the public otherwise you set it to private
        'public' => true,
        //using archieve you can filter your projects by date time categories etc
        'has_archieve' => true, 
		    //adding what should be support by this custome type
        'supports' => array(
          'title','thumbnail', 'editor', 'excerpt', 'comments'
        )
      )
    ); 
    register_post_type('UpcomingEvents',
      array(
        //url for the custom post type
        'rewrite' => array('slug' => 'upcommingEvents'),
        'labels' => array (
          'name' => 'Upcoming Events',
          'singular_name' => 'UpcomingEvents',
          // for editing the project
          'add_new_item' => 'Add new Upcoming Event',
          'edit_item' => 'Edit Upcoming Event'
        ),
        //adding icons  www.developer.wordpress.org/resource/dashicon or google search for 'dashicons fro wordpress'
        'menu-icon' =>'dashicons-clipboards',
        //if you want it to be accessed by the public otherwise you set it to private
        'public' => true,
        //using archieve you can filter your projects by date time categories etc
        'has_archieve' => true, 
        //adding what should be support by this custome type
        'supports' => array(
          'title','thumbnail', 'editor', 'excerpt', 'comments'
        )
      )
    );
    register_post_type('Programmes',
      array(
        //url for the custom post type
        'rewrite' => array('slug' => 'programmes'),
        'labels' => array (
          'name' => 'Programmes',
          'singular_name' => 'Programmes',
          // for editing the project
          'add_new_item' => 'Add new Programme',
          'edit_item' => 'Edit Programme'
        ),
        //adding icons  www.developer.wordpress.org/resource/dashicon or google search for 'dashicons fro wordpress'
        'menu-icon' =>'dashicons-clipboards',
        //if you want it to be accessed by the public otherwise you set it to private
        'public' => true,
        //using archieve you can filter your projects by date time categories etc
        'has_archieve' => true, 
        //adding what should be support by this custome type
        'supports' => array(
          'title','thumbnail', 'editor', 'excerpt', 'comments','categories'
        )
      )
    );
    register_post_type('UpcomingEvents',
      array(
        //url for the custom post type
        'rewrite' => array('slug' => 'upcommingEvents'),
        'labels' => array (
          'name' => 'Upcoming Events',
          'singular_name' => 'UpcomingEvents',
          // for editing the project
          'add_new_item' => 'Add new Upcoming Event',
          'edit_item' => 'Edit Upcoming Event'
        ),
        //adding icons  www.developer.wordpress.org/resource/dashicon or google search for 'dashicons fro wordpress'
        'menu-icon' =>'dashicons-clipboards',
        //if you want it to be accessed by the public otherwise you set it to private
        'public' => true,
        //using archieve you can filter your projects by date time categories etc
        'has_archieve' => true, 
        //adding what should be support by this custome type
        'supports' => array(
          'title','thumbnail', 'editor', 'excerpt', 'comments'
        )
      )
    );
    register_post_type('Projects',
      array(
        //url for the custom post type
        'rewrite' => array('slug' => 'projectss'),
        'labels' => array (
          'name' => 'Projects',
          'singular_name' => 'Projects',
          // for editing the project
          'add_new_item' => 'Add new Projects',
          'edit_item' => 'Edit Projects'
        ),
        //adding icons  www.developer.wordpress.org/resource/dashicon or google search for 'dashicons fro wordpress'
        'menu-icon' =>'dashicons-clipboards',
        //if you want it to be accessed by the public otherwise you set it to private
        'public' => true,
        //using archieve you can filter your projects by date time categories etc
        'has_archieve' => true, 
        //adding what should be support by this custome type
        'supports' => array(
          'title','thumbnail', 'editor', 'excerpt', 'comments'
        )
      )
    );
    register_post_type('ShortCourses',
    array(
      //url for the custom post type
      'rewrite' => array('slug' => 'ShortCourses'),
      'labels' => array (
        'name' => 'Short Course',
        'singular_name' => 'ShortCourses',
        // for editing the project
        'add_new_item' => 'Add new Short Course',
        'edit_item' => 'Edit Short Course'
      ),
      //adding icons  www.developer.wordpress.org/resource/dashicon or google search for 'dashicons fro wordpress'
      'menu-icon' =>'dashicons-clipboards',
      //if you want it to be accessed by the public otherwise you set it to private
      'public' => true,
      //using archieve you can filter your projects by date time categories etc
      'has_archieve' => true, 
      //adding what should be support by this custome type
      'supports' => array(
        'title','thumbnail', 'editor', 'excerpt', 'comments'
      )
    )
  );
  }

   add_action('init', 'ptc_admins_post_type');

   function ptc_widget_areas(){
     register_sidebar(
       array(
        'before_title' => '',
        'after_title' => '',
        'before_widget' => '',
        'after_widget' => '',
        'name' => 'Student testmonies',
        'id' => 'stu-test1',
        'description' => 'Student Testmonies'
       )
       );
       register_sidebar(
        array(
          'before_title' =>'',
          'after_title'=>'',
          'before_widget'=>'',
          'after_widget' =>'',
          'name' => 'Searchbar',
          'id' =>'searchbar',
          'description' => 'for searching posts and programmes'
        )
        );
        register_sidebar(
          array(
            'before_title' =>'',
            'after_title'=>'',
            'before_widget'=>'',
            'after_widget' =>'',
            'name' => 'Programmes',
            'id' =>'Programmes',
            'description' => 'Displays recent posts and categories'
          )
          );
   }

   add_action('widgets_init','ptc_widget_areas');

   //filter search queries
   function search_filter($query){
     if($query->is_search()){
       //created an array of types of posts to search form
       $query->set('post_type', array('Programmes'));
     }
   }

   add_filter('pre_get_posts','search_filter');


?>