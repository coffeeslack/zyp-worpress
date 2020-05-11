<!-- PACKAGE CARD -->
<div class=" col-lg-3 col-md-6 mb-4 mb-lg-0">
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
        <!-- package price from package_price custom field -->
        <div class="packagePrice">
        <div class="packagePriceTag">
            <?php
                echo get_post_meta( $post->ID, "package_price", true );
            ?>
        </div>
        <!-- buy now button -->
        <a href="<?php the_permalink(); ?>" class="packageBuyBtn mainBtn">Buy Now</a>
        </div>
        <!-- package features from package_feature custom field -->
        <div class="packageDetails">
            <?php
                // get all features
                $features = get_post_meta( $post->ID, "package_feature", false );
                // loop through each feature
                if( count( $features) != 0) { 
                    foreach ( $features as $feature) {      
            ?>
                <!-- display each feature -->
                <div class="packageDetail"><?php echo $feature; ?></div>
            <?php 
                    }
                }
            ?>
        </div>
        <!-- learn more button -->
        <div class="packageLearnMoreBtn">
            <a href="<?php the_permalink(); ?>" class="btnLink">Learn More</a>
        </div>
    </div>
</div>
<!-- PACKAGE CARD END-->