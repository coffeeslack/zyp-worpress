<?php get_header(); ?>

  <!-- Package Taxonomy  -->

    <!-- ==========
        BANNER   
     ===========-->
    <div class="banner bannerSmall">
      <div class="bannerText d-flex align-items-center justify-content-center flex-column" style="width: 100%;">
        Packages
         <div class="sectionMenu mt-0 mt-md-3 packagesBannerMenu d-flex align-items-center justify-content-center flex-column" style="width: 100%;">
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
                <!-- menu name -->
                  <li><a href="#zyp_<?php echo $category->name; ?>">zyp <?php echo $category->name; ?></a></li>
                <!--  -->
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
    </div>
    <!-- ==========
        BODY   
     ===========-->
     <div class="section packagesSection">
        <!-- LOOP THROUGH ALL PACKAGE CATEGORIES TO GET EACH PACKAGE -->
        <?php
        // Get all the categories
        $categories = get_terms( 'package_category' );
        // Loop through all the returned terms
        foreach ( $categories as $category ):
        // Don't include featured category
        if ($category->slug != 'featured'):
        // set up a new query for each category, pulling in related posts.
        $packages = new WP_Query(
            array(
                'post_type' => 'package',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'tax_query' => array(
                    array(
                        'taxonomy'  => 'package_category',
                        'terms'     => array( $category->slug ),
                        'field'     => 'slug'
                    )
                )
            )
          );
        ?>
        <!--  -->
        <!-- PACKAGES CATEGORY -->
        <div class="packageCategorySection" id="zyp_<?php echo $category->name; ?>">
          <!-- category title -->
          <div class="sectionHead">Zyp <?php echo $category->name; ?></div>
          <!-- category packages -->
          <div class="packageCategoryPackages row">
              <?php while ($packages->have_posts()) : $packages->the_post(); ?>
              <!-- PACKAGE CARD -->
                <?php get_template_part('includes/section', 'package');?>
              <!-- -->
              <?php 
                endwhile; // end loop
              ?>
          </div>
      </div>
      <!--  -->
        <?php
      // Reset things, for good measure
      $packages = null;
      wp_reset_postdata();

      // end the loop
      endif;
      endforeach;
      ?>
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
