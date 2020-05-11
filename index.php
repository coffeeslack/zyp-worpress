<?php get_header(); ?>
    <!-- ==========
        BANNER        
     ===========-->
    <div class="banner">
      <div class="bannerText">
        When you need fast creative solutions to grow your business.
        <div class="bannerBtn"><a href="http://localhost/zyp/packages/" class="subBtn">Start Here &#10141</a></div>
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/images/Asset 1hero_rocket.svg" class="bannerRocket" />
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
      <!-- ==========
        WHY ZIP    
     ===========-->
     <div class="section blueBackground text-white whyZypSection">
         <div class="sectionTitleFont">Why zyp?</div>
       <div class="sectionContentFont">Delightful first <strong>impressions</strong> are what we create differently.</div>
     </div>
    <!-- ==========      
        SERVICES     
     ===========-->
     <?php get_template_part('includes/section', 'services');?>
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
