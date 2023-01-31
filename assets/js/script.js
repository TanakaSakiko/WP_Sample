"use strict";

jQuery(function ($) {
  // wow
  new WOW().init(); //* header
  //スクロールで背景色変化

  $(window).scroll(function () {
    var $headerHight = 65;
    var $height = $('.js-top').height() - $headerHight;

    if ($(this).scrollTop() > $height) {
      $('.js-header').addClass('is-scroll');
    } else {
      $('.js-header').removeClass('is-scroll');
    }
  }); //drawerメニュークリックでdrawer閉じる+スムーススクロール

  $('.js-drawer-nav__list li a').click(function () {
    $('.drawer__input').prop('checked', false);
  }); //* works
  // swiper

  var mySwiper = new Swiper('.swiper', {
    loop: true,
    slidesPerView: 1,
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    },
    autoplay: {
      delay: 5000
    }
  }); //* other
  //pagetopボタンスクロールで表示/非表示

  $('.js-pagetop').hide();
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $('.js-pagetop').fadeIn(300);
    } else {
      $('.js-pagetop').fadeOut(300);
    }
  });
});