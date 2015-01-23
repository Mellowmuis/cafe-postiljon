jQuery(document).ready(function($) {
  $('.Slider').bxSlider({
    mode: 'horizontal',
    minSlides: 1,
    maxSlides: 1,
    startSlide: 0,
    //slideWidth: 1200,
    slideMargin: 0,
    // captions: true,
    pause: 9000,
    auto: true,
    speed: 900,
    infiniteLoop: true,
    hideControlOnEnd: true,
    touchEnabled: false,
    pager: true,
    controls: true,
    onSliderLoad: function() {
      $('.Slider').css('visibility', 'visible');

    }
  });
});
