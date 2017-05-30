<?php

/*Customize google api map*/
add_action( 'customize_register', 'dicaracx_footer_section');

function dicaracx_footer_section($wp_cutomize){

$wp_cutomize->add_section('dicaracx_footer_zone_section',array(
      
      'title'      => __('Footer Section','dicaracx'),
      'description'=> __('Set up your footer section here'),
      'priority'   => 26,

 ));

// color of bg of the footer
$wp_cutomize->add_setting('dicaracx_color_footer_section',array(
   
   'default'   => "#555",
   'transport' => 'refresh',
  
));


$wp_cutomize->add_control(new WP_Customize_Color_Control($wp_cutomize,'dicaracx_color_footer_control',array(
     
     'label'   =>__('Color You footer','dicaracx'),
     'section' => 'dicaracx_footer_zone_section',
     'settings'=> 'dicaracx_color_footer_section',
)));

// color border of the footer
$wp_cutomize->add_setting('dicaracx_color_footer_border_section',array(
   
   'default'   => "#81d742",
   'transport' => 'refresh',
  
));


$wp_cutomize->add_control(new WP_Customize_Color_Control($wp_cutomize,'dicaracx_color_border_footer_control',array(
     
     'label'   =>__('Color border top of footer','dicaracx'),
     'section' => 'dicaracx_footer_zone_section',
     'settings'=> 'dicaracx_color_footer_border_section',
)));

// color of the links
$wp_cutomize->add_setting('dicaracx_color_footer_links_setting',array(
   
   'default'   => "#fff",
   'transport' => 'refresh',
  
));


$wp_cutomize->add_control(new WP_Customize_Color_Control($wp_cutomize,'dicaracx_color_links_footer_control',array(
     
     'label'   =>__('Color of the links','dicaracx'),
     'section' => 'dicaracx_footer_zone_section',
     'settings'=> 'dicaracx_color_footer_links_setting',
)));

// color of the links hover
$wp_cutomize->add_setting('dicaracx_color_footer_linkshover_setting',array(
   
   'default'   => "#ccc",
   'transport' => 'refresh',
  
));


$wp_cutomize->add_control(new WP_Customize_Color_Control($wp_cutomize,'dicaracx_color_linkshover_footer_control',array(
     
     'label'   =>__('Color border of the links hover','dicaracx'),
     'section' => 'dicaracx_footer_zone_section',
     'settings'=> 'dicaracx_color_footer_linkshover_setting',
)));

// color of the paragraph
$wp_cutomize->add_setting('dicaracx_color_footer_paragraph_setting',array(
   
   'default'   => "#fff",
   'transport' => 'refresh',
  
));


$wp_cutomize->add_control(new WP_Customize_Color_Control($wp_cutomize,'dicaracx_color_paragraph_footer_control',array(
     
     'label'   =>__('Color of the text','dicaracx'),
     'section' => 'dicaracx_footer_zone_section',
     'settings'=> 'dicaracx_color_footer_paragraph_setting',
)));

}
function dicaracx_function_style_footer(){
 ?> 
  <style type="text/css">
       

footer {
    background-color:<?php echo  get_theme_mod('dicaracx_color_footer_section','#555'); ?>!important;
    border-top: 2px solid <?php echo  get_theme_mod('dicaracx_color_footer_border_section','#81d742'); ?>;
}


footer #footer > li > a {
    color: <?php echo  get_theme_mod('dicaracx_color_footer_links_setting','#fff'); ?>!important;
  }

footer #footer > li:hover > a {
    color: <?php echo  get_theme_mod('dicaracx_color_footer_linkshover_setting','#ccc'); ?>!important;
}

footer p{
	color:<?php echo  get_theme_mod('dicaracx_color_footer_paragraph_setting','#fff'); ?>;
}

footer h2,h3,h4,h5{
  color:<?php echo  get_theme_mod('dicaracx_color_footer_paragraph_setting','#fff'); ?>!important;
}

footer .widget-footer >ul li > a{
  color: <?php echo  get_theme_mod('dicaracx_color_footer_links_setting','#fff'); ?>!important;
}

footer .widget-footer >ul li > a:hover{
  color: <?php echo  get_theme_mod('dicaracx_color_footer_linkshover_setting','#ccc'); ?>!important;
}


 </style>

<?php
}

add_action('wp_head','dicaracx_function_style_footer');
?>