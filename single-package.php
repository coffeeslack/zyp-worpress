<?php get_header(); ?>

<?php if( have_posts() ) : while( have_posts() ): the_post();?>
    <!-- ==========
        BANNER    
     ===========-->
    <div class="banner bannerSmall">
      <div class="bannerText d-flex align-items-center justify-content-center flex-column" style="width: 100%;">
        <!-- package title -->
        <?php the_title(); ?>
        <!--  -->
        <div class="bannerBtn"><a href="checkout.html" class="subBtn">BUY NOW &#10141</a></div>
      </div>
    </div>
    <!-- ==========
        BODY
     ===========-->
     <div class="section packageSectionBody row">
        <!-- package description -->
        <div class="col-lg-7">
          <!-- description title -->
          <div class="sectionHead"><?php the_title(); ?> Description</div>
        <div>
          <!-- description content from package_description custom field -->
          <?php
            echo get_post_meta( $post->ID, "package_description", true );
          ?>
        </div>
        <!-- package features -->
        <div class="singlePackageFeatures">
          <!-- feature title -->
          <div class="sectionHead"><?php the_title(); ?> Features</div>
          <!-- package features from package_feature custom field -->
          <ul>
            <?php
              // get all features from custom field
              $features = get_post_meta( $post->ID, "package_feature", false );
              // loop through each feature
              if( count( $features) != 0) { 
                foreach ( $features as $feature) {      
            ?>
              <!-- display each feature -->
              <li><?php echo $feature; ?></li>
            <?php 
                  }
              }
            ?>
          </ul>
        </div>
        <!-- package terms -->
        <div class="singlePackageTerms">
          <!-- terms title -->
          <div class="sectionHead"><?php the_title(); ?> Terms</div>
          <!-- terms content from package_terms custom field -->
          <div> 
          <?php
            echo get_post_meta( $post->ID, "package_terms", true );
          ?>
          </div>
      </div>
      <!-- package buy button -->
      <div class="singlePackageBuyBtn">
        <a href="checkout" class="mainBtn">BUY NOW &#10141</a>
      </div>
    </div>

    <!-- more packages -->
    <div class="col-lg-4 mt-5 mt-lg-0 singlePackageFeatured">
        <div class="packageCardContainer row">
            <!-- get current post category -->
            <?php 
              $categories = wp_get_post_terms( $post->ID, 'package_category') ;
              foreach ( $categories as $category):
                // Don't include featured packages category
                if ($category->slug != 'featured'):
            ?>
              <!-- more packages category title -->
              <div class="sectionSubHead text-center mb-4 col-12">More <?php echo $category->slug; ?> Packages</div>
            <!-- get packages in current category -->
            <?php
            // set up a new query for each category, pulling in related posts.
            $packages = new WP_Query(
                array(
                    'post_type' => 'package',
                    'post_status' => 'publish',
                    'posts_per_page' => 2,
                    'tax_query' => array(
                        array(
                            'taxonomy'  => 'package_category',
                            'terms'     => $category->slug, //display packages that are in the current post category
                            'field'     => 'slug'
                        )
                    )
                )
            );
            while ($packages->have_posts()) : $packages->the_post();
            ?>
            <!-- PACKAGE CARD -->
            <div class="mb-4 col-md-6 col-lg-12">
            <div class="packageCard text-center p-5">
                <div class="cardHead">
                  <!-- package title -->
                  <div class="cardTitle"><?php the_title();?></div>
                  <!-- package sub title from package_name custom field -->
                  <div class="cardSubTitle">
                  <?php
                    echo get_post_meta( $post->ID, "package_name", true );
                  ?>
                  </div>
                </div>
                <!-- package price -->
                <div class="packagePrice">
                  <div class="packagePriceTag">
                  <?php
                  echo get_post_meta( $post->ID, "package_price", true );
                  ?>
                  </div>
                  <!-- buy now button -->
                  <a href="<?php the_permalink(); ?>" class="packageBuyBtn mainBtn">Buy Now</a>
                </div>
                <!-- learn more button -->
                <div class="packageLearnMoreBtn mt-5">
                  <a href="<?php the_permalink(); ?>" class="btnLink">Learn More</a>
                </div>
            </div>
          </div>
          <!-- PACKAGE CARD END-->
          <?php 
            endwhile; // end loop
            $packages = null;
            wp_reset_postdata();
            endif;
            endforeach;
          ?>
        </div>
    </div>
     </div>

     <?php endwhile; else: endif;?>
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
