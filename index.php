
 <?php 

   get_header() 
   
  ?>
   <?php  
        require_once get_template_directory() .'/layout/layout-mobil-nav.php'; 
        require_once get_template_directory() .'/layout/layout-header-parallax-other.php'; 
   ?>
  

 <section class="container section-space">
   <div class="row">
   <div class="col s12 l9">
     <div class="breadcrumb"><?php get_breadcrumb(); ?></div>
   </div>
   <div class="col s12 l9">
     <!--loop-->
          <?php 
           
           $wp_query = new WP_Query('category_name=news&paged='.$paged);
      if ( $wp_query->have_posts() ) {
          while ( $wp_query ->have_posts() ) {
              $wp_query->the_post(); 
            if(has_post_thumbnail()){
               ?>
              <div class="col s12 l12">

                <div class="card hoverable">
                <div class="card-image">
                  <?php $post_thumbnail_id = get_post_thumbnail_id( $post ); ?>
                        <img class="responsive-img"  src="<?php echo wp_get_attachment_image_url($post_thumbnail_id,'full') ?>">
                  <span class="card-title"><?php the_title(); ?></span>
                </div>
                <div class="card-content">
                   <p><?php echo excerpt(15) ?></p>
                </div>
                <div class="card-action">
                  <a href="<?php echo the_permalink(); ?>">more</a>
                </div>
              </div>
           </div>
             
            <?php 
            }else{
            ?>
           <div class="col s12 l13">
          <div class="card hoverable">
            <div class="card-content">
              <span class="card-title"><?php the_title(); ?></span>
              <p><?php echo excerpt(25) ?></p>
            </div>
            <div class="card-action">
              <a href="<?php echo the_permalink(); ?>">more</a>
            </div>
          </div>
          </div>
            

           <?php
           }  
          } // end while
          ?>
        <div class="col s12 l12 center-align"> 
          <ul class="pagination">
          <li>
            <?php       
                if (function_exists(custom_pagination)) {
                  custom_pagination($wp_query->max_num_pages,"",$paged);
                } 
            ?>
          </li>
        </ul>
         </div> 
          <?php
          wp_reset_postdata();
        } // end if
        ?>
     </div>
     <div class="col s12 l3">
       <?php get_sidebar('sidebar-1'); ?>
     </div>   
   </div>
    
  </section>

  <?php get_footer() ?>

