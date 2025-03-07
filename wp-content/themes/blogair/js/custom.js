jQuery(document).ready(function($){
  var startTab = function(elem,first_focus,close_button){
    var tabbable = elem.find('select, input, textarea, button, a, [href],[tabindex]:not([tabindex="-1"])').filter(':visible');

    var firstTabbable = tabbable.first();
    var lastTabbable = tabbable.last();
    first_focus.focus();

    lastTabbable.on('keydown', function (e) {
      if ((e.which === 9 && !e.shiftKey)) {
        e.preventDefault();
        firstTabbable.focus();
      }
    });
    firstTabbable.on('keydown', function (e) {
      if ((e.which === 9 && e.shiftKey)) {
        e.preventDefault();
        lastTabbable.focus();
      }
    });

    elem.on('keyup', function (e) {
      if (e.keyCode === 27) {
        close_button.click();
      };
    });
  };

  $('.navbar-toggler').on('click', function(){
    $('.nav-menu').addClass("show");
    $('.body-overlay').addClass('active');
    startTab($('.nav-menu'),$('.primary-menu-list > li:first-of-type a'),$('.navbar-close'));
  });
  $('.navbar-close').on('click', function(){
    $('.nav-menu').removeClass("show");
    $('.body-overlay').removeClass('active');
    $('.navbar-toggler').focus();
  });
  $('.body-overlay').on('click', function () {
    $(".nav-menu").removeClass("show");
    $('.body-overlay').removeClass('active');
    $('.navbar-toggler').focus();
  });
  
  // Info Header
  $('.bs-info-list').on('click', function(e){
    $('.sidebar-one').addClass("active");
    startTab($('.sidebar-one__content'),$('.sidebar-one__logo > li:first-of-type a'),$('.sidebar-one__close'));
    return false;
  });
  $('.sidebar-one__close').on('click', function(){
    $('.sidebar-one').removeClass("active");
    $('.bs-info-list').focus();
  });
  $('.sidebar-one__overlay').on('click', function(){
    $('.sidebar-one').removeClass("active");
    $('.bs-info-list').focus();
  });

  $('.nav-menu').find('.menu-item-has-children > a').each(function(){
    $('<button type="button" class="toggle-menu"><i class="fa fa-angle-down"></i></button>').insertAfter($(this));
  });

  // expands the dropdown menu on each click
  $('.nav-menu').find('li .toggle-menu').on('click', function(e) {
    e.preventDefault();
    $(this).parent('li').children('ul').stop(true, true).slideToggle(350);
    $(document).find('li.active ul.sub-menu').css('display', 'none');
    $(document).find('li.active').removeClass('active');
  });

   // Sticky Header
  if ($(".bs-navigation_wrapper").length > 0) {
    $(window).on('scroll', function() {
      if ($(window).scrollTop() >= 250) {
        $('.is_sticky').addClass('is-sticky-menu');
      }
      else {
        $('.is_sticky').removeClass('is-sticky-menu');
      }
    });
  }
  /*-- OWL Carousel Start --*/
  function ThemeOwlCaousel($elem) {
    $elem.owlCarousel({
      rtl: $("html").attr("dir") == 'rtl' ? true : false,
      items: $elem.data("collg"),
      margin: $elem.data("itemspace"),
      autoHeight: true,
      loop: $elem.data("loop"),
      center: $elem.data("center"),
      thumbs: false,
      thumbImage: false,
      // autoplay: $elem.data("autoplay"),
      autoplay:false,
      autoplayTimeout: $elem.data("autoplaytimeout"),
      animateIn: $elem.data("animatein"),
      animateOut: $elem.data("animateout"),
      autoplayHoverPause: true,
      smartSpeed: $elem.data("smartspeed"),
      dots: $elem.data("dots"),
      nav: $elem.data("nav"),
      navText:['<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 557.97 1061" style="enable-background:new 0 0 557.97 1061;" xml:space="preserve" class="blf__svg  replaced-svg"><path d="M557.97,554.2c0,4.13,0,8.26,0,12.39c-0.37,2.83-0.75,5.66-1.11,8.49c-2.47,19.12-10.14,35.74-23.81,49.46  c-1.02,1.02-2.42,1.87-3.79,2.31c-8.96,2.89-18.12,3.28-27.38,1.91c-13.68-2.03-26.18-7.3-38.1-14.08  c-21.62-12.31-40.29-28.39-57.82-45.86c-28.44-28.34-53.31-59.63-76.03-92.68c-0.61-0.89-1.29-1.73-2.3-3.08  c-0.1,1.2-0.17,1.63-0.17,2.06c0.03,32.31-0.98,64.6-3.29,96.83c-1.56,21.73-3.32,43.46-5.57,65.13  c-2.71,26.12-6.58,52.09-11.66,77.88c-6.4,32.52-15.07,64.34-28.3,94.82c-22.74,52.42-51.12,101.67-83.67,148.55  c-17.42,25.09-35.96,49.32-57.81,70.77c-14.1,13.84-28.57,27.36-48.82,31.92c-1.97,0-3.95,0-5.92,0c-3.98-1.33-7.87-2.73-10.95-5.86  c-5.86-5.95-8.47-13.2-8.88-21.34c-0.68-13.44,2.95-26.11,7.27-38.6c7.44-21.55,17.29-42.09,27.01-62.67  c14.89-31.52,29.92-62.97,43.1-95.26c17.4-42.65,30.2-86.59,37.18-132.14c3.19-20.81,5.97-41.71,8.22-62.64  c2.09-19.52,3.54-39.12,4.7-58.73c1.05-17.73,1.42-35.5,1.92-53.26c0.95-34.02,0.14-68.02-1.36-102c-0.16-3.52-0.46-7.03-0.7-10.54  c-1.06,0.87-1.57,1.78-2.04,2.72c-18.76,36.7-39.4,72.27-63.39,105.83c-13.17,18.43-27.28,36.08-44.08,51.41  c-9.45,8.62-19.55,16.34-31.6,21.09c-7.23,2.86-14.69,4.16-22.4,2.77c-13.71-2.47-20.98-11.51-24.1-24.42  c-1.07-4.42-1.54-8.97-2.29-13.47c0-4.49,0-8.98,0-13.46c0.18-0.86,0.42-1.72,0.53-2.59c1.04-8.27,1.79-16.58,3.14-24.79  c3.57-21.68,9.15-42.91,15.05-64.05c9.97-35.71,20.36-71.3,30.05-107.09c9.64-35.6,17.21-71.58,18.86-108.63  c1.27-28.54,0.95-57.05,0.09-85.58c-0.86-28.33-2.7-56.65-1.36-85.02c0.56-11.84,1.68-23.63,4.84-35.09  C75.99,20.25,84.24,5.72,102.87,0c1.8,0,3.59,0,5.39,0c5.02,1.57,10.2,2.77,15.04,4.79c10.07,4.19,19.11,10.23,27.92,16.58  c22.42,16.14,42.81,34.66,62.61,53.83c49.96,48.37,96.11,100.26,141.08,153.24c9.64,11.35,18.66,23.27,28.83,34.13  c38.53,41.13,74.39,84.4,106,131.1c19.59,28.93,37.26,58.96,50.61,91.35c7.53,18.28,13.53,37.01,16.13,56.7  C557.02,545.87,557.47,550.04,557.97,554.2z"></path></svg>', '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 557.97 1061" style="enable-background:new 0 0 557.97 1061;" xml:space="preserve" class="blf__svg  replaced-svg"><path d="M557.97,554.2c0,4.13,0,8.26,0,12.39c-0.37,2.83-0.75,5.66-1.11,8.49c-2.47,19.12-10.14,35.74-23.81,49.46  c-1.02,1.02-2.42,1.87-3.79,2.31c-8.96,2.89-18.12,3.28-27.38,1.91c-13.68-2.03-26.18-7.3-38.1-14.08  c-21.62-12.31-40.29-28.39-57.82-45.86c-28.44-28.34-53.31-59.63-76.03-92.68c-0.61-0.89-1.29-1.73-2.3-3.08  c-0.1,1.2-0.17,1.63-0.17,2.06c0.03,32.31-0.98,64.6-3.29,96.83c-1.56,21.73-3.32,43.46-5.57,65.13  c-2.71,26.12-6.58,52.09-11.66,77.88c-6.4,32.52-15.07,64.34-28.3,94.82c-22.74,52.42-51.12,101.67-83.67,148.55  c-17.42,25.09-35.96,49.32-57.81,70.77c-14.1,13.84-28.57,27.36-48.82,31.92c-1.97,0-3.95,0-5.92,0c-3.98-1.33-7.87-2.73-10.95-5.86  c-5.86-5.95-8.47-13.2-8.88-21.34c-0.68-13.44,2.95-26.11,7.27-38.6c7.44-21.55,17.29-42.09,27.01-62.67  c14.89-31.52,29.92-62.97,43.1-95.26c17.4-42.65,30.2-86.59,37.18-132.14c3.19-20.81,5.97-41.71,8.22-62.64  c2.09-19.52,3.54-39.12,4.7-58.73c1.05-17.73,1.42-35.5,1.92-53.26c0.95-34.02,0.14-68.02-1.36-102c-0.16-3.52-0.46-7.03-0.7-10.54  c-1.06,0.87-1.57,1.78-2.04,2.72c-18.76,36.7-39.4,72.27-63.39,105.83c-13.17,18.43-27.28,36.08-44.08,51.41  c-9.45,8.62-19.55,16.34-31.6,21.09c-7.23,2.86-14.69,4.16-22.4,2.77c-13.71-2.47-20.98-11.51-24.1-24.42  c-1.07-4.42-1.54-8.97-2.29-13.47c0-4.49,0-8.98,0-13.46c0.18-0.86,0.42-1.72,0.53-2.59c1.04-8.27,1.79-16.58,3.14-24.79  c3.57-21.68,9.15-42.91,15.05-64.05c9.97-35.71,20.36-71.3,30.05-107.09c9.64-35.6,17.21-71.58,18.86-108.63  c1.27-28.54,0.95-57.05,0.09-85.58c-0.86-28.33-2.7-56.65-1.36-85.02c0.56-11.84,1.68-23.63,4.84-35.09  C75.99,20.25,84.24,5.72,102.87,0c1.8,0,3.59,0,5.39,0c5.02,1.57,10.2,2.77,15.04,4.79c10.07,4.19,19.11,10.23,27.92,16.58  c22.42,16.14,42.81,34.66,62.61,53.83c49.96,48.37,96.11,100.26,141.08,153.24c9.64,11.35,18.66,23.27,28.83,34.13  c38.53,41.13,74.39,84.4,106,131.1c19.59,28.93,37.26,58.96,50.61,91.35c7.53,18.28,13.53,37.01,16.13,56.7  C557.02,545.87,557.47,550.04,557.97,554.2z"></path></svg>'],
      singleItem: true,
      transitionStyle: "fade",
      touchDrag: true,
      mouseDrag: true,
      responsive: {
        0: {
          items: $elem.data("colxs"),
          nav: false
        },
        768: {
          items: $elem.data("colsm"),
          nav: false
        },
        992: {
          items: $elem.data("colmd"),
          nav: true
        },
        1200: {
          items: $elem.data("collg"),
          nav: true
        }
      },
    });

$elem.owlCarousel();
$elem.on('translate.owl.carousel', function(event) {
  var data_anim = $("[data-animation]");
  data_anim.each(function() {
    var anim_name = $(this).data('animation');
    $(this).removeClass('animated ' + anim_name).css('opacity', '0');
  });
});
$("[data-delay]").each(function() {
  var anim_del = $(this).data('delay');
  $(this).css('animation-delay', anim_del);
});
$("[data-duration]").each(function() {
  var anim_dur = $(this).data('duration');
  $(this).css('animation-duration', anim_dur);
});
$elem.on('translated.owl.carousel', function() {
  var data_anim = $elem.find('.owl-item.active').find("[data-animation]");
  data_anim.each(function() {
    var anim_name = $(this).data('animation');
    $(this).addClass('animated ' + anim_name).css('opacity', '1');
  });
});
}
if ($('.owl-carousel').length) {
  $('.owl-carousel').each(function() {
    new ThemeOwlCaousel($(this));
  });
}
});

// <!-- ====== SCROLL TO TOP SCRIPT ====== -->
var scrollToTopBtn = document.querySelector(".scrollToTopBtn");
var rootElement = document.documentElement;

function handleScroll() {
  // Do something on scroll - 0.15 is the percentage the page has to scroll before the button appears
  // This can be changed - experiment
  var scrollTotal = rootElement.scrollHeight - rootElement.clientHeight
  if ((rootElement.scrollTop / scrollTotal ) > 0.15) {
    // Show button
    scrollToTopBtn.classList.add("showBtn");
  } else {
    // Hide button
    scrollToTopBtn.classList.remove("showBtn");
  }
}
function scrollToTop() {
  // Scroll to top logic
  rootElement.scrollTo({
    top: 0,
    behavior: "smooth"
  })
}
if( scrollToTopBtn != null ){
  scrollToTopBtn.addEventListener("click", scrollToTop);
}
document.addEventListener("scroll", handleScroll);
jQuery(document).ready(function($){
  var current_url = window.location.href;
  var parts = current_url.split("/");

  var fileName = parts[parts.length - 1];
  var all_tags = $(".primary-menu-list .menu-item a");

  $(all_tags).each(function(ind, ele) {

    var anchor_element = ele.outerHTML;
    var anchor_url = $(anchor_element).attr('href');

    if (anchor_url == fileName ) {
      $(ele).parents('.menu-item').addClass('active');
    }

  });
});

document.addEventListener('DOMContentLoaded', function () {
    const marqueeWrapper = document.querySelector('.js-marquee-wrapper');
    const marqueeContent = marqueeWrapper.innerHTML;

    marqueeWrapper.innerHTML += marqueeContent;
});
