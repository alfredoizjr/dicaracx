<?php

get_header();

 /*-------------HEADER SECTION---------------*/
 require_once get_template_directory().'/layout/layout-header-main-parallax.php'; 

 /*
 /* SECTION OF THE THEME IS OPTIONAL DISPLAY THEM
 */
 
 require_once get_template_directory().'/layout/layout-service-section.php'; 

  if(get_theme_mod('dicaracx_destacted_display_obtion','yes') == 'yes'){
   require_once get_template_directory().'/layout/layout-destacte-section.php';
}


if(get_theme_mod( 'dicaracx_marketing_display_obtion','no' ) == 'yes'){
  require_once get_template_directory().'/layout/layout-marketing-section.php'; 
}
    if(get_theme_mod('dicaracx_option_portafolio_obtion_setting','yes') == 'yes'){
     require_once get_template_directory().'/layout/layout-portafolio-section.php';
    }
   
   

  if(get_theme_mod('dicaracx_display_map','no') == 'yes'){
    require_once get_template_directory().'/layout/layout-google-map.php'; 
  }
    get_footer();
 ?>
