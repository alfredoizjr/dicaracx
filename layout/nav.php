
<?php 
  if(is_front_page()){
   if(has_nav_menu( 'header_menu')){

 ?>
<div class="menu">
 <?php
    wp_nav_menu( array(
     'theme_location' => 'header_menu',
     'container'      => 'false',
  
    ));

  ?>
</div>
<?php
    } 
  }else{
 ?>
 <div class="container">
 <div class="row">
 <div class="col m2 l3 logo-other-r">
 	<a href="<?php bloginfo('url') ?>"><img id="logo-other" class="responsive-img" src="<?php echo  wp_get_attachment_url(get_theme_mod( 'dicaracx_images_banner_logo_company' )); ?>" alt=""></a>
 </div>
  <div class="col m10 l9 menu-other-r">	
   <div class="menu-other">
   	  
   <?php
    wp_nav_menu( array(
     'theme_location' => 'header_menu',
     'container'      => 'false',
     'menu_class'     => 'menu-container',
     'menu_id'        => 'menu-container'
  
    ));

  ?>

   </div>
   </div>
 </div>
 </div>  
<?php
 }
?>
