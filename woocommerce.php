
 <?php 

   get_header() 
   
  ?>
   <?php  require get_template_directory() .'/layout/layout-mobil-nav.php'; ?>
  
 <section>
   <div class="parallax-container">
     <?php  require get_template_directory() .'/layout/nav.php'; ?>
      <div class="parallax">
      <img src="<?php echo wp_get_attachment_url(get_theme_mod('dicaracx_images_banner_company')); ?>">
          <h2><?php wp_title(''); ?></h2>
      </div>

  </div>
</section>
 <section class="section-space">
 	<main class="container">
 		<div class="row">
 			<div class="col s12 l9">
                <?php woocommerce_content(); ?> 
 			</div>
 			<div class="col s12 l3">
 				<?php get_sidebar(); ?>
 			</div>
 		</div>
 	</main>
 </section>

<?php get_footer() ?>