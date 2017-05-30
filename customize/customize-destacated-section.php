<?php

 add_action( 'customize_register','dicaracx_destacted_zone' );

 function dicaracx_destacted_zone($wp_customize){
   
    $wp_customize->add_section('dicaracx_section_destacated',array(
      'title'      => __('Destacated Section','dicaracx'),
      'description'=> __('Destacted section display'),
      'priority'   => 25,
      'panel'      =>'dicarax_frontpage_display',
      'active_callback' => 'is_front_page',
  
    ));

    $wp_customize->add_setting('dicaracx_destacted_display_obtion',array(
    
       'default' => 'yes',
       'transport' => 'refresh', 
   ));

       $wp_customize->add_control(new WP_Customize_Control($wp_customize,'dicaracx_detscated_control_display',array(

      'description' => __('<blockquote><b> Optional display for this Section </b></blockquote>','dicaracx'),
      'settings' =>'dicaracx_destacted_display_obtion',
      'section'  =>'dicaracx_section_destacated',
      'type'    => 'radio',
      'choices' => array(
          'yes' => 'Yes',
          'no'  =>  'no',
      ),

   )));

  
  // color of bg

  $wp_customize->add_setting('dicaracx_destacted_display_bg_color',array(
     
       'default'   => '#fff',
       'transport' => 'refresh'
  ));
    
 $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'dicaracx_detscated_control_bg_color',array(
   
    'label' => __('color of the background','dicaracx'),
    'section' => 'dicaracx_section_destacated',
    'settings'=> 'dicaracx_destacted_display_bg_color',


  )));


// text color
  $wp_customize->add_setting('dicaracx_destacted_display_text_color',array(
     
       'default'   => '#555',
       'transport' => 'refresh'
  ));
    
 $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'dicaracx_detscated_control_color_text',array(
   
    'label' => __('color of the text','dicaracx'),
    'section' => 'dicaracx_section_destacated',
    'settings'=> 'dicaracx_destacted_display_text_color',


  )));

 


// image
$wp_customize->add_setting('dicaracx_destacated_section_img_setting',array(
     'default'   =>  get_template_directory_uri().'/assets/img/stock-photo-portrait-of-business-woman-isolated-on-white-background-82664272.jpg',
     'transport' =>'refresh',   
));



 $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize,'dicaracx_destacated_section_img_control',array(
          'label'   => __('Image','dicaracx'),
          'description'=>__('This image is recomend 500 x 500 of size be sure set Display image to yes','dicaracx'),
          'section' => 'dicaracx_section_destacated',
          'settings'=> 'dicaracx_destacated_section_img_setting',
          'width'   =>  600,
          'height'  =>  600,
         
   )));

 // diplay the image

    $wp_customize->add_setting('dicaracx_destacted_display_obtion_img',array(
    
       'default' => 'no',
       'transport' => 'refresh', 
   ));



    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'dicaracx_detscated_control_display_img',array(

      'description' => __('Display the image','dicaracx'),
      'settings' =>'dicaracx_destacted_display_obtion_img',
      'section'  =>'dicaracx_section_destacated',
      'type'    => 'radio',
      'choices' => array(
          'yes' => 'Yes',
          'no'  =>  'no',
      ),

   )));
  
  // first informatio pear display obtion

     $wp_customize->add_setting('dicaracx_firstinfo_display_obtion',array(
    
       'default' => 'yes',
       'transport' => 'refresh', 
   ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'dicaracx_firstinfo_display_obtion_control',array(

      'label'     =>__('Display this Information','dicaracx'),
      'description' => __('this pear inside destacate section as a first information <hr>','dicaracx'),
      'settings' =>'dicaracx_firstinfo_display_obtion',
      'section'  =>'dicaracx_section_destacated',
      'type'    => 'radio',
      'choices' => array(
          'yes' => 'Yes',
          'no'  =>  'no',
      ),


   )));   

// fist title pear at the section 
$wp_customize->add_setting('dicaracx_title_one_detacated',array(
         
         'default'   => 'Your title here',
         'transport' => 'refresh',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize,'dicaracx_title_one_detacated_control',array(
    
     'label'    => __('The first title ','dicaracx'),
     'settings' => 'dicaracx_title_one_detacated',
     'section'  => 'dicaracx_section_destacated',
     'type'     => 'text',

  ))); 
// fist p pear at the section 
  $wp_customize->add_setting('dicaracx_p_one_detacated',array(
         
         'default'   => 'Your text here',
         'transport' => 'refresh',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize,'dicaracx_p_one_detacated_control',array(
    
     'label'    => __('The text ','dicaracx'),
     'settings' => 'dicaracx_p_one_detacated',
     'section'  => 'dicaracx_section_destacated',
     'type'     => 'textarea',

  )));   

 

 // porgress section


$wp_customize->add_setting('dicaracx_progress_display_obtion',array(
    
       'default' => 'yes',
       'transport' => 'refresh', 
   ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'dicaracx_progress_display_obtion_control',array(

      'label'     =>__('Display this Information','dicaracx'),
      'description' => __('this pear inside destacate section the progress <hr>','dicaracx'),
      'settings' =>'dicaracx_progress_display_obtion',
      'section'  =>'dicaracx_section_destacated',
      'type'    => 'radio',
      'choices' => array(
          'yes' => 'Yes',
          'no'  =>  'no',
      ),


   )));

// how many progress circle you going to use
$wp_customize->add_setting('dicaracx_progress_display_howmany_obtion',array(
    
       'default' => '3',
       'transport' => 'refresh', 
   ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'dicaracx_progress_howmany_obtion_control',array(

      'label'     =>__('Display progress cricle','dicaracx'),
      'description' => __('How many circle progress you need <hr>','dicaracx'),
      'settings' =>'dicaracx_progress_display_howmany_obtion',
      'section'  =>'dicaracx_section_destacated',
      'type'    => 'radio',
      'choices' => array(
          '1' => '1',
          '2' =>'2',
          '3' => '3',
      ),


   )));





   // progress title pear at the section 
$wp_customize->add_setting('dicaracx_title_progress_detacated',array(
         
         'default'   => 'Your title for progress area',
         'transport' => 'refresh',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize,'dicaracx_title_progress_detacated_control',array(
    
      'label'    => __('The title in the porgress panel','dicaracx'),
     'settings' => 'dicaracx_title_progress_detacated',
     'section'  => 'dicaracx_section_destacated',
     'type'     => 'text',

  )));

     // progress circle one text
$wp_customize->add_setting('dicaracx_cricleonetext_progress_detacated',array(
         
         'default'   => 'Your progress in',
         'transport' => 'refresh',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize,'dicaracx_cricleonetext_progress_detacated_control',array(
    
     'label'    => __('Cricle Progress # 1 text','dicaracx'),
     'settings' => 'dicaracx_cricleonetext_progress_detacated',
     'section'  => 'dicaracx_section_destacated',
     'type'     => 'text',

  )));  

   // progress circle one % 
$wp_customize->add_setting('dicaracx_cricleone_progress_detacated',array(
         
         'default'   => '60',
         'transport' => 'refresh',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize,'dicaracx_cricleone_progress_detacated_control',array(
    
     'label'    => __('Cricle Progress # 1 numbre of %','dicaracx'),
     'settings' => 'dicaracx_cricleone_progress_detacated',
     'section'  => 'dicaracx_section_destacated',
     'type'     => 'text',

  ))); 

       // progress circle two text
$wp_customize->add_setting('dicaracx_cricletwotext_progress_detacated',array(
         
         'default'   => 'Your progress in',
         'transport' => 'refresh',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize,'dicaracx_cricletwotext_progress_detacated_control',array(
    
     'label'    => __('Cricle Progress # 2 text','dicaracx'),
     'settings' => 'dicaracx_cricletwotext_progress_detacated',
     'section'  => 'dicaracx_section_destacated',
     'type'     => 'text',

  )));  

   // progress circle two % 
$wp_customize->add_setting('dicaracx_cricletwo_progress_detacated',array(
         
         'default'   => '70',
         'transport' => 'refresh',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize,'dicaracx_cricletwo_progress_detacated_control',array(
    
     'label'    => __('Cricle Progress # 2 numbre of %','dicaracx'),
     'settings' => 'dicaracx_cricletwo_progress_detacated',
     'section'  => 'dicaracx_section_destacated',
     'type'     => 'text',

  ))); 

// progress circle three text
$wp_customize->add_setting('dicaracx_criclethreetext_progress_detacated',array(
         
         'default'   => 'Your progress in',
         'transport' => 'refresh',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize,'dicaracx_criclethreetext_progress_detacated_control',array(
    
     'label'    => __('Cricle Progress # 3 text','dicaracx'),
     'settings' => 'dicaracx_criclethreetext_progress_detacated',
     'section'  => 'dicaracx_section_destacated',
     'type'     => 'text',

  )));  

   // progress circle three % 
$wp_customize->add_setting('dicaracx_criclethree_progress_detacated',array(
         
         'default'   => '80',
         'transport' => 'refresh',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize,'dicaracx_criclethree_progress_detacated_control',array(
    
     'label'    => __('Cricle Progress # 3 numbre of %','dicaracx'),
     'settings' => 'dicaracx_criclethree_progress_detacated',
     'section'  => 'dicaracx_section_destacated',
     'type'     => 'text',

  )));     

  }

// style setting
 function dicaracx_function_style_destacated(){
 ?> 
  <style type="text/css">
       
  .destacated-r {
    background-color: <?php echo get_theme_mod('dicaracx_destacted_display_bg_color','#fff'); ?>;
    color: <?php echo  get_theme_mod('dicaracx_destacted_display_text_color','#555'); ?>;
}

 </style>

<?php
}

add_action('wp_head','dicaracx_function_style_destacated');

?>