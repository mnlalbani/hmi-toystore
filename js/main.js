$(document).ready(function(){
      //Carousel
      $('.carousel.carousel-slider').each(function() {
var view = $(this);
var firstImage = view.find('.carousel-item img').first();
var imageHeight = firstImage[0].naturalHeight;
if (imageHeight > 0) {
view.css('height', imageHeight / firstImage[0].naturalWidth * view.width());
}
else {
view.css('height', 400);
}
});
       $('.carousel.carousel-slider').carousel({fullWidth: true});
      //Select
      $('select').material_select();
      //Side Nav
      $(".button-collapse").sideNav();

      //Login
});