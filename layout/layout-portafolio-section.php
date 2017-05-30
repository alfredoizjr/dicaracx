
<section class="portafolio-section">
	<article id="portafolio">
		<div class="row">
		<div class="center-align col s12 l12">
				<h2>See our portafolio</h2>
				<p>Some of the last project we make</p>
			</div>
			
			 <?php if(get_theme_mod('dicaracx_how_many_portafolio_setting')=='3'){ ?>
			 <?php 
              $query = new WP_Query( array( 'category_name' => 'portafolio','posts_per_page'=>get_theme_mod('dicaracx_how_many_portafolio_setting','3')));
	            echo $count_posts;
				         if ( $query->have_posts() ) {
					         while ( $query->have_posts() ) {
						       $query->the_post(); 
					          ?>
                 
                      <div class="portafolio-section-collage col xl4 l4 s12 ">
                       
                        <figure class="imghvr-blur">
	                         <?php $post_thumbnail_id = get_post_thumbnail_id( $post ); ?>
	                         <img class=" responsive-img" src="<?php echo wp_get_attachment_image_url($post_thumbnail_id,'full') ?>" alt="">
	                         <figcaption>
                               <a href="<?php echo get_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                            </figcaption>
                         </figure>
                      </div> 
                    
                <?php  
                      $category_id = get_cat_ID( 'portafolio' );
                      $category_link = get_category_link( $category_id );     				
 
      				} // end while
      					// Restore original Post Data
      	                wp_reset_postdata();
      				} // end if
      			?>
      			<!-- if is 6 portafolio-->
      			<?php }else if(get_theme_mod('dicaracx_how_many_portafolio_setting')=='4'){ ?>
		               <?php 
		              $query = new WP_Query( array( 'category_name' => 'portafolio','posts_per_page'=>get_theme_mod('dicaracx_how_many_portafolio_setting')));
			            echo $count_posts;
						         if ( $query->have_posts() ) {
							         while ( $query->have_posts() ) {
								       $query->the_post(); 
							          ?>
		                 
		                      <div class="portafolio-section-collage col xl3 l4 s12 ">
		                       
		                        <figure class="imghvr-blur">
			                         <?php $post_thumbnail_id = get_post_thumbnail_id( $post ); ?>
			                         <img class=" responsive-img" src="<?php echo wp_get_attachment_image_url($post_thumbnail_id,'full') ?>" alt="">
			                         <figcaption>
		                               <a href="<?php echo get_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
		                            </figcaption>
		                         </figure>
		                      </div> 
		                    
		                <?php  
		                      $category_id = get_cat_ID( 'portafolio' );
		                      $category_link = get_category_link( $category_id );     				
		 
		      				} // end while
		      					// Restore original Post Data
		      	                wp_reset_postdata();
		      				} // end if
		      			
		      			?> 
      			<?php }else if(get_theme_mod('dicaracx_how_many_portafolio_setting')=='8'){ ?>
      			<!-- if is 8 portafolio-->
      			    <?php 
		              $query = new WP_Query( array( 'category_name' => 'portafolio','posts_per_page'=>get_theme_mod('dicaracx_how_many_portafolio_setting')));
			            echo $count_posts;
						         if ( $query->have_posts() ) {
							         while ( $query->have_posts() ) {
								       $query->the_post(); 
							          ?>
		                 
		                      <div class="portafolio-section-collage col xl3 l4 s12 ">
		                       
		                        <figure class="imghvr-blur">
			                         <?php $post_thumbnail_id = get_post_thumbnail_id( $post ); ?>
			                         <img class=" responsive-img" src="<?php echo wp_get_attachment_image_url($post_thumbnail_id,'full') ?>" alt="">
			                         <figcaption>
		                               <a href="<?php echo get_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
		                            </figcaption>
		                         </figure>
		                      </div> 
		                    
		                <?php  
		                      $category_id = get_cat_ID( 'portafolio' );
		                      $category_link = get_category_link( $category_id );     				
		 
		      				} // end while
		      					// Restore original Post Data
		      	                wp_reset_postdata();
		      				} // end if
		      		
		      	     ?> 
      			<?php } ?>
            
		</div>
		<div class="row">
			<div class="class-btn-portafolio center-align col s12 l12">
				<a class="<?php echo  get_theme_mod('dicaracx_color_of_btn_setting','waves-effect waves-light btn blue-grey lighten-2'); ?>" href="<?php echo esc_url( $category_link ); ?>">See More</a>
			</div>
		</div>
	</article>
</section>
