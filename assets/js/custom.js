/**
 * AOS Scroll animation 
 */
$('[data-aos]').parent().addClass('hideOverflowOnMobile');
 
/**
 * Preloader
 * */
$(window).on('load', function() { // makes sure the whole site is loaded
  $('#status').fadeOut(); // will first fade out the loading animation
  $('#preloader').delay(10).fadeOut(700 ); // will fade out the white DIV that covers the website.
  $('body').delay(50).css({'overflow':'visible'});
})


$(".search-button-main").on('click', function(){
// $("#bs-example-navbar-collapse-1").fadeOut()
// $('#search-form-main').fadeIn()
//$(this).fadeOut('fast')
//$('#search-form-main').fadeIn({queue: false, duration: 'slow'});
if($('#search-form-main').hasClass("search-form-main-display")){
  $('#search-form-main').removeClass("search-form-main-display")
  $('.search-button-main i').addClass("fa-search")
  $('.search-button-main i').removeClass("fa-times")
}else{
  $('#search-form-main').addClass("search-form-main-display")
  $('.search-button-main i').removeClass("fa-search")
  $('.search-button-main i').addClass("fa-times")
}
//$('#search-form-main').animate({ top: "-10px" }, 'slow');
})

/**
 * Sticky menu
 * */

$(document).ready(function(){
    $(window).bind('scroll', function() {
          if ($(window).scrollTop() > 100) {
            $('.header .navbar').addClass('sticky')
            $('#search-form-main').addClass('sticky-search')
            $('.nav-placeholder').css('height', 100);

          }
          else {
              $('.header .navbar').removeClass('sticky');
              $('#search-form-main').removeClass('sticky-search')
              $('.nav-placeholder').css('height', 0);
          }
     });
 });

 
/**
 * CONTADOR HOME
 */

$(window).scroll(testScroll);
var viewed = false;


  function isScrolledIntoView(elem) {
      var docViewTop = $(window).scrollTop();
      var docViewBottom = docViewTop + $(window).height();

      var elemTop = $(elem).offset().top;
      var elemBottom = elemTop + $(elem).height();

      return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
  }

  function testScroll() {
    if (typeof $('.numbers').offset() !== 'undefined') {
      if (isScrolledIntoView($(".numbers")) && !viewed) {
          viewed = true;
          $('.value').each(function () {
          $(this).prop('Counter',0).animate({
              Counter: $(this).text()
          }, {
              duration: 2000,
              easing: 'swing',
              step: function (now) {
                  $(this).text(Math.ceil(now));
              }
          });
        });
      }
    }
}
