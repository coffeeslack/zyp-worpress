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
     <div class="section packageSectionBody row mt-4">
       <!-- ADDRESS CUSTOM FIELD -->
        <div class="col-lg-3 col-md-6 p-5 text-center border mt-3 mt-lg-0 d-flex align-items-center justify-content-center flex-column" style="height: 150px;">
          <div class="font-weight-bold">Address</div>
          <div class="pt-2">
             <?php
              echo get_post_meta( $post->ID, "Address", true );
            ?>
          </div>
        </div>
        <!-- PHONE CUSTOM FIELD -->
        <div class="col-lg-3 col-md-6 p-5 text-center border mt-3 mt-lg-0 d-flex align-items-center justify-content-center flex-column" style="height: 150px;">
          <div class="font-weight-bold">Phone</div>
          <div class="pt-2">
            <?php
              echo get_post_meta( $post->ID, "Phone", true );
            ?>
          </div>
        </div>
        <!-- EMAIL CUSTOM FIELD -->
        <div class="col-lg-3 col-md-6 p-5 text-center border mt-3 mt-lg-0 d-flex align-items-center justify-content-center flex-column" style="height: 150px;">
          <div class="font-weight-bold">Email</div>
          <div class="pt-2">
            <?php
              echo get_post_meta( $post->ID, "Email", true );
            ?>
          </div>
        </div>
        <!-- WORKING HOURS CUSTOM FIELD -->
        <div class="col-lg-3 col-md-6 p-5 text-center border mt-3 mt-lg-0 d-flex align-items-center justify-content-center flex-column" style="height: 150px;">
          <div class="font-weight-bold">Working Hours</div>
          <div class="pt-2">
            <?php
              echo get_post_meta( $post->ID, "Working Hours", true );
            ?>
          </div>
        </div>

        <!-- <div style="width: 100%;" class="row"></div> -->

        <!-- CONTACT FORM -->
        <form class="contactForm mt-5" style="width: 100%;">
            <div class="text-center">
                <div class="sectionTitle mb-3 mb-lg-5 mt-lg-4" style="text-align: center; width: 100%;">Get In Touch</div>
            </div>
            <div class="row">
                <div class="col-lg-4 mt-3 mt-lg-0">
                    <input type="text" placeholder="Your Name" required>
                </div>
                <div class="col-lg-4 mt-3 mt-lg-0">
                    <input type="text" placeholder="Your Email" required>
                </div>
                <div class="col-lg-4 mt-3 mt-lg-0">
                    <input type="text" placeholder="Subject" required>
                </div>
                <div class="col-lg-12 mt-4">
                    <textarea placeholder="Message" style="height: 100px;"></textarea>
                    <div class="text-center mt-4">
                        <button class="mainBtn">SUBMIT</button>
                    </div>
                </div>
            </div>
        </form>
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
