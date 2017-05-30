<?php
/*Customize portafolio */
add_action( 'customize_register', 'dicaracx_portafolio_section');

function dicaracx_portafolio_section($wp_cutomize){

$wp_cutomize->add_section('dicaracx_portafolio_zone_section',array(
      
      'title'      => __('Portafolio Section','dicaracx'),
      'description'=> __('Manager your layout of portafolio'),
      'panel'      =>'dicarax_frontpage_display',
      'priority'   => 26,
      'active_callback' => 'is_front_page',

 ));

// Show the portafolio option
$wp_cutomize->add_setting('dicaracx_option_portafolio_obtion_setting',array(
   
   'default'   => "yes",
   'transport' => 'refresh',
  
));


$wp_cutomize->add_control(new WP_Customize_Control($wp_cutomize,'dicaracx_option_portafolio_control',array(
     
     'label'   =>__('Color of the text','dicaracx'),
     'type'    =>'radio',
     'choices' => array('yes'=>'Yes', 'no'=>'No'),
     'section' => 'dicaracx_portafolio_zone_section',
     'settings'=> 'dicaracx_option_portafolio_obtion_setting',
)));

// color of bg of the portafolio
$wp_cutomize->add_setting('dicaracx_color_bg_portafolio_setting',array(
   
   'default'   => "#eee",
   'transport' => 'refresh',
  
));


$wp_cutomize->add_control(new WP_Customize_Color_Control($wp_cutomize,'dicaracx_color_bg_portafolio_control',array(
     
     'label'   =>__('Color You footer','dicaracx'),
     'section' => 'dicaracx_portafolio_zone_section',
     'settings'=> 'dicaracx_color_bg_portafolio_setting',
)));

// color of bg hover img
$wp_cutomize->add_setting('dicaracx_color_bg_hover_img_setting',array(
   
   'default'   => "#757575",
   'transport' => 'refresh',
  
));


$wp_cutomize->add_control(new WP_Customize_Color_Control($wp_cutomize,'dicaracx_color_bg_img_portafolio_control',array(
     
     'label'   =>__('Color of images hover','dicaracx'),
     'section' => 'dicaracx_portafolio_zone_section',
     'settings'=> 'dicaracx_color_bg_hover_img_setting',
)));


// color of title portafolio
$wp_cutomize->add_setting('dicaracx_color_title_portafolio_setting',array(
   
   'default'   => "#151515",
   'transport' => 'refresh',
  
));


$wp_cutomize->add_control(new WP_Customize_Color_Control($wp_cutomize,'dicaracx_color_title_portafolio_control',array(
     
     'label'   =>__('Color You title','dicaracx'),
     'section' => 'dicaracx_portafolio_zone_section',
     'settings'=> 'dicaracx_color_title_portafolio_setting',
)));

// color of the text portafolio
$wp_cutomize->add_setting('dicaracx_color_text_portafolio_setting',array(
   
   'default'   => "#151515",
   'transport' => 'refresh',
  
));


$wp_cutomize->add_control(new WP_Customize_Color_Control($wp_cutomize,'dicaracx_color_text_portafolio_control',array(
     
     'label'   =>__('Color You text','dicaracx'),
     'section' => 'dicaracx_portafolio_zone_section',
     'settings'=> 'dicaracx_color_text_portafolio_setting',
)));


$wp_cutomize->add_setting('dicaracx_how_many_portafolio_setting',array(

  'default' => '3',
  'transport' => 'refresh',
  
));


$wp_cutomize->add_control(new WP_Customize_Control($wp_cutomize,'dicaracx_select_how_many_portafolio_control',array(
     
     'label'   =>__('How many Portafolio you need to show','dicaracx'),
     'section' => 'dicaracx_portafolio_zone_section',
     'settings'=> 'dicaracx_how_many_portafolio_setting',
     'type'    => 'radio',
     'choices' => array(
          '3' => '3',
          '4' => '4',
          '8' => '8',
        ),
)));


$wp_cutomize->add_setting('dicaracx_color_of_btn_setting',array(

  'default' => 'waves-effect waves-light btn blue-grey lighten-2',
  'transport' => 'refresh',
  
));


$wp_cutomize->add_control(new WP_Customize_Control($wp_cutomize,'dicaracx_select_color_btn_control',array(
     
     'label'   =>__('Color of the button','dicaracx'),
     'section' => 'dicaracx_portafolio_zone_section',
     'settings'=> 'dicaracx_color_of_btn_setting',
     'type'    => 'radio',
     'choices' => array(
          'waves-effect waves-light btn blue-grey lighten-2' =>  'Default',
          'waves-effect waves-light btn green accent-3' => 'Primary',
          'waves-effect waves-light btn deep-orange darken-3' => 'Danger',
          'waves-effect waves-light btn amber darken-3'       => 'Warning',
          'waves-effect waves-light btn  light-blue accent-3' =>  'Info',
          'waves-effect waves-light btn  light-green darken-3' =>  'Success',
        ),
)));

}

function dicaracx_function_style_portafolio(){
 ?> 
  <style type="text/css">
       
  .portafolio-section {
    background-color:<?php echo  get_theme_mod('dicaracx_color_bg_portafolio_setting','#eee'); ?>;
}

.portafolio-section h2,h3,h4 {
    color: <?php echo get_theme_mod('dicaracx_color_title_portafolio_setting','#151515'); ?>;
}

.progress-title {
    color: <?php echo get_theme_mod('dicaracx_color_title_portafolio_setting','#151515'); ?>!important;
}

.portafolio-section p {
   color: <?php echo get_theme_mod('dicaracx_color_text_portafolio_setting','#151515'); ?>;
}

[class*=' imghvr-'] figcaption, [class^=imghvr-] figcaption {
    background-color: <?php echo get_theme_mod('dicaracx_color_bg_hover_img_setting','#757575'); ?> !important;
}

 </style>

<?php
}

add_action('wp_head','dicaracx_function_style_portafolio');
?>
