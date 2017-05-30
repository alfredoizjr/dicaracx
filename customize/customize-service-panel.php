<?php

/*Service panel*/
add_action( 'customize_register', 'dicaracx_service_panel_area');
add_action( 'customize_controls_print_footer_scripts', 'my_customizer_script' );


function dicaracx_service_panel_area($wp_customize){

  // icons array

$icon = array(
  
'<i class="fa fa-user fa-4x" aria-hidden="true"></i>'        =>'Costumer',
'<i class="fa fa-cog fa-4x" aria-hidden="true"></i>'         =>'Settings',
'<i class="fa fa-rocket fa-4x" aria-hidden="true"></i>'      =>'Rocket', 
'<i class="fa fa-plug fa-4x" aria-hidden="true"></i>'        => 'Plugin',
'<i class="fa fa-quote-right fa-4x" aria-hidden="true"></i>' => 'quote',
'<i class="fa fa-bar-chart fa-4x" aria-hidden="true "></i>'  =>'Grafic Incress 1',
'<i class="fa fa-line-chart fa-4x" aria-hidden="true"></i>' =>'Grafic Incress 2',
'<i class="fa fa-pie-chart fa-4x" aria-hidden="true"></i>'   =>'Circle grafic',
'<i class="fa fa-briefcase fa-4x" aria-hidden="true"></i>'   =>'Bussines',
'<i class="fa fa-bolt fa-4x" aria-hidden="true"></i>'        =>'Flash',
  
);



$wp_customize->add_section('dicaracx_service_zone_area',array(
      
      'title'      => __('Service Section','dicaracx'),
      'description'=> __('Setting for you service panel'),
      'panel'      =>'dicarax_frontpage_display',
      'priority'   => 24,

 ));


// title pear and very top of service

$wp_customize->add_setting('dicaracx_display_title_serv_panel',array(
   
   'default'   => 'yes',
   'transport' => 'refresh',
  
));


$wp_customize->add_control(new WP_Customize_Control($wp_customize,'service_panel_display_title',array(
     
     'label'   =>__('Show The title of the panel','dicaracx'),
     'section' => 'dicaracx_service_zone_area',
     'settings'=> 'dicaracx_display_title_serv_panel',
     'type'    => 'radio',
     'choices' => array(
         
          'yes' => 'Yes',
          'no'  => 'No',
     ),
)));

// color of buttom
$wp_customize->add_setting('dicaracx_color_of_btn_service',array(

  'default' => 'waves-effect waves-light btn  light-blue accent-3',
  'transport' => 'refresh',
  
));


$wp_customize->add_control(new WP_Customize_Control($wp_customize,'dicaracx_select_color_btn_control_services',array(
     
     'label'   =>__('Color of the button','dicaracx'),
     'section' => 'dicaracx_service_zone_area',
     'settings'=> 'dicaracx_color_of_btn_service',
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


//title pear and very top of service adir text
$wp_customize->add_setting('dicaracx_title_text',array(
   
    'default'=>'Our main services',
    'trasport' => 'refresh',
    
  ));

$wp_customize->add_control('dicaracx_text_of_the_title_pservices',array(
   
    'label' => __('Title of the panel'),
    'section' => 'dicaracx_service_zone_area',
    'settings'=> 'dicaracx_title_text',
    'type'    => 'text',
));


//title pear and very top of service adit color
$wp_customize->add_setting('dicaracx_title_color',array(
   
    'default'=>'#555',
    'trasport' => 'refresh',
    
  ));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'dicaracx_olor_of_the_title_pservices',array(
   
    'label' => __('Color of the title'),
    'section' => 'dicaracx_service_zone_area',
    'settings'=> 'dicaracx_title_color',
)));




/*---------service # 1 -----------------------*/

//title

$wp_customize->add_setting('title_service_one',array(

  'default' => 'Title of service',
  'transport' => 'refresh',

));

$wp_customize->add_control(new WP_Customize_Control($wp_customize,'control_service_one_title',array(

    'label'       =>__('Title of the service #1','dicaracx'),
    'description' =>__('This seting is belong of service one','dicaracx'),
    'section'     =>'dicaracx_service_zone_area',
    'settings'    =>'title_service_one',
    'type'        =>'text',

)));

//text
$wp_customize->add_setting('paragraph_service_one',array(

  'default' => 'text of service',
  'transport' => 'refresh',

));

$wp_customize->add_control(new WP_Customize_Control($wp_customize,'control_service_one_p',array(

    'label'       =>__('Text of the service #1','dicaracx'),
    'section'     =>'dicaracx_service_zone_area',
    'settings'    =>'paragraph_service_one',
    'type'        =>'textarea',

)));

// pages dropdow #1
$wp_customize->add_setting('pages_link_services_one',array(

   'default'   => '',
   'transport' => 'refresh'

  ));


 $wp_customize->add_control('links_for_pages_service_one', array(
        'label'      => __('Links of the service', 'dicaracx'),
        'description'=>__('This links si provider for the pages is already create','dicaracx'),
        'section'    => 'dicaracx_service_zone_area',
        'type'       => 'dropdown-pages',
        'settings'   => 'pages_link_services_one',
    ));


 // icons #1
$wp_customize->add_setting('icon_server_one',array(

   'default'   => '<i class="fa fa-cog fa-4x" aria-hidden="true"></i>',
   'transport' => 'refresh'

  ));


 $wp_customize->add_control('icons_for_service_one', array(
        'label'      => __('Icons', 'dicaracx'),
        'description'=>__('You can put some icons in your top of service','dicaracx'),
        'section'    => 'dicaracx_service_zone_area',
        'type'       => 'select',
        'settings'   => 'icon_server_one',
        'choices'    => $icon,
    ));



/*---------service # 2 -----------------------*/

//title

$wp_customize->add_setting('title_service_two',array(

  'default' => 'Title of service',
  'transport' => 'refresh',

));

$wp_customize->add_control(new WP_Customize_Control($wp_customize,'control_service_two_title',array(

    'label'       =>__('Title of the service #2','dicaracx'),
    'description' =>__('This seting is belong of service two','dicaracx'),
    'section'     =>'dicaracx_service_zone_area',
    'settings'    =>'title_service_two',
    'type'        =>'text',

)));


//text
$wp_customize->add_setting('paragraph_service_two',array(

  'default' => 'text of service',
  'transport' => 'refresh',

));

$wp_customize->add_control(new WP_Customize_Control($wp_customize,'control_service_two_p',array(

    'label'       =>__('Text of the service #2','dicaracx'),
    'section'     =>'dicaracx_service_zone_area',
    'settings'    =>'paragraph_service_two',
    'type'        =>'textarea',

)));


// pages dropdow #2
$wp_customize->add_setting('pages_link_services_two',array(

   'default'   => '',
   'transport' => 'refresh'

  ));


 $wp_customize->add_control('links_for_pages_service_two', array(
        'label'      => __('Links of the service', 'dicaracx'),
        'description'=>__('This links si provider for the pages is already create','dicaracx'),
        'section'    => 'dicaracx_service_zone_area',
        'type'       => 'dropdown-pages',
        'settings'   => 'pages_link_services_two',
    ));



 // icons #2
$wp_customize->add_setting('icon_server_two',array(

   'default'   => '<i class="fa fa-rocket fa-4x" aria-hidden="true"></i>',
   'transport' => 'refresh'

  ));


 $wp_customize->add_control('icons_for_service_two', array(
        'label'      => __('Icons', 'dicaracx'),
        'description'=>__('You can put some icons in your top of service','dicaracx'),
        'section'    => 'dicaracx_service_zone_area',
        'type'       => 'select',
        'settings'   => 'icon_server_two',
        'choices'    => $icon,
    ));


/*---------service # 3 -----------------------*/

//title

$wp_customize->add_setting('title_service_tree',array(

  'default' => 'Title of service',
  'transport' => 'refresh',

));

$wp_customize->add_control(new WP_Customize_Control($wp_customize,'control_service_tree_title',array(

    'label'       =>__('Title of the service #3','dicaracx'),
    'description' =>__('This seting is belong of service three','dicaracx'),
    'section'     =>'dicaracx_service_zone_area',
    'settings'    =>'title_service_tree',
    'type'        =>'text',


)));

//text
$wp_customize->add_setting('paragraph_service_tree',array(

  'default' => 'text of service',
  'transport' => 'refresh',

));

$wp_customize->add_control(new WP_Customize_Control($wp_customize,'control_service_tree_p',array(

    'label'       =>__('Text of the service #3','dicaracx'),
    'section'     =>'dicaracx_service_zone_area',
    'settings'    =>'paragraph_service_tree',
    'type'        =>'textarea',

)));


// pages dropdow #3
$wp_customize->add_setting('pages_link_services_tree',array(

   'default'   => '',
   'transport' => 'refresh'

  ));


 $wp_customize->add_control('links_for_pages_service_tree', array(
        'label'      => __('Links of the service', 'dicaracx'),
        'description'=>__('This links si provider for the pages is already create','dicaracx'),
        'section'    => 'dicaracx_service_zone_area',
        'type'       => 'dropdown-pages',
        'settings'   => 'pages_link_services_tree',
    ));




 // icons #3
$wp_customize->add_setting('icon_server_tree',array(

   'default'   => '<i class="fa fa-user fa-4x" aria-hidden="true"></i>',
   'transport' => 'refresh'

  ));


 $wp_customize->add_control('icons_for_service_tree', array(
        'label'      => __('Icons', 'dicaracx'),
        'description'=>__('You can put some icons in your top of service','dicaracx'),
        'section'    => 'dicaracx_service_zone_area',
        'type'       => 'select',
        'settings'   => 'icon_server_tree',
        'choices'    => $icon,
    ));

/*---------estra service 4-------*/

   $wp_customize->add_setting('extra_service_display', array(
        'default' => false,
        'transport' => 'refresh',
    ));
 
    $wp_customize->add_control(new WP_Customize_Control( $wp_customize,'display_extra_service', array(
        'settings' => 'extra_service_display',
        'label'    => __('Display extra service','dicaracx'),
        'section'  => 'dicaracx_service_zone_area',
        'type'     => 'checkbox',
        'class'       => 'control-service-4'
    )));




//title

$wp_customize->add_setting('title_service_four',array(

  'default' => 'Title of service',
  'transport' => 'refresh',

));

$wp_customize->add_control(new WP_Customize_Control($wp_customize,'control_service_four_title',array(

    'label'       =>__('Title of the service #4','dicaracx'),
    'description' =>__('This seting is belong of service three','dicaracx'),
    'section'     =>'dicaracx_service_zone_area',
    'settings'    =>'title_service_four',
    'type'        =>'text',

)));

//text
$wp_customize->add_setting('paragraph_service_four',array(

  'default' => 'text of service',
  'transport' => 'refresh',

));

$wp_customize->add_control(new WP_Customize_Control($wp_customize,'control_service_four_p',array(

    'label'       =>__('Text of the service #4','dicaracx'),
    'section'     =>'dicaracx_service_zone_area',
    'settings'    =>'paragraph_service_four',
    'type'        =>'textarea',

)));


// pages dropdow #4
$wp_customize->add_setting('pages_link_services_four',array(

   'default'   => '',
   'transport' => 'refresh'

  ));


 $wp_customize->add_control('links_for_pages_service_four', array(
        'label'      => __('Links of the service', 'dicaracx'),
        'description'=>__('This links si provider for the pages is already create','dicaracx'),
        'section'    => 'dicaracx_service_zone_area',
        'type'       => 'dropdown-pages',
        'settings'   => 'pages_link_services_four',
    ));






 // icons #4
$wp_customize->add_setting('icon_server_four',array(

   'default'   => '<i class="fa fa-user fa-4x" aria-hidden="true"></i>',
   'transport' => 'refresh'

  ));


 $wp_customize->add_control('icons_for_service_four', array(
        'label'      => __('Icons', 'dicaracx'),
        'description'=>__('You can put some icons in your top of service','dicaracx'),
        'section'    => 'dicaracx_service_zone_area',
        'type'       => 'select',
        'settings'   => 'icon_server_tree',
        'choices'    => $icon,
    ));


}



function my_customizer_script(){

  ?>
    

<script type="text/javascript">
jQuery(document).ready(function ($) {

  /* adv. color option */
  var control_title = $( '#customize-control-control_service_four_title' );
  var control_text = $('#customize-control-control_service_four_p');
  var control_link = $('#customize-control-links_for_pages_service_four');
  var control_icon = $('#customize-control-icons_for_service_four');

  /* on change, hide or show adv. option */
  $( '#customize-control-display_extra_service > label > input[type="checkbox"]' ).change(function(){
    if( $(this).prop("checked") ) {
      control_title.show(1000);
      control_text.show(1000);
      control_link.show(1000);
      control_icon.show(1000);
    } else {
      control_title.hide(1000);
      control_text.hide(1000);
      control_link.hide(1000);
      control_icon.hide(1000);
    }
  });
});
</script>

  <?php
}

// callbacks functions

 function dicaracx_validate_number( $value )
    {
        return absint( $value );
    }


 // add this style in the head or wordpress
function dicaracx_style_services(){
 ?> 
  <style type="text/css">
       

.serve-title-top {
    border-bottom: 1px solid <?php echo get_theme_mod('dicaracx_title_color','#555'); ?>;
    color:<?php echo get_theme_mod('dicaracx_title_color','#555'); ?>;
}


  </style>
<?php
}

add_action('wp_head','dicaracx_style_services');   



?>
