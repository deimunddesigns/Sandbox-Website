<?php
/**
 * Template Name: Programs
 * */
get_header();

// This section displays the content entered into the wordpress admin
if (have_posts()):
    while (have_posts()):
        the_post();
        the_content();
    endwhile;
endif;
wp_reset_postdata();

// This section gets posts tagged as board-members and displays them ?>
<div id='programs-container'>
<?php $args = array("posts_per_page" => 0, "tag" => "program");
$home = get_posts($args);
foreach ($home as $post) : setup_postdata($post);
    ?>
    <section class='program'>
      
        <img class= 'program-pic' id = '<?php echo get_the_id(); ?>'src = '<?php the_post_thumbnail_url(); ?>'>
      
      <div class ='content-container' id ='<?php echo get_the_id() . "_program"; ?>'>
        <h3><?php the_title(); ?></h3>
        <?php the_content(); ?>
      </div>
    </section>
  <?php endforeach;
         wp_reset_postdata();
         ?>
</div><!-- End #board-members-container -->
<?php get_footer();