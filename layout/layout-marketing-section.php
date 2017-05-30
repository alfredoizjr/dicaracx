<section class="marketing">
	<article class=" container">
	 <?php if(get_theme_mod('dicaracx_marketing_section_img_setting')!= false) {?>
		<div class="row">
			<div class="col s12 l7 ">
			<div class="marketing-content">
			<img src="<?php echo wp_get_attachment_url(get_theme_mod('dicaracx_marketing_section_img_setting')); ?>" alt="">
			</div>
		</div>
		<div class="col s12 l5">
		<div class="marketing-content">
			<h2><?php echo get_theme_mod('dicaracx_marketing_section_title_setting'); ?></h2>
			 <?php echo wpautop(get_theme_mod( 'dicaracx_marketing_section_paragrahp_setting','Your text here for this section')); ?>
			<div class="marketing-btns">
				<a class="<?php echo get_theme_mod( 'dicaracx_color_marketing_btn_one' ); ?>" href="<?php echo get_theme_mod('dicaracx_marketing_extratwo_url_one','#'); ?>"><?php echo get_theme_mod('dicaracx_marketing_btnone_text_setting'); ?></a>
				<a class="<?php echo get_theme_mod( 'dicaracx_color_marketing_btn_two' ); ?>" href="<?php echo get_theme_mod('dicaracx_marketing_extratwo_url_two','#'); ?>"><?php echo get_theme_mod('dicaracx_marketing_btntwo_text_setting'); ?></a>
			</div>
		  </div>	
		</div>
		</div>
	<?php }else{ ?>	
	  <div class="row">
		<div class="col s12 l12">
		<div class="marketing-content-obtional center-align">
			<h2><?php echo get_theme_mod('dicaracx_marketing_section_title_setting'); ?></h2>
			<?php echo wpautop(get_theme_mod( 'dicaracx_marketing_section_paragrahp_setting','Your text here for this section')); ?>
			<div class="marketing-btns">
				<a class="<?php echo get_theme_mod( 'dicaracx_color_marketing_btn_one' ); ?>" href="<?php echo get_theme_mod('dicaracx_marketing_extratwo_url_one','#'); ?>"><?php echo get_theme_mod('dicaracx_marketing_btnone_text_setting'); ?></a>
				<a class="<?php echo get_theme_mod( 'dicaracx_color_marketing_btn_two' ); ?>" href="<?php echo get_theme_mod('dicaracx_marketing_extratwo_url_two','#'); ?>"><?php echo get_theme_mod('dicaracx_marketing_btntwo_text_setting'); ?></a>
			</div>
		  </div>	
		</div>
		</div>
	<?php } ?>
	</article>
</section>
