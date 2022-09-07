jQuery(function(){

  var myheroslider = new Swiper('.swiper-container.swiper-hero-slider', {
    effect: "fade",
    autoplay: true,
    loop: true,
    autoHeight: true,
    autoplay: {
      delay: 5000,
    },
    speed: 1000,
	navigation: {
	  nextEl: ".swiper-button-next",
	  prevEl: ".swiper-button-prev",
	},
  });


  jQuery(".menu-btn").click(function(e){
    e.preventDefault();
    if(!jQuery(".fullscreen-menu-container").is(":visible")){
      jQuery(".fullscreen-menu-container").show();
    } else {
      jQuery(".fullscreen-menu-container").hide();
    }
  });

  jQuery(".fullscreen-menu-container a, .close-mobile-menu-icon").click(function(){
    jQuery(".fullscreen-menu-container").hide();
  });

});
