<?php
/**
 * Template Name: Child Sponsorship
 * */
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
$args = array("posts_per_page" => 30, "post_type" => "child_sponsorship");
$home = get_posts($args);
foreach ($home as $post) : setup_postdata($post);
    ?>
        <a href = "http://mercyshope.net/child-donate/"><img class= 'child_pic_small' id = '<?php echo get_the_id(); ?>'src = '<?php the_post_thumbnail_url(); ?>'></a>
        <?php
    endforeach;
    wp_reset_postdata();

// This section gets all the bio info and assigns them the same id with _bio added
    ?>
    <div class = 'bio showing content' id ='no_selection_bio'>
        Please hover over a child to see their bio.
    </div>
<?php
$bios_args = array("posts_per_page" => 0, "post_type" => "child_sponsorship");
$bios = get_posts($args);
foreach ($bios as $post) : setup_postdata($post);
    ?>
        <div class ='bio hidden content' id ='<?php echo get_the_id() . "_bio"; ?>'>
             <h3><?php the_title(); ?></h3>
        <?php the_content(); ?>
    </div>
             <?php
         endforeach;
         wp_reset_postdata();
         ?></div><?php
get_footer();