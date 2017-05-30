<?php

  add_action( 'customize_register', 'dicaracx_nav_rest_pages' );

  function dicaracx_nav_rest_pages($wp_customize){
     
  $wp_customize->add_section('dicaracx_nav_other_pages',array(

    'title' =>__('Nav of the pages'),
    'priority' => 30,
    'active_callback' => 'is_rest_pages'

  ));

// color a

$wp_customize->add_setting('nav_other_color',array(
     
     'default' =>'#555',
     'transport' => 'refresh',
    )); 

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'display_sm_control_color',array(
       
       'label'    => __('Color','dicaracx'),
       'section'  => 'dicaracx_nav_other_pages',
       'settings' => 'nav_other_color',
   )));


// color a:hover

$wp_customize->add_setting('nav_other_color_submenu_li_hover_a',array(
     
     'default' =>'#555',
     'transport' => 'refresh',
    )); 

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'display_sm_color_hover_li_a',array(
       
       'label'    => __('Color links hover ','dicaracx'),
       'section'  => 'dicaracx_nav_other_pages',
       'settings' => 'nav_other_color_submenu_li_hover_a',
   )));



// color of the sub menu block

$wp_customize->add_setting('nav_other_color_submenu',array(
     
     'default' =>'#e0e0e0',
     'transport' => 'refresh',
    )); 

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'display_sm_control_color_sub_menu',array(
       
       'label'    => __('Color block of sub menu ','dicaracx'),
       'section'  => 'dicaracx_nav_other_pages',
       'settings' => 'nav_other_color_submenu',
   )));

// color of the sub menu block li hover

$wp_customize->add_setting('nav_other_color_submenu_li_hover',array(
     
     'default' =>'#f1f1f1',
     'transport' => 'refresh',
    )); 

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'display_sm_color_hover_li',array(
       
       'label'    => __('Color of sub menu hovers ','dicaracx'),
       'section'  => 'dicaracx_nav_other_pages',
       'settings' => 'nav_other_color_submenu_li_hover',
   )));

}



// callback fuctions for show this feactured only in rest of pages
// and not at the front pages

function is_rest_pages(){

  $page = is_front_page();
  var_dump(is_front_page());
    if($page){
      return false;
    }else{
      return true;
    }
}


  function dicaracx_style_nav_other(){
    ?>
      
<style>
        
    div .menu-other li a {
   
       color: <?php echo get_theme_mod('nav_other_color','#555');?>;
    }

.menu-other li > ul > li {
    background: <?php echo get_theme_mod('nav_other_color_submenu','#e0e0e0');?>;
} 

.menu-other li:hover > ul li:hover > a{
    background: <?php echo get_theme_mod('nav_other_color_submenu_li_hover','#f1f1f1');?>;
} 

div .menu-other li:hover > a {
    border-bottom: 5px solid <?php echo get_theme_mod('nav_other_color_submenu_li_hover_a','#555'); ?>;
    color:<?php echo get_theme_mod('nav_other_color_submenu_li_hover_a','#555'); ?>;
}

 </style>

    <?php
  }

  add_action('wp_head','dicaracx_style_nav_other');


?>