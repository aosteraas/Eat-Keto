<?php

// CSS
function my_scripts_and_styles() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7');
    wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.7');
}
add_action( 'wp_enqueue_scripts', 'my_scripts_and_styles' );

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 630, 300, true );
	add_image_size( 'small-thumb', 230, 150, true );
    add_image_size( 'post-images', 630, 472, true );
	add_image_size( 'big-thumb', 960, 300, true );
    add_image_size( 'insane', 1000, 500, true );
    add_theme_support( 'automatic-feed-links' );
}

// pagination
function eatketo_pagination($pages = '', $range = 3)
{  
     $showitems = ($range * 2)+1;  

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   

     if(1 != $pages)
     {
//         echo "<div class='pagination columns two-thirds'>";
         echo '<nav aria-label="Page navigation"><ul class="pagination">';
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<li class='disabled'><span>".$i."</span></li>":"<li><a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a></li>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
         echo "</ul></nav>\n";
     }
}