"use strict";

$(function () {
  $('.slides').slick({
    autoplay: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    responsive: [{
      breakpoint: 996,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }]
  });
  $('.slider-business').slick({
    arrows: false,
    dots: true
  });
  $('.slider-testimonial').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    centerMode: true,
    centerPadding: '0px',
    arrows: false,
    dots: true,
    responsive: [{
      breakpoint: 1400,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 996,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerPadding: '40px'
      }
    }]
  });
  $('.slider-feature').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    centerMode: true,
    centerPadding: '50px',
    arrows: false,
    dots: false,
    responsive: [{
      breakpoint: 1700,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 1290,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerPadding: '40px'
      }
    }, {
      breakpoint: 380,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerPadding: '20px'
      }
    }, {
      breakpoint: 350,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerPadding: '0'
      }
    }]
  });
  $('.slider-about').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    centerMode: true,
    centerPadding: '50px',
    arrows: false,
    dots: false,
    responsive: [{
      breakpoint: 1700,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 1290,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerPadding: '0px',
        dots: true
      }
    }]
  });
  $('.slider-testi2').slick({
    arrows: false,
    dots: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    autoplay: true,
    autoplaySpeed: 3000
  });
  $('.slickrow-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    slidesPerRow: 3,
    rows: 3,
    asNavFor: '.slickrow-slidernav'
  });
  $('.slickrow-slidernav').slick({
    arrows: false,
    dots: false,
    asNavFor: '.slickrow-slider'
  });
  $(document).on('click', '#nav-home-tab', function () {
    var img1 = $(this).closest('.forfans').find('.img-tab1');
    var img2 = $(this).closest('.forfans').find('.img-tab2');
    img1.removeClass('d-none');
    img2.addClass('d-none');
  });
  $(document).on('click', '#nav-profile-tab', function () {
    var img1 = $(this).closest('.forfans').find('.img-tab1');
    var img2 = $(this).closest('.forfans').find('.img-tab2');
    img1.addClass('d-none');
    img2.removeClass('d-none');
  });
});