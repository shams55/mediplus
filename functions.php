<?php
     add_action('after_setup_theme', 'learnwptheme');

     if(!function_exists('learnwptheme')){
          function learnwptheme(){
               load_theme_textdomain('learnwp', get_template_directory() . '/languages');

               //add_theme_support( 'post-thumbnails');
               add_theme_support('post-thumbnails');

               add_theme_support('post-formats', array('aside', 'gallery', 'quate', 'image', 'video', 'audio'));

               add_action('wp_enqueue_scripts', 'mywpscript');
               if(!function_exists('mywpscript')){
                    function mywpscript(){
                          
                              // wp_enqueue_style("bootstrap_css", get_parent_theme_file_uri('assets/css/bootstrap.min.css'), array(), wp_get_theme()->get('Version'), 'all');

                              wp_enqueue_style("bootstrap_css", get_parent_theme_file_uri('assets/css/bootstrap.min.css'), array(), wp_get_theme()->get('Version'), 'all');
                              wp_enqueue_style("nice_css", get_parent_theme_file_uri('assets/css/nice-select.css'), array(), wp_get_theme()->get('Version'), 'all');
                              wp_enqueue_style("asesome_css", get_parent_theme_file_uri('assets/css/font-awesome.min.css'), array(), wp_get_theme()->get('Version'), 'all');


                              wp_enqueue_style("icofont_css", get_parent_theme_file_uri('assets/css/icofont.css'), array(), wp_get_theme()->get('Version'), 'all');
                              wp_enqueue_style("slick_css", get_parent_theme_file_uri('assets/css/slicknav.min.css'), array(), wp_get_theme()->get('Version'), 'all');
                              wp_enqueue_style("owl_css", get_parent_theme_file_uri('assets/css/owl-carousel.css'), array(), wp_get_theme()->get('Version'), 'all');

                              wp_enqueue_style("datepicker_css", get_parent_theme_file_uri('assets/css/datepicker.css'), array(), wp_get_theme()->get('Version'), 'all');
                              wp_enqueue_style("animate_css", get_parent_theme_file_uri('assets/css/animate.min.css'), array(), wp_get_theme()->get('Version'), 'all');
                              wp_enqueue_style("magni_css", get_parent_theme_file_uri('assets/css/magnific-popup.css'), array(), wp_get_theme()->get('Version'), 'all');


                              wp_enqueue_style("normalize_css", get_parent_theme_file_uri('assets/css/normalize.css'), array(), wp_get_theme()->get('Version'), 'all');
                              wp_enqueue_style("style_css", get_parent_theme_file_uri('style.css'), array(), wp_get_theme()->get('Version'), 'all');
                              wp_enqueue_style("res_css", get_parent_theme_file_uri('assets/css/responsive.css'), array(), wp_get_theme()->get('Version'), 'all');

                              wp_enqueue_style("color1_css", get_parent_theme_file_uri('assets/css/color/color1.css'), array(), wp_get_theme()->get('Version'), 'all');

                              // wp_enqueue_style("main_css", get_parent_theme_file_uri('assets/css/main.css'), array(), wp_get_theme()->get('Version'),'all');

                              //  wp_enqueue_style("bootstrap", get_parent_theme_file_uri('assets/css/bootstrap.min.css'), array(), wp_get_theme()->get('Version'),'all');




                              // <!-- Google Fonts -->
                              // <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap" rel="stylesheet">

                              // <!-- Bootstrap CSS -->
                              // <link rel="stylesheet" href="css/bootstrap.min.css">
                              // <!-- Nice Select CSS -->
                              // <link rel="stylesheet" href="css/nice-select.css">
                              // <!-- Font Awesome CSS -->
                              // <link rel="stylesheet" href="css/font-awesome.min.css">
                              // <!-- icofont CSS -->
                              // <link rel="stylesheet" href="css/icofont.css">
                              // <!-- Slicknav -->
                              // <link rel="stylesheet" href="css/slicknav.min.css">
                              // <!-- Owl Carousel CSS -->
                              // <link rel="stylesheet" href="css/owl-carousel.css">
                              // <!-- Datepicker CSS -->
                              // <link rel="stylesheet" href="css/datepicker.css">
                              // <!-- Animate CSS -->
                              // <link rel="stylesheet" href="css/animate.min.css">
                              // <!-- Magnific Popup CSS -->
                              // <link rel="stylesheet" href="css/magnific-popup.css">

                              // <!-- Mediplus CSS -->
                              // <link rel="stylesheet" href="css/normalize.css">
                              // <link rel="stylesheet" href="style.css">
                              // <link rel="stylesheet" href="css/responsive.css">

                              // <!-- Color CSS -->
                              // <link rel="stylesheet" href="css/color/color1.css">

                              // <link rel="stylesheet" id="colors">




                         // how to write inline css
                         //   wp_add_inline_style(
                         //           'unique_id',
                         //           'body{background:red;}'
                         //      );

                         // wp_enqueue_style(
                         //      "unique_id", 
                         //      "source", 
                         //      array(), 
                         //      varsion,
                         //      media(all)
                         // );

                         // wp_enqueue_script(
                         //      "main",
                         //      get_template_directory_uri(). "/assets/js/main.js",
                         //      array(),
                         //      wp_get_theme()->get('Version'),
                         //      false
                         // );
                         wp_add_inline_script('main',
                              'console.log("hello area");',
                         );
                    }
               }
          }
     }
     
    require get_template_directory() . "/inc/custompost/slider/slider.php";

?>