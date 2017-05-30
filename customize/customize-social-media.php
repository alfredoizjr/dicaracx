<?php

  add_action( 'customize_register', 'dicaracx_social_media' );

  function dicaracx_social_media($wp_customize){
     

     $wp_customize->add_section('dicaracx_sm_section',array(
          'title'    => 'Social Media',
          'priority' => 30, 
     ));

   // display this section
     $wp_customize->add_setting('display_social_media_option',array(
         
         'default'   => 'no',
         'transport' => 'refresh',
    ));


    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'display_sm_control_obtion',array(
       
       'label'    => __('Social media Display','dicaracx'),
       'section'  => 'dicaracx_sm_section',
       'settings' => 'display_social_media_option',
       'type'     => 'radio',
       'choices'  =>array(
                
             'yes' => 'yes',
             'no'  => 'No',
       	),
   )));

// facebook 

   $wp_customize->add_setting('setting_social_facebook',array(
     
     'defaul' =>'',
     'transport' => 'refresh',
    )); 

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'display_sm_control_facebook',array(
       
       'label'    => __('Facebook url','dicaracx'),
       'section'  => 'dicaracx_sm_section',
       'settings' => 'setting_social_facebook',
       'type'     => 'text',
   )));

// twiter

      $wp_customize->add_setting('setting_social_twiter',array(
     
     'defaul' =>'',
     'transport' => 'refresh',
    )); 

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'display_sm_control_twiter',array(
       
       'label'    => __('Twiter url','dicaracx'),
       'section'  => 'dicaracx_sm_section',
       'settings' => 'setting_social_twiter',
       'type'     => 'text',
   )));


    // twiter

      $wp_customize->add_setting('setting_social_youtube',array(
     
     'defaul' =>'',
     'transport' => 'refresh',
    )); 

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'display_sm_control_youtube',array(
       
       'label'    => __('Youtube url','dicaracx'),
       'section'  => 'dicaracx_sm_section',
       'settings' => 'setting_social_youtube',
       'type'     => 'text',
   )));

        // instagram

      $wp_customize->add_setting('setting_social_instagram',array(
     
     'defaul' =>'',
     'transport' => 'refresh',
    )); 

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'display_sm_control_instagram',array(
       
       'label'    => __('Instagram url','dicaracx'),
       'section'  => 'dicaracx_sm_section',
       'settings' => 'setting_social_instagram',
       'type'     => 'text',
   )));

       // linkinde

      $wp_customize->add_setting('setting_social_linkeding',array(
     
     'defaul' =>'',
     'transport' => 'refresh',
    )); 

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'display_sm_control_linkinde',array(
       
       'label'    => __('Linkinde url','dicaracx'),
       'section'  => 'dicaracx_sm_section',
       'settings' => 'setting_social_linkeding',
       'type'     => 'text',
   )));



       // Number phone

      $wp_customize->add_setting('setting_social_number',array(
     
     'defaul' =>'000 000-0000',
     'transport' => 'refresh',
    )); 

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'display_sm_control_number',array(
       
       'label'    => __('Number of the Phone','dicaracx'),
       'description'    => __('this number pear at the social media in the left site','dicaracx'),
       'section'  => 'dicaracx_sm_section',
       'settings' => 'setting_social_number',
       'type'     => 'text',
   )));

   // address

      $wp_customize->add_setting('setting_social_text',array(
     
     'defaul' =>'#fff',
     'transport' => 'refresh',
    )); 

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'display_sm_control_text',array(
       
       'label'    => __('Text for the address','dicaracx'),
       'section'  => 'dicaracx_sm_section',
       'settings' => 'setting_social_text',
   )));

// color

      $wp_customize->add_setting('setting_social_color',array(
     
     'defaul' =>'#fff',
     'transport' => 'refresh',
    )); 

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'display_sm_control_color',array(
       
       'label'    => __('Color','dicaracx'),
       'section'  => 'dicaracx_sm_section',
       'settings' => 'setting_social_color',
   )));





  }


  function dicaracx_style_social(){
    ?>
      
    <style>
      
      .social-media .row div a {
       color: <?php echo get_theme_mod('setting_social_color','#fff'); ?>!important;
    }

     .social-media p {
       color: <?php echo get_theme_mod('setting_social_color','#fff'); ?>!important;
    }


    </style>

    <?php
  }

  add_action('wp_head','dicaracx_style_social');


?>