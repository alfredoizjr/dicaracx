<section id="banner-parallax" data-type="background" data-speed="10">
<div class="mask"></div>
<header class="container">
   <div class="row">
     <div class="col l12 s12">
         <!--social media-->
         <?php 
            if(get_theme_mod( 'display_social_media_option','no' ) == 'yes'){
             require_once get_template_directory().'/layout/layout-social-media.php'; 
            }

          ?>

        <?php  require_once get_template_directory() .'/layout/layout-mobil-nav.php'; ?>
       <?php  require_once get_template_directory() .'/layout/nav.php'; ?>
     </div>
   </div>
   <div class="row">
          <div class=" center-align col l12 s12">
           <div class="info-banner" <?php echo (get_theme_mod( 'dicaracx_service_panel_header')== true) ? 'style="margin-top: 5%"' : 'style="margin-top: 15%"' ?>>
           <?php if(get_theme_mod('dicaracx_logo_company_option',true) == true):?>
             <img id="logo-front" src="<?php echo  wp_get_attachment_url(get_theme_mod( 'dicaracx_images_banner_logo_company' )); ?>" alt="">
           <?php endif ?>
            <h1 class="animated"><?php bloginfo()?><small><?php bloginfo('description') ?></small></h1>
             <?php echo ( get_theme_mod('dicaracx_description_extra_header',true) == true) ? wpautop(get_theme_mod('dicaracx_company_paragraph')) : '' ?>
              <!--Display two panel in the banner-->
             
             <!--Display search var banner-->
              <div class="col l12 s12 white-text">
                <?php 
                 if(get_theme_mod('dicaracx_search_company_option_setting','no') == 'yes'){
                      
                      get_search_form(); 
                 }
               ?>
             </div>
             <?php if(get_theme_mod('dicaracx_panel_style_setting','vertical')=='vertical'){ ?>
             <?php  if( get_theme_mod('dicaracx_service_panel_header',true) ==true){ ?> 
             <!--vertical-->
              <div class="col s12 l6">
                 <div class="card-panel hoverable">
                 	<div class="row valign-wrapper">
			            <div class="col s2">
			              <img src="<?php echo wp_get_attachment_url(get_theme_mod('dicaracx_images_banner_extrapanelone')); ?>" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
						      </div>
			            <div class="col s10">
			              <span class="black-text left-align">
			                <a href="<?php echo get_theme_mod('dicaracx_panel_extratwo_url_one','#'); ?>"><?php echo get_theme_mod('dicaracx_panel_extraone_p'); ?></a>
			              </span>
			            </div>
                     </div>
                 </div>
              </div>
              <div class="col s12 l6">
                  <div class="card-panel hoverable">
                  <div class="row valign-wrapper">
                  <div class="col s2">
                    <img src="<?php echo wp_get_attachment_url(get_theme_mod('dicaracx_images_banner_extrapaneltwo')); ?>" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
                  </div>
                  <div class="col s10">
                    <span class="black-text left-align">
                      <a href="<?php echo get_theme_mod('dicaracx_panel_extratwo_url_two','#'); ?>"><?php echo get_theme_mod('dicaracx_panel_extratwo_p'); ?></a>
                    </span>
                  </div>
                     </div>
                 </div>
              </div>
             <?php }?>
             <?php }else{ ?>
            <?php  if( get_theme_mod('dicaracx_service_panel_header','no') =='yes'){ ?> 
            <!--normal--> 
            <div class="row">
            <div class="col s12 l2"></div>
             <div class="col s12 l4">
               <div class="card modificato-card">
                 <div class="card-content">
                   <div class="row">
                      <div class="col s12 l12">
                    <img src="<?php echo wp_get_attachment_url(get_theme_mod('dicaracx_images_banner_extrapanelone')); ?>" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
                 </div>
                  <div class="col s12 l8 offset-l2">
                    <a href="<?php echo get_theme_mod('dicaracx_panel_extratwo_url_one','#'); ?>"><?php echo get_theme_mod('dicaracx_panel_extraone_p'); ?></a>
                     <div class="card-action"><a href="<?php echo get_theme_mod('dicaracx_panel_extratwo_url_one','#'); ?>" class="<?php echo get_theme_mod('dicaracx_color_buttom_extra','waves-effect waves-light btn  light-green darken-3') ?>">Click Here</a></div>
                  </div> 
                   </div>
               </div>
               </div>
             </div>
              <div class="col s12 l4">
               <div class="card modificato-card">
                 <div class="card-content">
                   <div class="row">
                      <div class="col s12 l12">
                    <img src="<?php echo wp_get_attachment_url(get_theme_mod('dicaracx_images_banner_extrapaneltwo')); ?>" alt="" class="circle responsive-img">
                 </div>
                  <div class="col s12 l8 offset-l2">
                    <a href="<?php echo get_theme_mod('dicaracx_panel_extratwo_url_two','#'); ?>"><?php echo get_theme_mod('dicaracx_panel_extratwo_p'); ?></a>
                    
                  </div> 
                   </div>
                   <div class="card-action"><a href="<?php echo get_theme_mod('dicaracx_panel_extratwo_url_two','#'); ?>" class="<?php echo get_theme_mod('dicaracx_color_buttom_extra','waves-effect waves-light btn  light-green darken-3') ?>">Click Here</a></div>
                  </div>

               </div>
             </div>
             <div class="col s12 l2"></div>
             </div>
             <?php } ?>
            <?php } ?>
           </div>
       </div>      
  </div>            
</header>	
</section>