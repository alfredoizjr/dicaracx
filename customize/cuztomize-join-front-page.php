<?php

	// google map sectio
require_once get_template_directory() .'/customize/customize-google-map.php';
//footer
require_once get_template_directory() .'/customize/customize-footer-section.php';
// destcated
require_once get_template_directory() .'/customize/customize-destacated-section.php';

// customize service
require_once get_template_directory() .'/customize/customize-service-panel.php';

// marketing 
require_once get_template_directory() .'/customize/customize-marketing-section.php';

add_action( 'customize_register','dicaracx_join_display_section_fronpage');

function dicaracx_join_display_section_fronpage($wp_customize){

	$wp_customize->add_panel('dicarax_frontpage_display',array(
    'title' => __('Front Page Section'),
    'priority' => 11,
    'active_callback' => 'is_front_page',
));
}

?>