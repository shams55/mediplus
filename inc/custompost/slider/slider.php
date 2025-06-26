<?php 
     if(!function_exists('mycustompost')){
          function mycustompost(){
               register_post_type('mywonslider',array(
                    'labels' => array(
                         'name' => __("my sliders", 'learnwp'),
                         'singular_name' => __('slider', 'learnwp'),
                          
                    ),
                    'public' => true,
                    'supports' => array(
                        'title', 'editor', 'thumbnail', 'author', 'comments', 'excerpt'
                    )
               ));
          }
     }

     add_action('init', 'mycustompost');
?>