<?php get_header(); ?>

<!-- Blog Taxonomy  -->

    <!-- ==========
        BANNER        
     ===========-->
    <div class="banner bannerSmall">
      <div class="bannerText d-flex align-items-center justify-content-center flex-column" style="width: 100%;">
        Blog
      </div>
    </div>
    <!-- ==========
        BODY   
     ===========-->
     <div class="section blogSection row" style="width: 100%; margin: 0;">
        <?php

           $args = array(
            'post_type'=>'blog',
            );
            query_posts($args);
   
             if ( have_posts() ) : 
             while ( have_posts() ) : the_post();
        ?>
          <!-- BLOG CARD -->
         <div class="col-lg-4 col-md-6 mb-5">
            <div class="blogCard">
                <div class="blogImage">
                    <img src="<?php the_post_thumbnail_url();?>" />
                </div>
                <div class="blogContentWrapper">
                    <div class="blogDate"><?php echo get_the_date(); ?></div>
                    <a href="<?php the_permalink();?>" class="blogTitle btnLink"><?php the_title(); ?></a>
                    <div class="blogContent mt-2">
                        <?php the_excerpt(); ?>
                    </div>
                    <div class="blogReadMoreBtn">
                        <a href="<?php the_permalink(); ?>" class="mainBtn">read more</a>
                    </div>
                </div>
            </div>
          </div>
        
        <?php 
            endwhile; // end loop
        ?>
         <!-- PAGE BUTTONS -->
        <div class="pageButtons d-flex align-items-center justify-content-center mt-5 mb-5" style="width: 100%;">
          <span class="pageBtn m-2"><?php previous_posts_link();?></span>
          <span class="pageBtn m-2"><?php next_posts_link();?></span>
        </div>

      <?php 
          wp_reset_postdata(); 
        ?>

        <?php else: ?>
          <p>Sorry, no blogs to display.</p>
        <?php endif; ?>

       
    </div>
  <!-- ==========
      NEWS LETTER        
     ===========-->
    <?php get_template_part('includes/section', 'newsletter');?>
    <!-- ==========
      CONTACT SECTION
     ===========-->
    <?php get_template_part('includes/section', 'contact');?>
    <!-- ==========
        FOOTER
     ===========-->
     <?php get_footer(); ?>
