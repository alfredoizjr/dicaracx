
<?php  if(get_theme_mod('dicaracx_destacted_display_obtion_img')=='yes'){?>
<?php if(wp_get_attachment_url(get_theme_mod('dicaracx_destacated_section_img_setting'))!=false){ ?>
<section class="destacated-r">
	<article class="container">
      <div class="row">
      	  <div class="col l5 s12 destacate-section">
      	  	<img src="<?php echo  wp_get_attachment_url(get_theme_mod('dicaracx_destacated_section_img_setting')); ?>" alt="">
      	  </div>
      	  <?php if( get_theme_mod('dicaracx_firstinfo_display_obtion','yes') == 'yes' ) {?>
      	  <div class="col l7 s12">
	      	  <div class="destacate-info">
		      	  	<h2><?php echo get_theme_mod('dicaracx_title_one_detacated','Your title for destacte area'); ?></h2>
		      	  	<p>
		      	      <?php echo get_theme_mod('dicaracx_p_one_detacated'); ?>
		      	  	</p>
	      	  	</div>
	      	 </div>
	      <?php } ?>
	       <?php if( get_theme_mod('dicaracx_progress_display_obtion','yes') == 'yes' ) {?>	 
	      	 <div class="col s12 l7">
	      	 	<?php require get_template_directory().'/layout/layout-progress-bar.php'; ?>
	      	 </div>
	      <?php } ?>	 
      </div>
   </article>
</section>
<?php }else{?>

  <section class="destacated-r">
	<article class="container">
      <div class="row">
      	  <?php if( get_theme_mod('dicaracx_firstinfo_display_obtion','yes') == 'yes' ) {?>
      	  <div class="col l12 s12">
	      	  <div class="destacate-info center-aling">
		      	  	<h2><?php echo get_theme_mod('dicaracx_title_one_detacated','Your title for destacte area'); ?></h2>
		      	  	<p>
		      	      <?php echo get_theme_mod('dicaracx_p_one_detacated'); ?>
		      	  	</p>
	      	  	</div>
	      	 </div>
	      <?php } ?>
	       <?php if( get_theme_mod('dicaracx_progress_display_obtion','yes') == 'yes' ) {?>	 
	      	 <div class="col s12 l12 center-aling section-space">
	      	 	<?php require get_template_directory().'/layout/layout-progress-bar.php'; ?>
	      	 </div>
	      <?php } ?>	 
      </div>
   </article>
</section>

<?php } ?>
<?php }else{
?>
<section class="destacated-r">
	<article class="container">
      <div class="row">
      	  <?php if( get_theme_mod('dicaracx_firstinfo_display_obtion','yes') == 'yes' ) {?>
      	  <div class="col l12 s12">
	      	  <div class="destacate-info center-aling">
		      	  	<h2><?php echo get_theme_mod('dicaracx_title_one_detacated','Your title for destacted area'); ?></h2>
		      	  	<p>
		      	      <?php echo get_theme_mod('dicaracx_p_one_detacated'); ?>
		      	  	</p>
	      	  	</div>
	      	 </div>
	      <?php } ?>
	       <?php if( get_theme_mod('dicaracx_progress_display_obtion','yes') == 'yes' ) {?>	 
	      	 <div class="col s12 l12 center-aling section-space">
	      	 	<?php require get_template_directory().'/layout/layout-progress-bar.php'; ?>
	      	 </div>
	      <?php } ?>	 
      </div>
   </article>
</section>

<?php }?>
