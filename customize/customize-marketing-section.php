<?php

/*Service panel*/


 add_action( 'customize_register','dicaracx_marketing_zone' );

 function dicaracx_marketing_zone($wp_customize){
   
    $wp_customize->add_section('dicaracx_section_marketing',array(
      'title'      => __('Extra Section','dicaracx'),
      'description'=> __('Extra section display'),
      'priority'   => 29,
      'panel'      =>'dicarax_frontpage_display',
      'active_callback' => 'is_front_page',
  
    ));

    $wp_customize->add_setting('dicaracx_marketing_display_obtion',array(
    
       'default' => 'yes',
       'transport' => 'refresh', 
   ));

       $wp_customize->add_control(new WP_Customize_Control($wp_customize,'dicaracx_marketing_control_display',array(

      'description' => __('Display this section','dicaracx'),
      'settings' =>'dicaracx_marketing_display_obtion',
      'section'  =>'dicaracx_section_marketing',
      'type'    => 'radio',
      'choices' => array(
          'yes' => 'Yes',
          'no'  =>  'no',
      ),

   )));

  
  // color of bg

  $wp_customize->add_setting('dicaracx_marketing_display_bg_color',array(
     
       'default'   => '#e0e0e0',
       'transport' => 'refresh'
  ));
    
 $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'dicaracx_marketing_control_bg_color',array(
   
    'label' => __('color of the background','dicaracx'),
    'section'  =>'dicaracx_section_marketing',
    'settings'=> 'dicaracx_marketing_display_bg_color',


  )));
 


// image
$wp_customize->add_setting('dicaracx_marketing_section_img_setting',array(
     'default'   =>  get_template_directory_uri().'/assets/img/stock-photo-portrait-of-business-woman-isolated-on-white-background-82664272.jpg',
     'transport' =>'refresh',   
));



 $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize,'dicaracx_marketing_section_img_control',array(
          'label'   => __('Image','dicaracx'),
          'description'=>__('This image is recomend 500 x 500 of size be sure set Display image to yes','dicaracx'),
          'section' => 'dicaracx_section_marketing',
          'settings'=> 'dicaracx_marketing_section_img_setting',
          'width'   =>  700,
          'height'  =>  700,
        
   )));

 // title

 $wp_customize->add_setting('dicaracx_marketing_section_title_setting',array(
     'default'   =>  'Your title here',
     'transport' =>'refresh',   
));

  $wp_customize->add_control( new WP_Customize_Control($wp_customize,'dicaracx_marketing_section_title_control',array(
          'label'   => __('Title','dicaracx'),
          'description'=>__('Title of the section','dicaracx'),
          'section' => 'dicaracx_section_marketing',
          'settings'=> 'dicaracx_marketing_section_title_setting',
          'type'    => 'text',
        
   )));

   // color  title

 $wp_customize->add_setting('dicaracx_marketing_color',array(
            
          'default'   =>'#555',
          'transport' => 'refresh',  
 ));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'dicaracx_color_title_pick',array(
      'label'   =>__('Title Color','dicaracx'),
      'section' => 'dicaracx_section_marketing',
      'settings' =>'dicaracx_marketing_color',
   
 )));

   // paragrahp

 $wp_customize->add_setting('dicaracx_marketing_section_paragrahp_setting',array(
     'default'   =>  'Your text here for this section',
     'transport' =>'refresh',   
));

  $wp_customize->add_control( new WP_Customize_Control($wp_customize,'dicaracx_marketing_section_paragrahp_control',array(
          'label'   => __('Text','dicaracx'),
          'description'=>__('text of the section','dicaracx'),
          'section' => 'dicaracx_section_marketing',
          'settings'=> 'dicaracx_marketing_section_paragrahp_setting',
          'type'    => 'textarea',
        
   )));

     // color  paragrahp


 $wp_customize->add_setting('dicaracx_marketing_color_paragraph_setting',array(
            
          'default'   =>'#555',
          'transport' => 'refresh',  
 ));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'dicaracx_color_text_marketing_pick',array(
      'label'   =>__('Text Color','dicaracx'),
      'section' => 'dicaracx_section_marketing',
      'settings' =>'dicaracx_marketing_color_paragraph_setting',
   
 )));

//btn #1

$wp_customize->add_setting('dicaracx_color_marketing_btn_one',array(
  
    'default'    =>'waves-effect waves-light btn  light-blue accent-3',
     'transport' =>'refresh' 

));

$wp_customize->add_control(new WP_Customize_Control($wp_customize,'dicaracx_color_btnone_marketing_pick',array(
      'label'   =>__('Bottom #1 color','dicaracx'),
      'section' => 'dicaracx_section_marketing',
      'settings'=>'dicaracx_color_marketing_btn_one',
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


 $wp_customize->add_setting('dicaracx_marketing_btnone_text_setting',array(
     'default'   =>  'Let start it',
     'transport' =>'refresh',   
));

  $wp_customize->add_control( new WP_Customize_Control($wp_customize,'dicaracx_marketing_section_textone_control',array(
          'label'   => __('text in botton #1','dicaracx'),
          'section' => 'dicaracx_section_marketing',
          'settings'=> 'dicaracx_marketing_btnone_text_setting',
          'type'    => 'text',
        
   )));

  // url 1 
  $wp_customize->add_setting('dicaracx_marketing_extratwo_url_one',array(
            
          'default'   =>'http://www.your-url-here',
          'transport' => 'refresh',  
 ));

$wp_customize->add_control(new WP_Customize_Control($wp_customize,'dicaracx_url_text_btnone_control',array(
      'label'   =>__('Url for the button #2','dicaracx'),
      'section' => 'dicaracx_section_marketing',
      'settings' =>'dicaracx_marketing_extratwo_url_one',
      'type'    => 'text',
)));



  //btn #2

$wp_customize->add_setting('dicaracx_color_marketing_btn_two',array(
  
    'default'    =>'waves-effect waves-light btn blue-grey lighten-2',
     'transport' =>'refresh' 

));

$wp_customize->add_control(new WP_Customize_Control($wp_customize,'dicaracx_color_btntwo_marketing_pick',array(
      'label'   =>__('Bottom #2 color','dicaracx'),
      'section' => 'dicaracx_section_marketing',
      'settings'=>'dicaracx_color_marketing_btn_two',
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


 $wp_customize->add_setting('dicaracx_marketing_btntwo_text_setting',array(
     'default'   =>  'Contant us now',
     'transport' =>'refresh',   
));

  $wp_customize->add_control( new WP_Customize_Control($wp_customize,'dicaracx_marketing_section_texttwo_control',array(
          'label'   => __('text in botton #2','dicaracx'),
          'section' => 'dicaracx_section_marketing',
          'settings'=> 'dicaracx_marketing_btntwo_text_setting',
          'type'    => 'text',
        
   )));


    // url 2 
  $wp_customize->add_setting('dicaracx_marketing_extratwo_url_two',array(
            
          'default'   =>'http://www.your-url-here',
          'transport' => 'refresh',  
 ));

$wp_customize->add_control(new WP_Customize_Control($wp_customize,'dicaracx_url_text_btntwo_control',array(
      'label'   =>__('Url for the button #2','dicaracx'),
      'section' => 'dicaracx_section_marketing',
      'settings' =>'dicaracx_marketing_extratwo_url_two',
      'type'    => 'text',
)));



}




  // style setting
 function dicaracx_function_style_marketing(){
 ?> 
  <style type="text/css">
       
    .marketing {
    background-color: <?php echo get_theme_mod('dicaracx_marketing_display_bg_color','#e0e0e0'); ?>;
}

.marketing-content h2 {
    color: <?php echo get_theme_mod('dicaracx_marketing_color','#555'); ?>;
}

.marketing-content p {
    color: <?php echo get_theme_mod('dicaracx_marketing_color_paragraph_setting','#555'); ?>;
}

 </style>

<?php
}

add_action('wp_head','dicaracx_function_style_marketing');


?>