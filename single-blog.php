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
     <!-- ==========    
      FEATURED PACKAGES
     ===========-->
     <div class="section packagesSection">
        <div class="sectionHead">
          <div class="sectionTitle">Focus on you business, let's handle your design</div>
          <div class="sectionMenu">
            <!-- PACKAGES MINI MENU -->
              <ul class="smallMenu">
                <?php
                // Get all the categories
                $categories = get_terms( 'package_category' );
                // Loop through all the returned terms
                foreach ( $categories as $category ):
                  // Don't include featured category
                  if ($category->slug != 'featured'):
                ?>
                  <!-- display each package category in mini menu -->
                  <li>
                    <a href="http://localhost/zyp/package#zyp_<?php echo $category->slug; ?>">
                      zyp <?php echo $category->name; ?>
                    </a>
                  </li>
                <?php
                // Reset things, for good measure
                wp_reset_postdata();
                // end the loop
                endif;
                endforeach;
                ?>
              </ul>
            <!--  -->
          </div>
        </div>
        <div class="sectionSubHead text-center text-md-left mt-5">Featured Packages</div>
        <div class="row packageCardContainer mt-5">
          <!-- FEATURED PACKAGES -->
            <?php
            // set up a new query for each category, pulling in related posts.
            $featured = new WP_Query(
                array(
                    'post_type' => 'package',
                    'post_status' => 'publish',
                    'posts_per_page' => 4,
                    'tax_query' => array(
                        array(
                            'taxonomy'  => 'package_category',
                            'terms'     => 'featured',
                            'field'     => 'slug'
                        )
                    )
                )
            );
            while ($featured->have_posts()) : $featured->the_post();
            ?>
              <!-- PACKAGE CARD -->
                <?php get_template_part('includes/section', 'package');?>
              <!-- -->
            <?php
            // Reset things, for good measure
            endwhile;
            $featured = null;
            wp_reset_postdata();
            ?>
          <!--  -->
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
