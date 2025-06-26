<?php
        if(have_posts()):
        while (have_posts()): the_post();

                // echo get_post_format();

                 //get_template_part('parts/content', get_post_format());
     ?>
     <article>
        <h1>This is page</h1>
        <h1><?php the_title();?></h1>
        <?php 
        
            the_time();
            the_content();
        ?>
        <a href="#"><?php _e("Read Post", 'learnwp') ?></a>
    </article>
    <?php

        // the_category();
        // the_author();
        // the_excerpt();
        // the_ID();
        // the_meta();

        // the_time();
        endwhile;
    else:
        _e("don't have post", 'learnwp');
        endif;
    ?>