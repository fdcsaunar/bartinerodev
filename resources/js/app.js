require('./bootstrap');

require('alpinejs');

require('slick');

require('slick-carousel');

jQuery(document).ready(function($){
    $('.gallery').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: false,
        prevArrow: false,
        nextArrow: false
      });
});