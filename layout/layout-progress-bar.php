<div class="center-align row">
    <div class="col l12 s12">
        <h3 class="progress-title"><?php echo get_theme_mod('dicaracx_title_progress_detacated','Your title for progress area'); ?></h3>
    </div>

  <?php if( get_theme_mod( 'dicaracx_progress_display_howmany_obtion','3') =='3'){ ?>  
    <div class="col l4 s12">
     <p><?php echo  get_theme_mod('dicaracx_cricleonetext_progress_detacated','Your progress in'); ?> <?php echo get_theme_mod('dicaracx_cricleone_progress_detacated',60); ?>%</p>
      <div class="google chart">
          <div class="tag"></div>
      </div>
   </div>
    <div class="col l4 s12">
        <p><?php echo  get_theme_mod('dicaracx_cricletwotext_progress_detacated','Your progress in'); ?> <?php echo get_theme_mod('dicaracx_cricletwo_progress_detacated',70); ?>%</p>
        <div class="moz chart">
       <div class="tag"></div>
       </div>
    </div>
    <div class="col l4 s12">
        <p><?php echo  get_theme_mod('dicaracx_criclethreetext_progress_detacated','Your progress in'); ?> <?php echo get_theme_mod('dicaracx_criclethree_progress_detacated',80); ?>%</p>
        <div class="safari chart">
       <div class="tag"></div>
       </div>
  </div>
</div>
<?php }else if(get_theme_mod( 'dicaracx_progress_display_howmany_obtion')=='2'){ ?>

<div class="col l6 s12">
    <p><?php echo  get_theme_mod('dicaracx_cricleonetext_progress_detacated','Your progress in'); ?> <?php echo get_theme_mod('dicaracx_cricleone_progress_detacated',60); ?>%</p>
      <div class="google chart section-space">
          <div class="tag"></div>
      </div>
   </div>
    <div class="col l6 s12 section-space">
        <p><?php echo  get_theme_mod('dicaracx_cricletwotext_progress_detacated','Your progress in'); ?> <?php echo get_theme_mod('dicaracx_cricletwo_progress_detacated',70); ?>%</p>
        <div class="moz chart">
       <div class="tag"></div>
       </div>
    </div>


<?php }else if(get_theme_mod( 'dicaracx_progress_display_howmany_obtion')=='1'){ ?> 
  <div class="col l12 s12 center-align section-space">
     <p><?php echo  get_theme_mod('dicaracx_cricleonetext_progress_detacated','Your progress in'); ?> <?php echo get_theme_mod('dicaracx_cricleone_progress_detacated',60); ?>%</p>
      <div class="google chart">
          <div class="tag"></div>
      </div>
   </div>
<?php } ?>
</div>


