<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Zyp</title>
    <?php wp_head(); ?>
  </head>
  <body>
    <!-- ==========
    ===============        
        NAVBAR
    ===============        
     ===========-->
    <header class="navBar" id="nav_bar">
      <!-- logo -->
      <div class="navLogo">
        <a href="index.html" class="btnLink">ZYP</a>
      </div>
      <!--  -->

       <!-- hamburger icon -->
      <div class="d-md-none menuIcon" id="menu_icon">
        <img
          src="<?php echo get_template_directory_uri(); ?>/images/icon_menu.svg"
          onclick="document.getElementById('mobileSideNav').style.display='flex';
          document.getElementById('menu_icon').style.display='none'"
        />
      </div>
      <!--  -->

      <!-- pc and tablet menu -->
      <nav class="navMenu d-none d-md-flex">
       <?php 
          wp_nav_menu(
              array(
                  'theme_location' => 'top-menu',
                  'walker' => new wp_bootstrap_navwalker()
              )
          );
        ?>
      </nav>
      <!--  -->

      <!-- MOBILE MENU -->
      <div class="mobileSideNav" id="mobileSideNav">
        <nav class="navMenuMobile d-lg-none shadow-lg" id="navMenuMobile">

          <!-- close button -->
          <ul>
            <li class="closeBtn">
              <img
                src="<?php echo get_template_directory_uri(); ?>/images/icon_close.svg"
                onclick="document.getElementById('mobileSideNav').style.display='none';
                document.getElementById('menu_icon').style.display='flex'"
              />
            </li>
          </ul>
          <!--  -->

          <!-- menu -->
          <?php 
            wp_nav_menu(
            array(
                'theme_location' => 'top-menu',
                'walker' => new wp_bootstrap_navwalker()
            )
            );
          ?>
        </nav>
        <!--  -->

      </div>

    </header>