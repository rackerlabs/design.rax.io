<?php
  $menu_defaults = array(
    'theme_location' => 'primary_navigation',
    'menu_class' => 'nav navbar-nav'
  )
?>

<header class="banner">
  <nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand red-brand" href="<?= esc_url(home_url('/')); ?>">
          <span>RED</span>
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu($menu_defaults);
        endif;
        ?>
        
        <ul class="nav navbar-nav navbar-right">
          <li><a href="/wp-admin">Log in</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-->
  </nav>
   <div class="container">
    
    <nav class="nav-primary">

    </nav>
  </div>
</header>
