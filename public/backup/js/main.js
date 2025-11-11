/**
* Template Name: BizPage - v4.0.2
* Template URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
(function($) {
  "use strict";

  // Preloader
  $(window).on('load', function() {
    if ($('#preloader').length) {
      $('#preloader').delay(100).fadeOut('slow', function() {
        $(this).remove();
      });
    }
  });

    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5e2ee81d8e78b86ed8ab439c/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();


  // Smooth scroll for the navigation menu and links with .scrollto classes
  var scrolltoOffset = $('#header').outerHeight() - 17;
  $(document).on('click', '.nav-menu a, .mobile-nav a, .scrollto', function(e) {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      if (target.length) {
        e.preventDefault();

        var scrollto = target.offset().top - scrolltoOffset;

        if ($(this).attr("href") == '#header') {
          scrollto = 0;
        }

        $('html, body').animate({
          scrollTop: scrollto
        }, 1500, 'easeInOutExpo');

        if ($(this).parents('.nav-menu, .mobile-nav').length) {
          $('.nav-menu .active, .mobile-nav .active').removeClass('active');
          $(this).closest('li').addClass('active');
        }

        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
          $('.mobile-nav-overly').fadeOut();
        }
        return false;
      }
    }
  });

  // Activate smooth scroll on page load with hash links in the url
  $(document).ready(function() {
    if (window.location.hash) {
      var initial_nav = window.location.hash;
      if ($(initial_nav).length) {
        var scrollto = $(initial_nav).offset().top - scrolltoOffset;
        $('html, body').animate({
          scrollTop: scrollto
        }, 1500, 'easeInOutExpo');
      }
    }
  });

  // Mobile Navigation
  if ($('.nav-menu').length) {
    var $mobile_nav = $('.nav-menu').clone().prop({
      class: 'mobile-nav d-lg-none'
    });
    $('body').append($mobile_nav);
    $('body').prepend('<button type="button" class="mobile-nav-toggle d-lg-none"><i class="icofont-navigation-menu"></i></button>');
    $('body').append('<div class="mobile-nav-overly"></div>');

    $(document).on('click', '.mobile-nav-toggle', function(e) {
      $('body').toggleClass('mobile-nav-active');
      $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
      $('.mobile-nav-overly').toggle();
    });

    $(document).on('click', '.mobile-nav .drop-down > a', function(e) {
      e.preventDefault();
      $(this).next().slideToggle(300);
      $(this).parent().toggleClass('active');
    });

    $(document).click(function(e) {
      var container = $(".mobile-nav, .mobile-nav-toggle");
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
          $('.mobile-nav-overly').fadeOut();
        }
      }
    });
  } else if ($(".mobile-nav, .mobile-nav-toggle").length) {
    $(".mobile-nav, .mobile-nav-toggle").hide();
  }

  // Header scroll class
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('#header').addClass('header-scrolled');
    } else {
      $('#header').removeClass('header-scrolled');
    }
  });

  if ($(window).scrollTop() > 100) {
    $('#header').addClass('header-scrolled');
  }

  // Navigation active state on scroll
//   var nav_sections = $('section');
//   var main_nav = $('.nav-menu, .mobile-nav');

//   $(window).on('scroll', function() {
//     var cur_pos = $(this).scrollTop() + 200;

//     nav_sections.each(function() {
//       var top = $(this).offset().top,
//         bottom = top + $(this).outerHeight();

//       if (cur_pos >= top && cur_pos <= bottom) {
//         if (cur_pos <= bottom) {
//           main_nav.find('li').removeClass('active');
//         }
//         main_nav.find('a[href="#' + $(this).attr('id') + '"]').parent('li').addClass('active');
//       }
//       if (cur_pos < 300) {
//         $(".nav-menu ul:first li:first").addClass('active');
//       }
//     });
//   });


  // Intro carousel
  var introCarousel = $(".carousel");
  var introCarouselIndicators = $(".carousel-indicators");
  introCarousel.find(".carousel-inner").children(".carousel-item").each(function(index) {
    (index === 0) ?
    introCarouselIndicators.append("<li data-target='#introCarousel' data-slide-to='" + index + "' class='active'></li>"):
      introCarouselIndicators.append("<li data-target='#introCarousel' data-slide-to='" + index + "'></li>");
  });

  introCarousel.on('slid.bs.carousel', function(e) {
    $(this).find('h2').addClass('animate__animated animate__fadeInDown');
    $(this).find('p, .btn-get-started').addClass('animate__animated animate__fadeInUp');
  });

  // Skills section
  $('#skills').waypoint(function() {
    $('.progress .progress-bar').each(function() {
      $(this).css("width", $(this).attr("aria-valuenow") + '%');
    });
  }, {
    offset: '80%'
  });

  // jQuery counterUp (used in Facts section)
  $('[data-toggle="counter-up"]').counterUp({
    delay: 10,
    time: 1000
  });

  // Porfolio isotope and filter
  var portfolioIsotope = $('.portfolio-container').isotope({
    itemSelector: '.portfolio-item',
    layoutMode: 'fitRows'
  });

  $('#portfolio-flters li').on('click', function() {
    $("#portfolio-flters li").removeClass('filter-active');
    $(this).addClass('filter-active');

    portfolioIsotope.isotope({
      filter: $(this).data('filter')
    });
    aos_init();
  });

  // Initiate venobox (lightbox feature used in portofilo)
  $(document).ready(function() {
    $('.venobox').venobox();
  });

  // Clients carousel (uses the Owl Carousel library)
  $(".clients-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    responsive: {
      0: {
        items: 2
      },
      768: {
        items: 4
      },
      900: {
        items: 6
      }
    }
  });

  // Testimonials carousel (uses the Owl Carousel library)
  $(".testimonials-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    items: 1
  });

  // Portfolio details carousel
  $(".portfolio-details-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    items: 1
  });

  // Init AOS
  function aos_init() {
    AOS.init({
      duration: 1000,
      once: true
    });
  }
  $(window).on('load', function() {
    aos_init();
  });

})(jQuery);

var $BMIMetric = true;


    $(document).on('click', '.bmi-change-metric.hover', function () {


        $('#bmi-calc-form')[0].reset();
        $('.bmi-results-container>div.card-body>.bmi-c').slideUp(600, 'easeInOutCubic', function () {
        })

        $('.bmi-change-metric').not($('.bmi-change-metric.hover')).addClass('hover')
        $(this).removeClass('hover')
        if ($(this).data('type') == 'Metric') {
            $BMIMetric = true;
            $("#bmi-kilograms").attr('placeholder', 'Kilograms')
            $("#bmi-meters").attr('placeholder', 'Meters')
            $("#bmi-centimeters").attr('placeholder', 'Centimeters')
        } else {
            $BMIMetric = false;
            $("#bmi-kilograms").attr('placeholder', 'Pounds')
            $("#bmi-meters").attr('placeholder', 'Feet')
            $("#bmi-centimeters").attr('placeholder', 'Inches')
        }

    })


    function BMIAnimateAmount(bmi) {

        $({Counter: 0}).animate({Counter: bmi}, {
            duration: 1000,
            easing: 'swing',
            step: function () {
                $('.bmi-result-amount').text(this.Counter.toFixed(1));
            }
        });

    }

    function imptomet(feet, inches) {

        met = parseInt(feet) * 30.48
        met = (parseInt(inches) * 2.54) + met;
        return met / 100;
    }

    $(document).on('click', '#bmi-calc-button', function () {

        form = $('#bmi-calc-form').parsley();


        form.validate();

        if (!form.isValid()) {
            return false;
        }


        var weight = ($BMIMetric ? parseInt($("#bmi-kilograms").val()) : parseInt($("#bmi-kilograms").val()) * 0.45359237);
        var height = ($BMIMetric ? (parseInt($("#bmi-meters").val() * 100) + parseInt($("#bmi-centimeters").val())) / 100 : imptomet($("#bmi-meters").val(), $("#bmi-centimeters").val()));


        if (weight > 0 && height > 0) {


            var finalBmi = (weight / (height * height));


            finalBmi = finalBmi.toFixed(1)
            $(".bmi-result-amount-sm").html(finalBmi);
            $(".bmi-result-amount").html(0);
            if (finalBmi < 18.5) {
                $("#bmi-meaning").html("underweight");
            } else if (finalBmi > 18.5 && finalBmi < 24.9) {
                $("#bmi-meaning").html("normal");
            } else if (finalBmi > 24.9 && finalBmi < 29.99) {
                $("#bmi-meaning").html("overweight");
            } else {
                $("#bmi-meaning").html("obese");
            }


            var idealweight = idealW(height * 100)

            if (!idealweight) {
                $('#bmi-range-parent').hide()
            } else {

                $('#bmi-range-parent').slideDown('fast')
                $('#bmi-min-range').html(idealweight.min)
                $('#bmi-max-range').html(idealweight.max)
                $('#bmi-range-type').html($BMIMetric ? 'kilograms' : 'pounds')
            }
            $('.bmi-results-container>div.card-body>.bmi-c').slideDown(600, 'easeInOutCubic', function () {

                BMIAnimateAmount(finalBmi);
                var bmileft = $('.bmi-arrow').data('left');
                $('.bmi-arrow').animate({
                    left: BMIArrowPos(finalBmi) + '%'
                }, 1000, 'easeOutQuart')


            })
        }


    })


    function BMIArrowPos(BMI) {


        if (BMI < 18.5) {
            var Diff = (BMI / 18.5);
            var Percent = Diff * 25;
            return Percent.toFixed(2)
        }

        if (BMI >= 18.5 && BMI < 25) {
            Diff = ((BMI - 18.5) / (25 - 18.5));
            Percent = Diff * 25;
            return (Percent + 25).toFixed(2)
        }

        if (BMI >= 25 && BMI < 30) {
            Diff = ((BMI - 25) / (30 - 25));
            Percent = Diff * 25;
            return (Percent + 50).toFixed(2);
        }

        if (BMI >= 30) {

            if (BMI >= 40)
                return 100;

            Diff = ((BMI - 30) / (40 - 30));
            Percent = Diff * 25;
            return (Percent + 75).toFixed(2);
        }

    }



    function idealW(height) {

        var $idealW = {"148":{"min":"44","max":"55"},"150":{"min":"45","max":"56"},"152":{"min":"46","max":"58"},"154":{"min":"47","max":"59"},"156":{"min":"49","max":"61"},"158":{"min":"50","max":"62"},"160":{"min":"51","max":"64"},"162":{"min":"52","max":"66"},"164":{"min":"54","max":"67"},"166":{"min":"55","max":"69"},"168":{"min":"56","max":"71"},"170":{"min":"58","max":"72"},"172":{"min":"59","max":"74"},"174":{"min":"61","max":"76"},"176":{"min":"62","max":"77"},"178":{"min":"63","max":"79"},"180":{"min":"65","max":"81"},"182":{"min":"66","max":"83"},"184":{"min":"68","max":"85"},"186":{"min":"69","max":"86"},"188":{"min":"71","max":"88"},"190":{"min":"72","max":"90"},"192":{"min":"74","max":"92"},"194":{"min":"75","max":"94"},"196":{"min":"77","max":"96"},"200":{"min":"80","max":"100"},"202":{"min":"82","max":"102"},"204":{"min":"83","max":"104"}},
            $idealCW = false,
            $keyDiff = 2,
            $lastKey = 148;

        $.each($idealW, function (key, value) {

            $keyDiff = key - $lastKey;

            $lastKey = key;


            if (key == height || (key < height && key <= (height - ($keyDiff - 1)))) {
                $idealCW = value;

                return true;
            }

        });


        return $idealCW;

    };;