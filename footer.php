<footer class="page-footer">
          <div class="container">
            <div class="row">
            <div class="col l3 s12">
                <?php
                  
                  if(is_active_sidebar( 'sidebar-3' )){
                   dynamic_sidebar( 'sidebar-3' ); 
                  }
                
                ?>

              </div>
              <div class="col l3 s12">
                <?php
                  
                  if(is_active_sidebar( 'sidebar-4' )){
                   dynamic_sidebar( 'sidebar-4' ); 
                  }
                
                ?>

              </div>
              <div class="col l3 s12">
                <?php
                 
                if(is_active_sidebar( 'sidebar-5' )){
                   dynamic_sidebar( 'sidebar-5' ); 
                  }
               
                ?>

              </div>
              <div class="col l3  s12">
                <h2>Links</h2>
                 <?php
                    wp_nav_menu( array(
                     'theme_location' => 'footer_menu',
                     'container'      => 'false',
                     'menu_class'     => 'false',
                     'menu_id'     => 'footer',
                     'depth'      => 1,
                  
                    ));

                  ?>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
              <div class="row">
                <div class="col s12 l3">
                   <p>&copy <?php bloginfo('name')?> - <?php echo date('Y') ?></p>
                </div>
                <div class="col l6 s12"></div>
                <div class="col s12 l3">
                   <?php if(get_theme_mod('setting_social_facebook') != false || get_theme_mod('setting_social_facebook')!='' ){ ?>
                <a  target="_blank" href="<?php echo get_theme_mod('setting_social_facebook') ?>"><i class="fa fa-facebook-square fa-1x" aria-hidden="true"></i></a>
                <?php } ?>
                <?php if(get_theme_mod('setting_social_twiter') != false || get_theme_mod('setting_social_twiter')!='' ){ ?>
                <a target="_blank" href="<?php echo get_theme_mod('setting_social_twiter') ?>"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                <?php } ?>
                <?php if(get_theme_mod('setting_social_youtube') != false || get_theme_mod('setting_social_youtube')!='' ){ ?>
                <a target="_blank" href="<?php echo get_theme_mod('setting_social_youtube') ?>"><i class="fa fa-youtube-square fa-1x" aria-hidden="true"></i></a>
                <?php } ?>
                <?php if(get_theme_mod('setting_social_instagram') != false || get_theme_mod('setting_social_instagram')!='' ){ ?>
                <a target="_blank" href="<?php echo get_theme_mod('setting_social_instagram') ?>"><i class="fa fa-instagram fa-1x" aria-hidden="true"></i></a>
                <?php } ?>
                <?php if(get_theme_mod('setting_social_linkeding') != false || get_theme_mod('setting_social_linkeding')!='' ){ ?>
                <a target="_blank" href="<?php echo get_theme_mod('setting_social_linkeding') ?>"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </footer>

<?php wp_footer(); ?>
<?php require_once get_template_directory().'/assets/extra/js/circles-progress-js.php' ?>
<?php require_once get_template_directory().'/assets/extra/js/animation-reveal.php' ?>

</body>
</html>
