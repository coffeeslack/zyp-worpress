<?php get_header(); ?>
<?php if( have_posts() ) : while( have_posts() ): the_post();?>
    <!-- ==========
        BANNER
     ===========-->
    <div class="banner bannerSmall">
      <div class="bannerText d-flex align-items-center justify-content-center flex-column" style="width: 100%;">
        <?php the_title();?>
      </div>
    </div>
    <!-- ==========
        BODY  
     ===========-->
     <div class="section" style="width: 100%; margin: 0;">
        <?php the_content(); ?>
    </div>

    <?php endwhile; else: endif;?>
  <!-- ==========
      NEWS LETTER
     ===========-->
    <?php get_template_part('includes/section', 'newsletter');?>
    <!-- ==========   
      CONTACT SECTION
    ===============        
     ===========-->
    <?php get_template_part('includes/section', 'contact');?>
    <!-- ==========
      FOOTER
     ===========-->
     <?php get_footer(); ?>
