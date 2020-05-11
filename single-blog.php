<?php get_header(); ?>

 <?php if( have_posts() ) : while( have_posts() ): the_post();?>
    <!-- ==========
        BANNER        
     ===========-->
    <div class="banner bannerSmall">
      <div class="bannerText d-flex align-items-center justify-content-center flex-column" style="width: 100%; text-transform: capitalize;">
        <?php the_title();?>
        <h6 class="opacText"><?php echo get_the_date(); ?></h6>
      </div>
    </div>
    <!-- ==========
        BODY      
     ===========-->
     <div class="section singleBlogSection row d-flex align-items-center justify-content-center" style="width: 100%; margin: 0;">
        <!-- BLOG CARD -->
        <div class="col-md-10 mb-3">
            <div class="singleBlogCard  mt-4 mb-md-4">
                <div class="singleBlogImage">
                    <img src="<?php the_post_thumbnail_url();?>" />
                </div>
            </div>
            <div class="singleBlogContentWrapper">
                <div class="blogContent">
                    <?php the_content();?>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; else: endif;?>
  <!-- ============
    NEWS LETTER      
    ===========-->
    <?php get_template_part('includes/section', 'newsletter');?>
    <!-- =============
        CONTACT SECTION        
     ================-->
    <?php get_template_part('includes/section', 'contact');?>
    <!-- ==========      
        FOOTER
     ===========-->
     <?php get_footer(); ?>
