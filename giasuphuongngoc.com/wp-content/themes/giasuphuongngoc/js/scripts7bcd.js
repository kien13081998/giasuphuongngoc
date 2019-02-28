jQuery(document).ready(function($){
  $("#menu-585-1 > a").removeAttr("href");
});

jQuery(document).ready(function($){
$(".view-slide-show .view-content", $(this)).owlCarousel({
            items :1,
            itemsDesktop:[1199,1],
            itemsDesktopSmall : [980,1],
            itemsTablet: [768,1],
            itemsMobile : [479,1],
            navigation: false,
            autoPlay: true
});

});
jQuery(window).scroll(function() {
  $ = jQuery;
  if ($(this).scrollTop() > 100) {
         $('#menu-top').addClass('menu-fix');
  } else {
       $('#menu-top').removeClass('menu-fix');
  }

});
