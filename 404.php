
 <?php 

   get_header() 
   
  ?>
   <?php  require get_template_directory() .'/layout/layout-mobil-nav.php'; ?>
  
 <section id="parallax-othre">
   <div class="parallax-container">
     <?php  require get_template_directory() .'/layout/nav.php'; ?>
      <div class="parallax">
      <img src="<?php echo wp_get_attachment_url(get_theme_mod('dicaracx_images_banner_company')); ?>">
          <h2><?php wp_title(''); ?></h2>
      </div>

  </div>
 </section>
 <section>
 	<main class="container section-space">
 		<div class="row">
 			<div class="col s12 l9">
 		  <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">404</span>
              <p>Cant find the content pages for this request</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
              <a href="#">This is a link</a>
            </div>
           </div> 
 			</div>
 			<div class="col s12 l3">
 				<?php get_sidebar(); ?>
 			</div>
 		</div>
 	</main>
 </section>

<?php get_footer() ?>