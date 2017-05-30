<script type="text/javascript">
   
   window.sr = ScrollReveal();
   sr.reveal('div.menu', { 
        duration: 2000, 
        origin: 'bottom',
  });
   sr.reveal('.info-banner', { 
        duration: 2000, 
        origin: 'top',
        distance: '300px'
  });

    sr.reveal('.destacate-section img', { 
        duration: 2000, 
        origin: 'top',
        distance: '80px',
  }); 
   sr.reveal('.destacate-info', { 
        duration: 2000, 
        origin: 'bottom',
        distance: '70px',
  }); 
     sr.reveal('#portafolio', { 
        duration: 2000, 
        origin: 'bottom',
        distance: '200px',
  });
     sr.reveal('.hoverable ', { 
        duration: 2000, 
        origin: 'bottom',
        distance: '50px',
  });
  
       sr.reveal('.arrow_box', { 
        duration: 2000, 
         origin: 'top',
        distance:'20px',
  });
  sr.reveal('#parallax-othre', { 
      duration: 2000, 
      origin: 'top',
      distance:'200px',
  });
  sr.reveal('#parallax-othre .parallax-container h2 ', { 
      duration: 3000, 
      origin: 'top',
      distance:'200px',
  });
 
   sr.reveal('.marketing-content h2', { 
      duration: 2000, 
      origin: 'top',
      distance:'80px',
  });
  sr.reveal('.marketing-content p', { 
      duration: 2000, 
      origin: 'bottom',
      distance:'80px',
  });
   sr.reveal('.marketing-content img', { 
      duration: 2000, 
      origin: 'bottom',
      distance:'90px',
  });
      sr.reveal('.marketing-btns', { 
      duration: 2000,
      delay: 1000, 
      origin: 'top',
      distance:'90px',
  });
       sr.reveal('.marketing-content-obtional h2', { 
      duration: 2000, 
      origin: 'top',
      distance:'200px',
  });
  sr.reveal('.marketing-content-obtional p', { 
      duration: 2000, 
      origin: 'bottom',
      distance:'80px',
  });

    sr.reveal('.social-media', { 
      duration: 3000, 
      origin: 'top',
      distance:'20px',
  });
  sr.reveal('.serv-1', { 
      duration: 2000, 
      origin: 'top',
      distance:'50px',
  });
    sr.reveal('.serv-2', { 
      duration: 2000,
      delay: 700, 
      origin: 'bottom',
      distance:'50px',
  });
     sr.reveal('.serv-3', { 
      duration: 2000,
      delay: 1000, 
      origin: 'top',
      distance:'50px',
  });
       sr.reveal('.serv-4', { 
      duration: 2000,
      delay: 1300, 
      origin: 'bottom',
      distance:'50px',
  });    

//menu
  jQuery('.button-collapse').sideNav({
      menuWidth: 200, // Default is 300
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true // Choose whether you can drag to open on touch screens
    }
  );
   
 // parallax 
 
  jQuery(document).ready(function(){
      jQuery('.parallax').parallax();
    });  

</script>