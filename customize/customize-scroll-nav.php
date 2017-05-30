<?php

$wp_customize->add_section('nav_scroll_section_scroll',array(

		'title' => __('Nav scroll','dicaracx'),
		'priority' => 40,
        'panel'    => 'company_setting_header',
   ));

// nav scroll color

$wp_customize->add_setting('dicaracx_color_of_navscroll',array(
   
    'default' => '#fff',
    'transpor' => 'refresh',

 ));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'dicarcax_color_nav_on_scroll',array(
     
      'label' => __('Color of the nav'),
      'section'=> 'nav_scroll_section_scroll',
      'settings' => 'dicaracx_color_of_navscroll',
)));


// nav a cvolors


$wp_customize->add_setting('dicaracx_color_of_navscroll_alinks',array(
   
    'default' => '#555',
    'transpor' => 'refresh',

 ));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'dicarcax_color_nav_on_scroll_alinks',array(
     
      'label' => __('Color of the nav'),
      'section'=> 'nav_scroll_section_scroll',
      'settings' => 'dicaracx_color_of_navscroll_alinks',
)));


?>