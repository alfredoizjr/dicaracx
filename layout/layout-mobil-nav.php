  <?php
    wp_nav_menu( array(
     'theme_location' => 'header_menu',
     'container'      => 'false',
     'menu_class'     => 'side-nav', 
     'menu_id'        =>'slide-out',
     'depth'          => 1,
  
    ));

  ?>

 <a href="#" id="btn-mov" data-activates="slide-out" class="button-collapse btn-floating btn-large waves-effect waves-light grey darken-2 pulse btn-small"><i class="material-icons">menu</i></a>