<div class="menu-onscroll z-depth-1">
<div class="row">
<div class="col m1 l2"></div>
	<div class="col  m1  l3 left-right responsive-img">
		<img src="<?php echo  wp_get_attachment_url(get_theme_mod( 'dicaracx_images_banner_logo_company' )); ?>" alt="">
	</div>
	<div class="col m10 l6">
	<?php
     wp_nav_menu( array(
     'theme_location' => 'header_menu',
     'container'      =>'false',
     
    ));

  ?>
	</div>
</div>
</div>