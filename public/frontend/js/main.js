/*
    Template Name: Bizniz - Corporate Creative Business Agency
    Template URI: https://devitems.com/html/business-preview/
    Description: This is html5 template
    Author: HasTech
    Author URI: https://devitems.com/
    Version: 1.0
*/
/*================================================
[  Table of contents  ]
================================================
	01. Sticky Menu
    02. Menu Open & Close
	03. Owl Carousel
    04. Portfolio Isotope
    05. Magnific Popup
    06. Counter Up
    07. ScrollUp
    08. Wow js
 
======================================
[ End table content ]
======================================*/

(function ($) {
	"use strict";
    
/*------------------------------------
    01. Sticky Menu
-------------------------------------- */  
    var windows = $(window);
    var stick = $(".header-sticky");
	windows.on('scroll',function() {    
		var scroll = windows.scrollTop();
		if (scroll < 245) {
			stick.removeClass("sticky");
		}else{
			stick.addClass("sticky");
		}
	}); 
    
/*------------------------------------
	 02. Menu Open & Close
-----------------------------------*/
    var menuOpen = $('.menu-open');
    var menuClose = $('.menu-close');
    var menuArea = $('#menu-area');
    var menuItem = $('.main-menu nav ul li a');
    menuArea.addClass('menuClose');
    menuOpen.on('click', function(){
        menuArea.removeClass('menuClose').addClass('menuOpen');
    })
    menuClose.on('click', function(){
        menuArea.addClass('menuClose').removeClass('menuOpen');
    })
    menuItem.on('click', function(){
        menuArea.addClass('menuClose').removeClass('menuOpen');
    })

/*----------------------------------------
    03. Owl Carousel
---------------------------------------- */
/*----------------------------------------
    Slider Carousel
---------------------------------------- */
    $(".slider-wrapper").owlCarousel({
        loop:true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        smartSpeed: 2500,
        items:1,
        nav:true,
        navText: ["<i class='ti-angle-double-left'></i>","<i class='ti-angle-double-right'></i>"],
        dots:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

/*-------------------------------------
    Testimonial Carousel
-------------------------------------- */
    $(".testimonial-owl").owlCarousel({
        loop:true,
        items:1,
        dots: true,
		nav:false,
        responsive:{
            0:{
                items:1
            },
            480:{
                items:1
            },
            768:{
                items:1
            }, 
            992:{
                items:1
            }, 
            1200:{
                items:1
            }
		}
    });
    
/*-------------------------------------
    Blog Carousel
-------------------------------------- */
    $(".blog-owl").owlCarousel({
        loop:true,
        items:1,
        dots: true,
		nav:false,
        responsive:{
            0:{
                items:1
            },
            480:{
                items:1
            },
            768:{
                items:2
            }, 
            992:{
                items:3
            }, 
            1200:{
                items:3
            }
		}
    });   
    
/*-------------------------------------
    Team Carousel
-------------------------------------- */
    $(".team-owl").owlCarousel({
        loop:true,
        items:1,
        dots: true,
		nav:false,
        responsive:{
            0:{
                items:1
            },
            480:{
                items:1
            },
            768:{
                items:3
            }, 
            992:{
                items:3
            }, 
            1200:{
                items:3
            }
		}
    });
    
/*-------------------------------------
    Client Carousel
-------------------------------------- */
    $(".client-owl").owlCarousel({
        loop:true,
        items:1,
        dots: true,
		nav:false,
        responsive:{
            0:{
                items:1
            },
            480:{
                items:1
            },
            768:{
                items:4
            }, 
            992:{
                items:5
            }, 
            1200:{
                items:5
            }
		}
    });
    
/*--------------------------
    04. Portfolio Isotope
---------------------------- */
    if($.fn.isotope){
        var $portfolio = $('.gallery_items');
        $portfolio.isotope({
            itemSelector: '.grid-item',
            filter: '*',
            layoutMode: 'fitRows',
        });
        $('.filter-menu li').on('click', function(){
            $('.filter-menu li').removeClass('current_menu_item');
            $(this).addClass('current_menu_item');
            var selector = $(this).attr('data-filter');
            $portfolio.isotope({
                filter: selector,
            });
        });
    };

    $('.grid').imagesLoaded( function() {

        // filter items on button click
        $('.portfolio-menu').on( 'click', 'button', function() {
          var filterValue = $(this).attr('data-filter');
          $grid.isotope({ filter: filterValue });
        });	

        // init Isotope
        var $grid = $('.grid').isotope({
          itemSelector: '.grid-item',
          percentPosition: true,
          masonry: {
            // use outer width of grid-sizer for columnWidth
            columnWidth: '.grid-item',
          }
        });
    });
    
    $('.portfolio-menu li').on('click', function(event) {
        $(this).siblings('.active').removeClass('active');
        $(this).addClass('active');
        event.preventDefault();
    });
    
/*--------------------------
    05. Magnific Popup
---------------------------- */  
    $('.video-popup').magnificPopup({
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        zoom: {
            enabled: true,
        }
    });
    
    $('.image-popup').magnificPopup({
        type: 'image',
        gallery:{
            enabled:true
        }
    });
    
/*--------------------------
    06. Counter Up
---------------------------- */	
    $('.counter').counterUp({
        delay: 70,
        time: 5000
    }); 
    
/*------------------------------------------
    07. ScrollUp
------------------------------------------- */	
	$.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });  
    
/*-------------------------------------------
    08. Wow js
--------------------------------------------- */    
    new WOW().init();
              

})(jQuery);  