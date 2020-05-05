<?php 

/**
* Template Name: College Sponsorship
**/

get_header();


// This section displays the content entered into the wordpress admin
if (have_posts()):
    while (have_posts()):
        the_post();
        ?>
        <div class = 'page_content'><?php the_content(); ?>
        <?php
    endwhile;
endif;
wp_reset_postdata();

// This section gets all the pictures and assigns them an id
$args = array("posts_per_page" => 0, "post_type" => "college_sponsorship");
$home = get_posts($args);
foreach ($home as $post) : setup_postdata($post);
    ?>
        <img class= 'child_pic_small' id = '<?php echo get_the_id(); ?>'src = '<?php the_post_thumbnail_url(); ?>'>
        <?php
    endforeach;
    wp_reset_postdata();

// This section gets all the bio info and assigns them the same id with _bio added
    ?>
    <div class = 'bio showing content' id ='no_selection_bio'>
        Please hover over a child to see their bio.
    </div>
<?php
$bios_args = array("posts_per_page" => 0, "post_type" => "college_sponsorship");
$bios = get_posts($args);
foreach ($bios as $post) : setup_postdata($post);
    ?>
        <div class ='bio hidden content' id ='<?php echo get_the_id() . "_bio"; ?>'
        <?php the_content(); ?>
    </div>
             <?php
         endforeach;
         wp_reset_postdata();
         ?></div><?php

get_footer();