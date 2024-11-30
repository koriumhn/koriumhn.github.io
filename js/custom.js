
// ISOTOPE FILTER
jQuery(document).ready(function($){

  if ( $('.iso-box-wrapper').length > 0 ) { 

      var $container  = $('.iso-box-wrapper'), 
        $imgs     = $('.iso-box img');

      $container.imagesLoaded(function () {

        $container.isotope({
        layoutMode: 'fitRows',
        itemSelector: '.iso-box'
        });

        $imgs.load(function(){
          $container.isotope('reLayout');
        })

      });

   //filtra elementos al hacer clic en el botón


      $('.filter-wrapper li a').click(function(){

          var $this = $(this), filterValue = $this.attr('data-filter');

      $container.isotope({ 
        filter: filterValue,
        animationOptions: { 
            duration: 750, 
            easing: 'linear', 
            queue: false, 
        }                
      });             

    
// no continuar si ya está seleccionado

      if ( $this.hasClass('selected') ) { 
        return false; 
      }

      var filter_wrapper = $this.closest('.filter-wrapper');
      filter_wrapper.find('.selected').removeClass('selected');
      $this.addClass('selected');

        return false;
      }); 

  }

});


// PRECARGADOR JS
$(window).load(function(){
    $('.preloader').fadeOut(1000); // set duration in brackets    
});


// jQuery para contraer la barra de navegación al desplazarse //
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    }
});



/* Se carga el documento HTML. DOM está listo. 
-------------------------------------------*/
$(function(){


// ------- WOW ANIMADO ------ //
  wow = new WOW(
  {
    mobile: false
  });
  wow.init();

// OCULTAR MENÚ MÓVIL DESPUÉS DE HACER CLIC EN UN ENLACE
  $('.navbar-collapse a').click(function(){
        $(".navbar-collapse").collapse('hide');
    });



// CAJA DE LUZ NIVO
  $('.iso-box-section a').nivoLightbox({
        effect: 'fadeScalf',
    });



// PRESENTACIÓN DE DIAPOSITIVAS DE FONDO DE INICIO
  $(function(){
    jQuery(document).ready(function() {
    $('#home').backstretch([
       "images/slider1.jpg",
       "images/Slider2.jpg",
       "images/Slider3.jpg",
       "images/Slider4.jpg",
      
       
      
        ],  {duration: 2000, fade: 750});
    });
  })

  $('.slider').backstretch({
    
    controlNav: true,              
directionNav: true,             
prevText: "Previous",           
nextText: "Next",   
  });



});

