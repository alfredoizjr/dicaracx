<?php
/* ----------------------customize color of the theme-------------------------- */


// cuztomize nav



add_action( 'customize_register', 'initiate_customizer_theme');
add_action( 'customize_controls_print_footer_scripts', 'my_customizer_header_script' );

function initiate_customizer_theme($wp_customize){
  
  require_once get_template_directory() .'/customize/customize-scroll-nav.php';
  require_once get_template_directory() .'/customize/customize-van-menu.php';

  // add panel if I need it
  /*
  
    
   
   /*
     1 setting
     2 setting
     3 control


     $wp_customize->add_panel();
     $wp_customize->remove_panel();
     $wp_customize->get_panel();

     $wp_customize->add_section();
     $wp_customize->remove_section();
     $wp_customize->get_section();

     $wp_customize->add_control();
     $wp_customize->remove_control();
     $wp_customize->get_control();


     $wp_customize->add_setting();
     $wp_customize->remove_setting();
     $wp_customize->get_setting();

    */ 

     /*
     customize for defaul

     
     $wp_customize->remove_section('header_image');
     
     $wp_customize->remove_section('static_front_page');
     
*/

     //remove section default

$wp_customize->remove_section('header_image');
$wp_customize->remove_section('background_image');
$wp_customize->remove_section('custom_css');
$wp_customize->remove_section('background_image');
$wp_customize->remove_section('colors');
 
$wp_customize->add_panel('company_setting_header',array(
    'title' => __('Header setting and Nav colors'),
    'priority' => 10,
    'active_callback' => 'is_front_page',

));





 $wp_customize->add_section('dicaracx_company',array(
          
          'title'    =>__('Header setting','dicaracx'),
          'priority' => 20,
          'active_callback' => 'is_front_page',
          'panel'    => 'company_setting_header',
  ));




 // company color  title

 $wp_customize->add_setting('dicaracx_company_color',array(
            
          'default'   =>'#333',
          'transport' => 'refresh',  
 ));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'dicaracx_company_color_pick',array(
      'label'   =>__('Company Color','dicaracx'),
      'section' => 'dicaracx_company',
      'settings' =>'dicaracx_company_color',
   
 )));

// More information in the header display
$wp_customize->add_setting('dicaracx_description_extra_header',array(
     'default'   => true,
     'transport' =>'refresh',   
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize,'dicaracx_company_description_extra_option',array(
      'label'   =>__('Display the extra description','dicaracx'),
      'section' => 'dicaracx_company',
      'settings'=>'dicaracx_description_extra_header',
      'type'    => 'checkbox',  
 )));



// company paragraph
 $wp_customize->add_setting('dicaracx_company_paragraph',array(
            
          'default'   =>'Your Tagline little description about your bussines and service',
          'transport' => 'refresh',  
 ));

$wp_customize->add_control(new WP_Customize_Control($wp_customize,'dicaracx_company_text_box_paragraph',array(
      'label'   =>__('Extra Description','dicaracx'),
      'section' => 'dicaracx_company',
      'settings' =>'dicaracx_company_paragraph',
      'type'     => 'textarea',
   
 )));

 // company color  paragraph

 $wp_customize->add_setting('dicaracx_company_p_color',array(
            
          'default'   =>'#555',
          'transport' => 'refresh',  
 ));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'dicaracx_company_color_pick_p',array(
      'label'   =>__('Color Pagragraph','dicaracx'),
      'section' => 'dicaracx_company',
      'settings' =>'dicaracx_company_p_color',
   
 )));

// zise of the text
  $wp_customize -> add_setting( 'dicaracx_size_title_company', array(
                'default'           => 0,
                'transport' =>'refresh',
                'sanitize_callback' => 'mythemes_validate_number',
                'capability'        => 'edit_theme_options'
  ));
    $wp_customize -> add_control( 'mythemes-blog-logo-m-top', array(
                'label'             => __( 'text header size', 'dicaracx' ),
                'section'           => 'dicaracx_company',
                'settings'          => 'dicaracx_size_title_company',
                'type'              => 'range',
                'input_attrs'       => array(
                    'min'       => 0,
                    'max'       => 65,
                    'step'      => 1
                )
            ));


// logo or not
$wp_customize->add_setting('dicaracx_logo_company_option',array(
     'default'   => true,
     'transport' =>'refresh',   
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize,'dicaracx_company_logo_option',array(
      'label'   =>__('Show the Logo','dicaracx'),
      'section' => 'dicaracx_company',
      'settings'=>'dicaracx_logo_company_option',
      'type'    => 'checkbox',
 )));





// header image logo

$wp_customize->add_setting('dicaracx_images_banner_logo_company',array(
     'default'   =>  get_template_directory_uri().'/assets/img/ernest.png',
     'transport' =>'refresh',   
));



 $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize,'dicaracx_company_setup_logo_image',array(
          'label'   => __('Image For logo','dicaracx'),
          'default-image'  =>  get_template_directory_uri().'/assets/img/ernest.png',
          'section' => 'dicaracx_company',
          'settings'=> 'dicaracx_images_banner_logo_company',
          'description' => 'Upload a logo to replace the default site name in the header.',
          'width'   =>  300,
          'height'  =>  300,
         
   )));



// header image

$wp_customize->add_setting('dicaracx_images_banner_company',array(
     'default'   =>  get_template_directory_uri().'/assets/img/stock-photo-business-woman-in-glasses-61802074.jpg',
     'transport' =>'refresh',   
));



 $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize,'dicaracx_company_setup_image',array(
          'label'   => __('Image Banner','dicaracx'),
          'default_image'  =>  get_template_directory_uri().'/assets/img/stock-photo-business-woman-in-glasses-61802074.jpg',
          'capability'     => 'edit_theme_options',
          'section' => 'dicaracx_company',
          'settings'=> 'dicaracx_images_banner_company',
          'width'   =>  1920,
          'height'  =>  800,
         
   )));


 // color on bg image banner
$wp_customize->add_setting('dicaracx_bgcolor_on_image',array(
     'default'   => 'None',
     'transport' =>'refresh',   
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize,'dicaracx_bgcolor_on_image_control',array(
      'label'   =>__('Color on banner image','dicaracx'),
      'section' => 'dicaracx_company',
      'settings'=>'dicaracx_bgcolor_on_image',
      'type'    => 'radio',
      'choices' => array(
      '85, 85, 85, 0'     => 'None',
      '85, 85, 85, 0.41'  => 'ligth',
      '85, 85, 85, 0.62'  => 'Dark',
      '85, 85, 85, 0.83'  => 'Hard Dark',
      ),  
 )));

// Display search var
$wp_customize->add_setting('dicaracx_search_company_option_setting',array(
     'default'   => 'no',
     'transport' =>'refresh',   
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize,'dicaracx_company_search_option_control',array(
      'label'   =>__('Display Search bar','dicaracx'),
      'section' => 'dicaracx_company',
      'settings'=>'dicaracx_search_company_option_setting',
      'type'    => 'radio',
      'choices' => array(
          'yes' => 'Yes',
          'no'  => 'No',
      ),  
 )));

// Panel of in the header
$wp_customize->add_setting('dicaracx_service_panel_header',array(
     'default'   => true,
     'transport' =>'refresh',   
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize,'dicaracx_company_services_panel_option',array(
      'label'   =>__('Display panels','dicaracx'),
      'section' => 'dicaracx_company',
      'settings'=>'dicaracx_service_panel_header',
      'type'    => 'checkbox',
 )));


// panels style display 
$wp_customize->add_setting('dicaracx_panel_style_setting',array(
     'default'   => 'vertical',
     'transport' =>'refresh',   
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize,'dicaracx_company_style_panel_control',array(
      'label'   =>__('Display Style of extra panels','dicaracx'),
      'section' => 'dicaracx_company',
      'settings'=>'dicaracx_panel_style_setting',
      'type'    => 'radio',
      'choices' => array(
          'vertical' => 'vertical',
          'normal'  => 'Normal',
      ),  
 )));


// pannel 1 header images

$wp_customize->add_setting('dicaracx_images_banner_extrapanelone',array(
     'default'   =>  get_template_directory_uri().'/assets/img/ernest.png',
     'transport' =>'refresh',   
));



 $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize,'dicaracx_panel_extraone_image',array(
          'label'   => __('Image extra panel #1','dicaracx'),
          'default_image'  =>  get_template_directory_uri().'/assets/img/ernest.png',
          'section' => 'dicaracx_company',
          'settings'=> 'dicaracx_images_banner_extrapanelone',
          'description' => __('Upload img into the panel extra 1'),
          'width'   =>  300,
          'height'  =>  300,
         
   )));

  // pannel 1 text
  $wp_customize->add_setting('dicaracx_panel_extraone_p',array(
            
          'default'   =>'text of the link',
          'transport' => 'refresh',  
 ));



$wp_customize->add_control(new WP_Customize_Control($wp_customize,'dicaracx_company_text_panelone_control',array(
      'label'   =>__('Text in the extra panel #1','dicaracx'),
      'section' => 'dicaracx_company',
      'settings' =>'dicaracx_panel_extraone_p',
      'type'    => 'text',
)));

    // url 1 text
  $wp_customize->add_setting('dicaracx_panel_extratwo_url_one',array(
            
          'default'   =>'http://www.your-url-here',
          'transport' => 'refresh',  
 ));

$wp_customize->add_control(new WP_Customize_Control($wp_customize,'dicaracx_url_text_panelone_control',array(
      'label'   =>__('Url for panel #1','dicaracx'),
      'section' => 'dicaracx_company',
      'settings' =>'dicaracx_panel_extratwo_url_one',
      'type'    => 'text',
)));

// pannel 2 header images

$wp_customize->add_setting('dicaracx_images_banner_extrapaneltwo',array(
     'default'   =>  get_template_directory_uri().'/assets/img/ernest.png',
     'transport' =>'refresh',   
));



 $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize,'dicaracx_panel_extratwo_image',array(
          'label'   => __('Image extra panel #2','dicaracx'),
          'default_image'  =>  get_template_directory_uri().'/assets/img/ernest.png',
          'section' => 'dicaracx_company',
          'settings'=> 'dicaracx_images_banner_extrapaneltwo',
          'description' => __('Upload img into the panel extra #2'),
          'width'   =>  300,
          'height'  =>  300,
         
   )));

  // pannel 2 text
  $wp_customize->add_setting('dicaracx_panel_extratwo_p',array(
            
          'default'   =>'text of the link',
          'transport' => 'refresh',  
 ));

$wp_customize->add_control(new WP_Customize_Control($wp_customize,'dicaracx_company_text_paneltwo_control',array(
      'label'   =>__('Text in the extra panel #2','dicaracx'),
      'section' => 'dicaracx_company',
      'settings' =>'dicaracx_panel_extratwo_p',
      'type'    => 'text',
)));


  // url 2 text
  $wp_customize->add_setting('dicaracx_panel_extratwo_url_two',array(
            
          'default'   =>'http://www.your-url-here',
          'transport' => 'refresh',  
 ));

$wp_customize->add_control(new WP_Customize_Control($wp_customize,'dicaracx_url_text_paneltwo_control',array(
      'label'   =>__('Url for panel #2','dicaracx'),
      'section' => 'dicaracx_company',
      'settings' =>'dicaracx_panel_extratwo_url_two',
      'type'    => 'text',
)));


//buttom color

$wp_customize->add_setting('dicaracx_color_buttom_extra',array(
  
    'default'    =>'waves-effect waves-light btn  light-blue accent-3',
     'transport' =>'refresh' 

));

$wp_customize->add_control(new WP_Customize_Control($wp_customize,'dicaracx_color_buttom_extra_control',array(
      'label'   =>__('Bottom colors','dicaracx'),
      'description'=>__('This obtion is only in normal style','dicaracx'), 
      'section' => 'dicaracx_company',
      'settings'=>'dicaracx_color_buttom_extra',
      'type'    => 'select',
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

function my_customizer_header_script(){
  ?>
     <script type="text/javascript">
jQuery(document).ready(function ($) {

  /* adv. color option */
  var control_extra_info = $( '#customize-control-dicaracx_company_text_box_paragraph' );
  var control_logo =$('#customize-control-dicaracx_company_setup_logo_image');

  //panel extra at the header
  var panel_img = $('#customize-control-dicaracx_panel_extraone_image');
  var panel_vertical = $('#customize-control-dicaracx_company_style_panel_control');
  var panel_onetext =$('#customize-control-dicaracx_company_text_panelone_control');
  var panel_one_url_text =$('#customize-control-dicaracx_url_text_panelone_control'); 
  var panel_img_two =$('#customize-control-dicaracx_panel_extratwo_image'); 
  var panel_text_two =$('#customize-control-dicaracx_company_text_paneltwo_control');
  var panel_two_url_text =$('#customize-control-dicaracx_url_text_paneltwo_control');
  var color_btn = $('#customize-control-dicaracx_color_buttom_extra_control');

  /* on change, hide or show adv. option */
  $( '#customize-control-dicaracx_company_description_extra_option > label > input[type="checkbox"]' ).change(function(){
    if( $(this).prop("checked") ) {
      control_extra_info.show(1000);
    } else {
      control_extra_info.hide(1000);
         
    }
  });

  /* on change, logo */
  $( '#customize-control-dicaracx_company_logo_option > label > input[type="checkbox"]' ).change(function(){
    if( $(this).prop("checked") ) {
      control_logo.show(1000);
    } else {
      control_logo.hide(1000);
         
    }
  });
    /* panel at the banner */
  $( '#customize-control-dicaracx_company_services_panel_option > label > input[type="checkbox"]' ).change(function(){
    if( $(this).prop("checked") ) {
      panel_img.show(1000);
      panel_vertical.show(1000);
      panel_onetext.show(1000);
      panel_one_url_text.show(1000);
      panel_img_two.show(1000);
      panel_text_two.show(1000);
      panel_two_url_text.show(1000);
      color_btn.show(1000);
    } else {
      panel_img.hide(1000);
      panel_vertical.hide(1000);
      panel_onetext.hide(1000);
      panel_one_url_text.hide(1000);
      panel_img_two.hide(1000);
      panel_text_two.hide(1000);
      panel_two_url_text.hide(1000);
      color_btn.hide(1000);   
    }
  });
});
</script>

  <?php
}

// callbacks functions

 function mythemes_validate_number( $value )
    {
        return absint( $value );
    }

// add this style in the head or wordpress
function dicaracx_save_bg_color(){
 ?> 
  <style type="text/css">
       
#banner-parallax{
	background-image: url(<?php echo wp_get_attachment_url(get_theme_mod('dicaracx_images_banner_company')); ?>);

   }
#banner-parallax h1{
	  	font-size:<?php echo get_theme_mod('dicaracx_size_title_company'); ?>px; 
      color:<?php echo get_theme_mod('dicaracx_company_color','#333'); ?>!important;
	}
       
#banner-parallax h1 small{
    color:<?php echo get_theme_mod('dicaracx_company_p_color','#555'); ?>!important;
}

#banner-parallax p{

	color: <?php echo get_theme_mod('dicaracx_company_p_color'); ?>;
}
     
  /*menu nav*/
div .menu {
  
    background: <?php echo get_theme_mod('dicaracx_nav_color','#444'); ?>!important;
    
  }

div .menu li a {
  color:<?php echo get_theme_mod('dicaracx_nav_color_links','#fff'); ?>!important;
}
div .menu li a:hover {
  color:<?php echo get_theme_mod('dicaracx_nav_color_links_a','#fff'); ?>!important;
}

  div .menu li:hover > a {
    background: <?php echo get_theme_mod('dicaracx_nav_color_hover','#25252B'); ?>!important;
    color: <?php echo get_theme_mod('dicaracx_nav_color_hover_a','#fff'); ?>!important;
}

.menu li > ul > li {
    background: <?php echo get_theme_mod('dicaracx_nav_color_hover_bg_sub_menu','#25252b'); ?>;
    border-top: 1px solid #25252f;
}
.mask {
    background-color: rgba(<?php echo get_theme_mod('dicaracx_bgcolor_on_image'); ?>);
}
.menu-onscroll {
  
    background-color:<?php echo get_theme_mod('dicaracx_color_of_navscroll','#fff'); ?>;
}
.menu-onscroll .menu{

  background-color: <?php echo get_theme_mod('dicaracx_color_of_navscroll','#fff'); ?> !important;

}
.menu-onscroll .menu a{

  color: <?php echo get_theme_mod( 'dicaracx_color_of_navscroll_alinks','#555' ); ?> !important;
}


  </style>
<?php
}

add_action('wp_head','dicaracx_save_bg_color');


?>