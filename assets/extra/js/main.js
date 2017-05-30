jQuery(document).ready(function(){

// preload
jQuery(window).load(function(){

	jQuery('#preload').fadeOut();
});
  
jQuery(function() {
	
	// Cache the Window object
	var $window = jQuery(window);
	
	// Parallax Backgrounds
	// Tutorial: http://code.tutsplus.com/tutorials/a-simple-parallax-scrolling-technique--net-27641
	
	jQuery('section[data-type="background"]').each(function(){
		var $bgobj = jQuery(this); // assigning the object
		
		jQuery(window).scroll(function() {
		
			// Scroll the background at var speed
			// the yPos is a negative value because we're scrolling it UP!								
			var yPos = -($window.scrollTop() / $bgobj.data('speed'));
			
			// Put together our final background position
			var coords = '0% '+ yPos + 'px';
			
			// Move the background
			$bgobj.css({ backgroundPosition: coords });
			
		}); // end window scroll
	});
	
 });

//progress flat
jQuery(function(){
  var $ppc = jQuery('.progress-pie-chart'),
    percent = parseInt($ppc.data('percent')),
    deg = 360*percent/100;
  if (percent > 50) {
    $ppc.addClass('gt-50');
  }
  jQuery('.ppc-progress-fill').css('transform','rotate('+ deg +'deg)');
  jQuery('.ppc-percents span').html(percent+'%');
});


// scroll bar 
jQuery(window).scroll(function() {
    // SI, estas haciendodo scroll
     var scroll = jQuery(window).scrollTop();
     if(scroll > 50){
      // detectar si el nav admin  esta
       if(jQuery('#wpadminbar')[0]){
         jQuery('.menu-onscroll').addClass('active_scroll');
       }else{
       	jQuery('.menu-onscroll').removeClass('active_scroll');
       	jQuery('.menu-onscroll').addClass('active_scroll_wpd');
       }

     }else{
       if(jQuery('.menu-onscroll').has('active_scroll') && jQuery('.menu-onscroll').has('active_scroll_wpd')){
            
            jQuery('.menu-onscroll').removeClass('active_scroll');
            jQuery('.menu-onscroll').removeClass('active_scroll_wpd');
       }
        
     }
    
});


});