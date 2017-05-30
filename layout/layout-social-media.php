<div class="social-media">
  <div class="row">
  	<div class="col s6 l7">
  		<p>
      <?php if(get_theme_mod('setting_social_number') != false || get_theme_mod('setting_social_number','')!='' ){ ?>
        <i class="fa fa-phone-square" aria-hidden="true"></i> <?php echo get_theme_mod('setting_social_number'); ?> 
        <?php } ?>
        <?php if(get_theme_mod('setting_social_text') != false || get_theme_mod('setting_social_text','')!='' ){ ?>
           | <i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo get_theme_mod('setting_social_text','') ?>
        <?php } ?>
        </p>
  	</div>
  	<div class="col s6 l5 right-align">
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