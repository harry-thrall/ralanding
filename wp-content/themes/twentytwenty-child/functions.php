<?php 

// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {
    $filetype = wp_check_filetype( $filename, $mimes );
    return [
        'ext'             => $filetype['ext'],
        'type'            => $filetype['type'],
        'proper_filename' => $data['proper_filename']
    ];
  
  }, 10, 4 );
  
  function cc_mime_types( $mimes ){
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
  add_filter( 'upload_mimes', 'cc_mime_types' );
  
  function fix_svg() {
    echo '<style type="text/css">
          .attachment-266x266, .thumbnail img {
               width: 100% !important;
               height: auto !important;
          }
          </style>';
  }
  add_action( 'admin_head', 'fix_svg' );

//Enqueue files

function ht_enqueue_styles() { 
      wp_enqueue_script('jquery');
      wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/js/custom.js' );
      wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css' );
      wp_enqueue_style( 'home-style', get_stylesheet_directory_uri() . '/css/home.css' );
      wp_enqueue_style( 'animation-style', get_stylesheet_directory_uri() . '/css/animate.css' );
      wp_enqueue_style( 'responsive-style', get_stylesheet_directory_uri() . '/css/responsive.css' );

      wp_register_script('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js', array('jquery'), '1.0.0'); // Custom scripts
wp_enqueue_script('slick'); 
wp_register_script('slicknav', 'https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/jquery.slicknav.min.js', array('jquery'), '1.0.0'); // Custom scripts
wp_enqueue_script('slicknav'); 
    }

    add_action( 'wp_enqueue_scripts', 'ht_enqueue_styles' );

    register_nav_menus(
      array(
        'menu-1' => esc_html__( 'Primary', 'elation' ),
      )
    );
    
	

    ?>