<div class="section footer">
      <div class="footerMenu">
        <div class="footerLogo"><a href="http://localhost/zyp/" class="btnLink">ZYP</a></div>
          <?php 
          wp_nav_menu(
              array(
                  'theme_location' => 'footer-menu',
                  'walker' => new wp_bootstrap_navwalker()
              )
          );
        ?>
      </div>
      <div class="footerSocial">
        <a href="#" class="social">
          <img src="<?php echo get_template_directory_uri(); ?>/images/social_instagram.svg" alt="instagram" />
        </a>
        <a href="#" class="social">
          <img src="<?php echo get_template_directory_uri(); ?>/images/social_facebook.svg" alt="facebook" />
        </a>
        <a href="#" class="social">
          <img src="<?php echo get_template_directory_uri(); ?>/images/social_twitter.svg" alt="twitter" />
        </a>
        <a href="#" class="social">
          <img src="<?php echo get_template_directory_uri(); ?>/images/social_youtube.svg" alt="YouTube" />
        </a>
      </div>
      <div class="copyright">&copy 2020 Havilah & Hills. All rights reserved</div>
  </div>
  </body>
</html>