<?php
get_header(); ?>
      <section class="hero">
        <div class="content">
          <h1 class = 'tagline'><?php bloginfo("description"); ?></h2>
          <p>Working to raise awareness of the impoverished conditions faced by so many of the children in Africa.</p>
        </div>
        <div class="image-container">
          <img src="<?php echo get_template_directory_uri(); ?>/images/MercysHopeHomePageImage1.jpg" alt="raising awareness for the children of Africa.">
        </div>
      </section>

<?php $args = array( "posts_per_page" => 0,"post_type" => "home_page_section" );

$home = get_posts( $args );
	
foreach ( $home as $post ) : setup_postdata( $post ); ?>

      <section class="front-page-section grid-container">
        <div class="title-container">
          <h2><?php the_title(); ?></h2>
        </div>
        <div class="image-container">
          <img src="<?php the_post_thumbnail_url(); ?>">
        </div>
        <div class="content-container">
          <?php the_content(); ?>
        </div>
      </section>
    
<?php endforeach; ?>
<?php wp_reset_postdata();

get_footer();