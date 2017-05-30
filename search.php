 <?php get_header() ?>
 <?php  require get_template_directory() .'/layout/layout-mobil-nav.php'; ?>
  
 <section id="parallax-othre">
   <div class="parallax-container">
     <?php  require get_template_directory() .'/layout/nav.php'; ?>
      <div class="parallax">
      <img src="<?php echo wp_get_attachment_url(get_theme_mod('dicaracx_images_banner_company')); ?>">
          <h2>Search</h2>
      </div>

  </div>
 </section>
 <section class="container section-space">
	 <div class="row">
	   <div class="col s12 l9">
	   <div class="breadcrumb"><?php get_breadcrumb(); ?></div>
	      <h2>Search for " <?php echo get_search_query(); ?> "</h2>
	  	 
          <!--loop-->
           <?php 
             
	        
				if ( have_posts() ) {
					while ( have_posts() ) {
						the_post(); 

						echo the_post_thumbnail('medium');
					  ?>

                           
                          <a href="<?php echo get_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                          <i class="animated flipInX"><?php the_date(); ?> / <?php the_category(', '); ?> / <?php the_tags('<span class="badge badge-primary">tags:</span> '); ?></i>
                          <hr>
                          <?php the_excerpt(); ?>
                     

					 <?php  
					} // end while
				} else{
					?>
                       
                      <div class="card">
			            <div class="card-content ">
			              <span class="card-title">You can try another search</span>
			                <?php get_search_form(); ?>
			            </div>
			            <div class="card-action">
			              <a href="<?php echo bloginfo( 'url' ); ?>">Back to the home pages</a>
			            </div>
			          </div>

					<?php
				}// end if

				  comments_template();
				?>
        
          
	   </div>
	   <div class="col s12 l3">
	   	 <?php  get_sidebar(); ?>
	   </div>
	 </div>
  	
  </section>

  <?php get_footer() ?>