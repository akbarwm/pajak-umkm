/**
*
* -----------------------------------------------------------------------------
*
* Template : Neuron - Machine Learning & AI Startups HTML5 Template
*
* -----------------------------------------------------------------------------
*
**/

(function($) {
    "use strict";

    // sticky menu
    var header = $('.menu-sticky');
    var win = $(window);

    win.on('scroll', function() {
       var scroll = win.scrollTop();
       if (scroll < 200) {
           header.removeClass("sticky");
       } else {
           header.addClass("sticky");
       }

        $("section").each(function() {
        var elementTop = $(this).offset().top - $('#rs-header').outerHeight();
            if(scroll >= elementTop) {
                $(this).addClass('loaded');
            }
        });

    });

	// Testimonial Slider
    var sliderfor = $('.slider-for');
    if(sliderfor.length){
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: false,
            asNavFor: '.slider-nav',
        });
    }
    var slidernav = $('.slider-nav');
    if(slidernav.length){
        $('.slider-nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: false,
            arrows: false,
            vertical: true,
            centerMode: true,
            centerPadding: '0',
            focusOnSelect: true,
            directionNav: true,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        vertical: false,
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
              ]
        });
    }

	/*-------------------------------------
       Home page main Slider
    -------------------------------------*/
    // Declare Carousel jquery object
    var owl = $('#main-slider');
     if(owl.length){
        // Carousel initialization
        owl.owlCarousel({
          animateIn: 'fadeIn',
          items:1,
          autoplay:false,
          loop: true,
          dots: true,
          autoplayTimeout: 8000,
        });
      }
      // add animate.css class(es) to the elements to be animated
        function setAnimation ( _elem, _InOut ) {
          // Store all animationend event name in a string.
          // cf animate.css documentation
          var animationEndEvent = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

          _elem.each ( function () {
            var $elem = $(this);
            var $animationType = 'animated ' + $elem.data( 'animation-' + _InOut );

            $elem.addClass($animationType).one(animationEndEvent, function () {
              $elem.removeClass($animationType); // remove animate.css Class at the end of the animations
            });
          });
      }

       // Fired before current slide change
        owl.on('change.owl.carousel', function(event) {
            var $currentItem = $('.owl-item', owl).eq(event.item.index);
            var $elemsToanim = $currentItem.find("[data-animation-out]");
            setAnimation ($elemsToanim, 'out');
        });

       // Fired after current slide has been changed
        owl.on('changed.owl.carousel', function(event) {

            var $currentItem = $('.owl-item', owl).eq(event.item.index);
            var $elemsToanim = $currentItem.find("[data-animation-in]");
            setAnimation ($elemsToanim, 'in');
        })
    
    
    /*-------------------------------------
    OwlCarousel
    -------------------------------------*/
    $('.rs-carousel').each(function() {
        var owlCarousel = $(this),
        loop = owlCarousel.data('loop'),
        items = owlCarousel.data('items'),
        margin = owlCarousel.data('margin'),
        stagePadding = owlCarousel.data('stage-padding'),
        autoplay = owlCarousel.data('autoplay'),
        autoplayTimeout = owlCarousel.data('autoplay-timeout'),
        smartSpeed = owlCarousel.data('smart-speed'),
        dots = owlCarousel.data('dots'),
        nav = owlCarousel.data('nav'),
        navSpeed = owlCarousel.data('nav-speed'),
        xsDevice = owlCarousel.data('mobile-device'),
        xsDeviceNav = owlCarousel.data('mobile-device-nav'),
        xsDeviceDots = owlCarousel.data('mobile-device-dots'),
        smDevice = owlCarousel.data('ipad-device'),
        smDeviceNav = owlCarousel.data('ipad-device-nav'),
        smDeviceDots = owlCarousel.data('ipad-device-dots'),
        smDevice2 = owlCarousel.data('ipad-device2'),
        smDeviceNav2 = owlCarousel.data('ipad-device-nav2'),
        smDeviceDots2 = owlCarousel.data('ipad-device-dots2'),
        mdDevice = owlCarousel.data('md-device'),
        mdDeviceNav = owlCarousel.data('md-device-nav'),
        mdDeviceDots = owlCarousel.data('md-device-dots');
        owlCarousel.owlCarousel({
            loop: (loop ? true : false),
            items: (items ? items : 4),
            lazyLoad: true,
            margin: (margin ? margin : 0),
            //stagePadding: (stagePadding ? stagePadding : 0),
            autoplay: (autoplay ? true : false),
            autoplayTimeout: (autoplayTimeout ? autoplayTimeout : 1000),
            smartSpeed: (smartSpeed ? smartSpeed : 250),
            dots: (dots ? true : false),
            nav: (nav ? true : false),
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            navSpeed: (navSpeed ? true : false),
            responsiveClass: true,
            responsive: {
                0: {
                    items: (xsDevice ? xsDevice : 1),
                    nav: (xsDeviceNav ? true : false),
                    dots: (xsDeviceDots ? true : false)
                },
                768: {
                    items: (smDevice2 ? smDevice : 2),
                    nav: (smDeviceNav2 ? true : false),
                    dots: (smDeviceDots2 ? true : false)
                },
                768: {
                    items: (smDevice ? smDevice : 3),
                    nav: (smDeviceNav ? true : false),
                    dots: (smDeviceDots ? true : false)
                },
                992: {
                    items: (mdDevice ? mdDevice : 4),
                    nav: (mdDeviceNav ? true : false),
                    dots: (mdDeviceDots ? true : false)
                }
            }
        });

    });

    // Counter Up
    if ($('.neuron-counter').length) {  
        $('.neuron-counter').counterUp({
            delay: 20,
            time: 1500
        });
    }

    //window load
   $(window).on( 'load', function() {
        $("#loading").delay(1500).fadeOut(500);
        $("#loading-center").on( 'click', function() {
        $("#loading").fadeOut(500);
        })
    })

   // Elements Animation
    if ($('.wow').length) {
        var wow = new WOW(
            {
                boxClass: 'wow', // animated element css class (default is wow)
                animateClass: 'animated', // animation css class (default is animated)
                offset: 0, // distance to the element when triggering the animation (default is 0)
                mobile: false, // trigger animations on mobile devices (default is true)
                live: true       // act on asynchronously loaded content (default is true)
            }
        );
        wow.init();
    }

    // magnificPopup init
    var imagepopup = $('.image-popup');
    if(imagepopup.length) {
        $('.image-popup').magnificPopup({
            type: 'image',
            callbacks: {
                beforeOpen: function() {
                   this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure animated zoomInDown');
                }
            },
            gallery: {
                enabled: true
            }
        });
    }

    // scrollTop init
    var totop = $('#scrollUp'); 
    if(totop.length){   
        win.on('scroll', function() {
            if (win.scrollTop() > 150) {
                totop.fadeIn();
            } else {
                totop.fadeOut();
            }
        });
        totop.on('click', function() {
            $("html,body").animate({
                scrollTop: 0
            }, 500)
        });
    }

    /*----------------------------
    Single Product js active
    ------------------------------ */

    var single_product_image = $('.single-product-image');
    if(single_product_image.length) {
        $('.single-product-image').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.single-product-nav'
        });
    }
    var single_product_nav = $('.single-product-nav');
    if(single_product_nav.length) {
        $('.single-product-nav').slick({
            slidesToShow: 4,
            asNavFor: '.single-product-image',
            dots: false,
            focusOnSelect: true,
            centerMode:false,
            responsive: [
                {
                  breakpoint: 768,
                  settings: {
                    slidesToShow: 2
                  }
                },
                {
                  breakpoint: 591,
                  settings: {
                    slidesToShow: 2
                  }
                }
              ] 
        });
    }

    // image loaded portfolio init
    var gridfilter = $('.grid');
        if(gridfilter.length){
        $('.grid').imagesLoaded(function() {
            $('.gridFilter').on('click', 'button', function() {
                var filterValue = $(this).attr('data-filter');
                $grid.isotope({
                    filter: filterValue
                });
            });
            var $grid = $('.grid').isotope({
                itemSelector: '.grid-item',
                percentPosition: true,
                masonry: {
                    columnWidth: '.grid-item',
                }
            });
        });
    }   
        
    // project Filter
    if ($('.gridFilter button').length) {
        var projectfiler = $('.gridFilter button');
            if(projectfiler.length){
            $('.gridFilter button').on('click', function(event) {
                $(this).siblings('.active').removeClass('active');
                $(this).addClass('active');
                event.preventDefault();
            });
        }
    }

    // onepage nav
    var navclose = $('#onepage-menu');
    if(navclose.length){
        $(".nav-menu li").on("click", function () {
            if ($(".showhide").is(":visible")) {
                $(".showhide").trigger("click");
            }
        });
        
        if ($.fn.onePageNav) {
            $(".nav-menu").onePageNav({
                currentClass: "active-menu"
            });
        }
    }

    //Videos popup jQuery 
    var popup = $('.popup-videos');
    if(popup.length) {
        $('.popup-videos').magnificPopup({
            disableOn: 10,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        }); 
    }

    /*-------------------------------------
       #Countedown
    -------------------------------------*/
    var countdown_first = $('#countdown');
    if(countdown_first.length){
        var countDownDate = new Date("Nov 12 2020, 19:00:00").getTime();

            // Update the count down every 1 second
            var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();
                
            // Find the distance between now and the count down date
            var distance = countDownDate - now;
                
            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                
            // Output the result in an element with id="countdown"
            document.getElementById("countdown").innerHTML = "<div>" + days + "<span>days</span>" + "</div>" + "<div>" + hours + "<span>hour</span> " + "</div>"
              + "<div>" + minutes + "<span>min</span> " + "</div>" + "<div>" + seconds + "<span>sec</span>" + "</div>";
                
            // If the count down is over, write some text 
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("countdown").innerHTML = "Website Is Ready";
            }
        });
    }


    // Chat Box Active
    $(".chatbox-part .chat-icon i").on('click', function(){
        $(this).parents('.chatbox-part').children('.chatbox').toggleClass("active");
    });

	$(".chatbox-part .chatbox-top .close-icon i").on('click', function(){
        $(this).parents('.chatbox-part').children('.chatbox').removeClass("active");
    });
    
})(jQuery);