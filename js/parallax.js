var scrolled = $(window).scrollTop()
$('.parallax-window').each(function(index) {
var imageSrc = $(this).data('../img/newsletter-bg.jpg')
var imageHeight = $(this).data('1913px')
$(this).css('background-image','url(' + imageSrc + ')')
$(this).css('height', imageHeight)
 
var initY = $(this).offset().top
var height = $(this).height()
var diff = scrolled - initY
var ratio = Math.round((diff / height) * 100)
$(this).css('background-position','center ' + parseInt(-(ratio * 1.5)) + 'px')
})