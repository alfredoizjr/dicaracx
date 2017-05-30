<?php

 $wp_customize->add_section('dicaracx_nav_setting',array(
          
          'title'    =>__('Nav Colors','dicaracx'),
          'priority' => 20,
          'active_callback' => 'is_front_page',
          'panel'    => 'company_setting_header',


 ));
// color of nav
 $wp_customize->add_setting('dicaracx_nav_color',array(
            
          'default'   =>'#444',
          'transport' => 'refresh',  
 ));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'dicaracx_company_nav_color_setting',array(
      'label'   =>__('Color of the nav','dicaracx'),
      'section' => 'dicaracx_nav_setting',
      'settings' =>'dicaracx_nav_color',
   
 )));

// color of the link bg hover of nav
 $wp_customize->add_setting('dicaracx_nav_color_hover',array(
            
          'default'   =>'#444',
          'transport' => 'refresh',  
 ));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'dicaracx_company_nav_color_setting_hover',array(
      'label'   =>__('Color of the hovers (bg) links in the nav','dicaracx'),
      'section' => 'dicaracx_nav_setting',
      'settings' =>'dicaracx_nav_color_hover',
   
 )));

// color of the link in self
 $wp_customize->add_setting('dicaracx_nav_color_links',array(
            
          'default'   =>'#fff',
          'transport' => 'refresh',  
 ));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'dicaracx_company_nav_color_setting_links',array(
      'label'   =>__('Color of links (a)','dicaracx'),
      'section' => 'dicaracx_nav_setting',
      'settings' =>'dicaracx_nav_color_links',
   
 )));

// color of the link bg hover of nav
 $wp_customize->add_setting('dicaracx_nav_color_hover_a',array(
            
          'default'   =>'#fff',
          'transport' => 'refresh',  
 ));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'dicaracx_company_nav_color_setting_hover_a',array(
      'label'   =>__('Color of the hovers (a):hover links in the nav','dicaracx'),
      'section' => 'dicaracx_nav_setting',
      'settings' =>'dicaracx_nav_color_hover_a',
   
 )));

// color of the link bg sub menu hover of the nav
 $wp_customize->add_setting('dicaracx_nav_color_hover_bg_sub_menu',array(
            
          'default'   =>'#25252b',
          'transport' => 'refresh',  
 ));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'dicaracx_company_nav_color_setting_hover_bg_sub_menu',array(
      'label'   =>__('Color of the hovers bg:hover in the sub menu','dicaracx'),
      'section' => 'dicaracx_nav_setting',
      'settings' =>'dicaracx_nav_color_hover_bg_sub_menu',
   
 )));


