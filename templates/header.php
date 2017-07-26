    <a href="#" class="menu-btn">
    	<span id="one"></span>
    	<span id="two"></span>
    	<span id="three"></span>
    </a>
    <a href="<?php echo get_site_url(); ?>" class="fixed-logo"><img src="/wp-content/uploads/2017/07/white-logo.png" class="img-fluid"></a>
<header class="banner">
  <div class="container">
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
  </div>
</header>
