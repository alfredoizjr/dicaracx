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
 <section class="container section-space">
  <div class="row">
  	<div class="col s12 l9">
    <div class="breadcrumb"><?php get_breadcrumb(); ?></div>
<?php
    if ( have_posts() ) {
					while ( have_posts() ) {
						the_post(); 

						echo the_post_thumbnail('medium');
					  ?>
            
                          <?php the_content(); ?>
        <?php 
            }
           } 
        
         ?> 
         </div>
         <div class="col s12 l3">
         	<?php get_sidebar(); ?>
         </div>                 
  	 </div>
  </section>

  <?php get_footer() ?>

