$(document).ready(function () {
  const hotelSlider = new Swiper('.hotel-slider', {
  // Optional parameters
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: '.hotel-slider__button--next',
    prevEl: '.hotel-slider__button--prev',
  },

  keyboard: {
    enabled: true,
    onlyInViewport: false,
  },
});

const reviewsSlider = new Swiper('.reviews-slider', {
  // Optional parameters
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: '.reviews-slider__button--next',
    prevEl: '.reviews-slider__button--prev',
  },

  keyboard: {
    enabled: true,
    onlyInViewport: false,
  },
});

var menuButton = $(".menu-button");
menuButton.on('click', function() {
  $('.navbar-bottom').toggleClass("navbar-bottom--visible")
});

var modalButton = $('[data-toggle=modal]');
var closeModalButton = $('.modal__close');
var closeModalOverlay = $('.modal__overlay');
modalButton.on('click', openModal);
closeModalButton.on('click', closeModal);
closeModalOverlay.on('click', closeModal);

function openModal() {
  var modalOverlay = $('.modal__overlay');
  var modalDialog = $('.modal__dialog');
  modalOverlay.addClass('modal__overlay--visible');
  modalDialog.addClass('modal__dialog--visible');
}

function closeModal(event) {
  event.preventDefault();
  var modalOverlay = $('.modal__overlay');
  var modalDialog = $('.modal__dialog');
  modalOverlay.removeClass('modal__overlay--visible');
  modalDialog.removeClass('modal__dialog--visible');
}

$(document).on('keydown', function(e) {
  if (e.keyCode == 27)
    closeModal(event);
});

// Обработка форм
$('.subscribe').validate({
    errorClass: "error",
    messages: {
    email: {
      required: "We need your email address to contact you",
      email: "Your email address must be in the format of name@domain.com"
    }, 
  },
});

$('.form').each(function() {
  $(this).validate({
    errorClass: "invalid",
    messages: {
    name: {
      required: "Please specify your name",
      minlength: "Your name shouldn't be shorter than two letters"
    },
    phone: {
      required: "We need your phone to contact you",
    },
    email: {
      required: "We need your email address to contact you",
      email: "Your email address must be in the format of name@domain.com"
    }, 
  },
});
});

// Курсор в начале
$.fn.setCursorPosition = function(pos) {
  if ($(this).get(0).setSelectionRange) {
    $(this).get(0).setSelectionRange(pos, pos);
  } else if ($(this).get(0).createTextRange) {
    var range = $(this).get(0).createTextRange();
    range.collapse(true);
    range.moveEnd('character', pos);
    range.moveStart('character', pos);
    range.select();
  }
};
$(".modal__input--phone").click(function(){
  $(this).setCursorPosition(3);
}).mask("+7(999) 999-9999");

$(".footer__input--phone").click(function(){
  $(this).setCursorPosition(3);
}).mask("+7(999) 999-9999");

// Маски
$(".modal__input--phone").mask("+7(999) 999-99-99");
$(".footer__input--phone").mask("+7(999) 999-99-99");

// Очистка форм
$( '.form' ).each(function(){
    this.reset();
});

$( '.subscribe' ).each(function(){
    this.reset();
});

});