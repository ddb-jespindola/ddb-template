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

/**
 * Search-Header Button
 * 

 */
$(".search-button-main").click( function(){
  console.log('Hola')
  
  if($('#search-form-main').hasClass("search-form-main-display")){
    $('#search-form-main').removeClass("search-form-main-display")
    $('.search-button-main span').addClass("icon-search-white")
    $('.search-button-main span').removeClass("icon-exit-white")
    $('.main-menu-ddb').attr("style", "display: flex !important")
  }else{
    $('#search-form-main').addClass("search-form-main-display")
    $('.search-button-main span').removeClass("icon-search-white")
    $('.search-button-main span').addClass("icon-exit-white")
    $('.main-menu-ddb').attr("style", "display: none !important")
    //$('#bs-example-navbar-collapse-1').hide()
  }
})

/**
* Sticky menu
*/
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

/***
 *  LAZY LOAD BACKGROUND IMAGES
 */

document.addEventListener("DOMContentLoaded", function() {
  var lazyBackgrounds = [].slice.call(document.querySelectorAll(".numbers"));

  if ("IntersectionObserver" in window) {
    let lazyBackgroundObserver = new IntersectionObserver(function(entries, observer) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
          lazyBackgroundObserver.unobserve(entry.target);
        }
      });
    });

    lazyBackgrounds.forEach(function(lazyBackground) {
      lazyBackgroundObserver.observe(lazyBackground);
    });
  }
});

/***
 *  LAZY LOAD ALL IMAGES
 */
document.addEventListener("DOMContentLoaded", function() {
  const imageObserver = new IntersectionObserver((entries, imgObserver) => {
      entries.forEach((entry) => {
          if (entry.isIntersecting) {
              const lazyImage = entry.target
              console.log("lazy loading ", lazyImage)
              lazyImage.src = lazyImage.dataset.src
          }
      })
  });
  const arr = document.querySelectorAll('img.lazy')
  arr.forEach((v) => {
      imageObserver.observe(v);
  })
})