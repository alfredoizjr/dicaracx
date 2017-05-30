<?php

/*Customize google api map*/
add_action( 'customize_register', 'dicaracx_map_api_google');

function dicaracx_map_api_google($wp_cutomize){

$wp_cutomize->add_section('dicaracx_google_map_section',array(
      
      'title'      => __('Google Map Setting','dicaracx'),
      'description'=> __('Set your address bussines wiht latitude and longitude'),
      'priority'   => 27,
      'panel'      =>'dicarax_frontpage_display',
      'active_callback' => 'is_front_page',

 ));

$wp_cutomize->add_setting('dicaracx_google_set_lon',array(
   
   'default'   => 0,
   'transport' => 'refresh',
  
));

$wp_cutomize->add_setting('dicaracx_google_set_lat',array(
   
   'default'   => 0,
   'transport' => 'refresh',
  
));

$wp_cutomize->add_control(new WP_Customize_Control($wp_cutomize,'google_control_map_dicaracx_lat',array(
     
     'label'   =>__('Latitude','dicaracx'),
     'section' => 'dicaracx_google_map_section',
     'settings'=> 'dicaracx_google_set_lat'
)));



$wp_cutomize->add_control(new WP_Customize_Control($wp_cutomize,'google_control_map_dicaracx_lon',array(
     
     'label'   =>__('Longitude','dicaracx'),
     'section' => 'dicaracx_google_map_section',
     'settings'=> 'dicaracx_google_set_lon'
)));

$wp_cutomize->add_setting('dicaracx_display_map',array(

  'default' => 'no',
  'transport' => 'refresh',
  
));


$wp_cutomize->add_control(new WP_Customize_Control($wp_cutomize,'dicaracx_display_map_control',array(
     
     'label'   =>__('Display the google map','dicaracx'),
     'section' => 'dicaracx_google_map_section',
     'settings'=> 'dicaracx_display_map',
     'type'    => 'radio',
     'choices' => array(
          'yes' => 'Yes',
          'no' => 'No',
        ),
)));

}




?>