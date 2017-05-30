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
          <!--loop-->
           <?php 
             
	        
				if ( have_posts() ) {
					while ( have_posts() ) {
						the_post(); 
					?>
					  <div class="row">
                        <div class="col s12 l3"><a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a></div>
                        <div class="col s12 l9"><a href="<?php echo get_permalink(); ?>"><h2><?php the_title(); ?></h2></a></div>
                        <div class="col s12 l9 left-align">
                        	 <i class="categorys-meta"><span class="new badge blue"><?php echo the_date(); ?></span> <span class="new badge blue"><?php the_category(', '); ?></span><span class="new badge green"><?php the_tags(); ?></span></i>
                        </div>
                         <div class="col s12 l9">  
                             <?php the_excerpt(); ?>
                         </div>
                       </div> 
					 <?php  
					} // end while
					?>
                         
            <div class="nav-previous alignleft"><?php next_posts_link( '<i class="fa fa-arrow-left" aria-hidden="true"></i>' ); ?></div>
           <div class="nav-next alignright"><?php previous_posts_link( '<i class="fa fa-arrow-right" aria-hidden="true"></i>' ); ?></div>
                      
					<?php
				} else{
					echo "no result";
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