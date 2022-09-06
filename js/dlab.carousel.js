/* JavaScript Document */
jQuery(window).on('load', function() {
    'use strict';
	
	// main-silder-swiper
	if(jQuery('.main-silder-swiper').length > 0){
		var swiper = new Swiper('.main-silder-swiper', {
			speed: 1500,
			parallax: true,
			effect: 'fade',
			loop:true,
			autoplay: {
			   delay: 3000,
			},
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
				renderBullet: function (index, className) {
				  return '<span class="' + className + '">' + (index + 1) + '</span>';
				},
			},
			navigation: {
				nextEl: '.swiper-button-next1',
				prevEl: '.swiper-button-prev1',
			},
		});
	}
	
	// main-silder-swiper
	if(jQuery('.main-silder-two').length > 0){
		var swiper = new Swiper('.main-silder-two', {
			speed: 1500,
			parallax: true,	
			autoplay: {
			   delay: 3000,
			},
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
				
			},
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
		});
	}
	
	
	// About Swiper
	if(jQuery('.about-swiper').length > 0){
		var aboutswiper1 = new Swiper('.about-swiper', {
			speed: 1500,
			slidesPerView: 3,
			spaceBetween: 0,
			autoplay: {
			   delay: 3000,
			},
			pagination: {
				el: '.swiper-pagination1',
				clickable: true,
				renderBullet: function (index, className) {
				  return '<span class="' + className + '">' + (index + 1) + '</span>';
				},
			},
			breakpoints: {
				1280: {
					slidesPerView: 3,
				},
				768: {
					slidesPerView: 2,
				},
				320: {
					slidesPerView: 1,
				},
			}
		});
	}
	
	// testimonial-one
	if(jQuery('.testimonial-one').length > 0){
		var aboutswiper1 = new Swiper('.testimonial-one', {
			speed: 1500,
			slidesPerView: 3,
			loop:true,
			spaceBetween: 30,
			autoplay: {
			   delay: 3000,
			},
			navigation: {
				nextEl: '.swiper-button-next7',
				prevEl: '.swiper-button-prev7',
			},
			breakpoints: {
				1280: {
					slidesPerView: 3,
				},
				768: {
					slidesPerView: 2,
				},
				320: {
					slidesPerView: 1,
				},
			}
		});
	}
	
	// Feature Swiper
	if(jQuery('.feature-swiper').length > 0){
		var featureswiper = new Swiper('.feature-swiper', {
			speed: 1500,
			slidesPerView: 1,
			effect: 'fade',
			spaceBetween: 0,
			autoplay: {
			   delay: 3000,
			},
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
				
			}
		});
	}
	
	

	function changeItemBoxed() {
		if($("body").hasClass("boxed")) {
			return 3;
		} else {
			return 4;
		}
	}
	
	// Deal Swiper
	if(jQuery('.deal-swiper').length > 0){
		var dealswiper = new Swiper('.deal-swiper', {
			speed: 1500,
			slidesPerView: changeItemBoxed(),
			spaceBetween: 30,
			autoplay: {
			   delay: 3000,
			},
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
				
			},
			breakpoints: {
				1600: {
					slidesPerView: changeItemBoxed(),
				},
				1200: {
					spaceBetween: 30,
					slidesPerView: 3,
				},
				991: {
					slidesPerView: 2,
				},
				768: {
					slidesPerView: 2,
					spaceBetween: 30
				},
				320: {
					slidesPerView: 1,
				},
			}
		});
	}
	
	// Deal Swiper
	if(jQuery('.new-item').length > 0){
		var dealswiper = new Swiper('.new-item', {
			speed: 1000,
			slidesPerView: 3,
			spaceBetween: 0,
			loop:true,
			autoplay: {
			   delay: 1000,
			},
			navigation: {
				nextEl: '.swiper-button-next6',
				prevEl: '.swiper-button-prev6',
			},
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
				
			},
			breakpoints: {
				1600: {
					slidesPerView: 3,
				},
				1200: {
					slidesPerView: 3,
				},
				991: {
					slidesPerView: 2,
				},
				768: {
					slidesPerView: 2,
				},
				320: {
					slidesPerView: 1,
				},
			}
		});
	}
	
	// similar-slider
	if(jQuery('.similar-slider').length > 0){
		var dealswiper = new Swiper('.similar-slider', {
			speed: 1500,
			slidesPerView: 3,
			spaceBetween: 30,
			observer: true,
			observeParents: true,
			autoplay: {
			   delay: 3000,
			},
			navigation: {
				nextEl: '.swiper-button-next2',
				prevEl: '.swiper-button-prev2',
			},
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
				
			},
			breakpoints: {
				1400: {
					slidesPerView: 3,
				},
				1200: {
					spaceBetween: 30,
					slidesPerView: 3,
				},
				991: {
					slidesPerView: 2,
				},
				768: {
					slidesPerView: 2,
					spaceBetween: 30
				},
				320: {
					slidesPerView: 1,
				},
			}
		});
	}
	
	// similar-slider
	if(jQuery('.similar-slider-2').length > 0){
		var dealswiper = new Swiper('.similar-slider-2', {
			speed: 1500,
			slidesPerView: 3,
			spaceBetween: 30,
			observer: true,
			observeParents: true,
			autoplay: {
			   delay: 3000,
			},
			navigation: {
				nextEl: '.swiper-button-next2',
				prevEl: '.swiper-button-prev2',
			},
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
				
			},
			breakpoints: {
				1400: {
					slidesPerView: 3,
				},
				1200: {
					spaceBetween: 30,
					slidesPerView: 3,
				},
				991: {
					slidesPerView: 2,
				},
				768: {
					slidesPerView: 2,
					spaceBetween: 30
				},
				320: {
					slidesPerView: 1,
				},
			}
		});
	}
	
	// similar-slider
	if(jQuery('.similar-slider-3').length > 0){
		var dealswiper = new Swiper('.similar-slider-3', {
			speed: 1500,
			slidesPerView: 3,
			spaceBetween: 30,
			observer: true,
			observeParents: true,
			autoplay: {
			   delay: 3000,
			},
			navigation: {
				nextEl: '.swiper-button-next2',
				prevEl: '.swiper-button-prev2',
			},
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
				
			},
			breakpoints: {
				1400: {
					slidesPerView: 3,
				},
				1200: {
					spaceBetween: 30,
					slidesPerView: 3,
				},
				991: {
					slidesPerView: 2,
				},
				768: {
					slidesPerView: 2,
					spaceBetween: 30
				},
				320: {
					slidesPerView: 1,
				},
			}
		});
	}
	
	// similar-slider
	if(jQuery('.similar-slider-4').length > 0){
		var dealswiper = new Swiper('.similar-slider-4', {
			speed: 1500,
			slidesPerView: 3,
			spaceBetween: 30,
			observer: true,
			observeParents: true,
			autoplay: {
			   delay: 3000,
			},
			navigation: {
				nextEl: '.swiper-button-next3',
				prevEl: '.swiper-button-prev3',
			},
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
				
			},
			breakpoints: {
				1400: {
					slidesPerView: 3,
				},
				1200: {
					spaceBetween: 30,
					slidesPerView: 3,
				},
				991: {
					slidesPerView: 2,
				},
				768: {
					slidesPerView: 2,
					spaceBetween: 30
				},
				320: {
					slidesPerView: 1,
				},
			}
		});
	}
	
	// post-swiper
	if(jQuery('.post-swiper').length > 0){
		var swiper = new Swiper('.post-swiper', {
			speed: 1500,
			parallax: true,
			slidesPerView: 1,
			spaceBetween: 0,
			loop:true,
			autoplay: {
			   delay: 2700,
			},
			navigation: {
				nextEl: '.next-post-swiper-btn',
				prevEl: '.prev-post-swiper-btn',
			}
		});
	}
	
	// post-slider
	if(jQuery('.post-slider').length > 0){
		var dealswiper = new Swiper('.post-slider', {
			speed: 1500,
			slidesPerView: 3,
			spaceBetween: 30,
			autoplay: {
			   delay: 3000,
			},
			navigation: {
				nextEl: '.swiper-button-next2',
				prevEl: '.swiper-button-prev2',
			},
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
				
			},
			breakpoints: {
				1400: {
					slidesPerView: 3,
				},
				1200: {
					spaceBetween: 30,
					slidesPerView: 3,
				},
				991: {
					slidesPerView: 2,
				},
				768: {
					slidesPerView: 1,
					spaceBetween: 30
				},
				320: {
					slidesPerView: 1,
				},
			}
		});
	}
	
	// city-swiper
	if(jQuery('.city-swiper').length > 0){
		var dealswiper = new Swiper('.city-swiper', {
			speed: 1500,
			slidesPerView: 5,
			spaceBetween: 30,
			loop:true,
			autoplay: {
			   delay: 3000,
			},
			navigation: {
				nextEl: '.swiper-button-next3',
				prevEl: '.swiper-button-prev3',
			},
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
				
			},
			breakpoints: {
				1400: {
					slidesPerView: 5,
				},
				1200: {
					spaceBetween: 30,
					slidesPerView: 5,
				},
				991: {
					slidesPerView: 4,
				},
				768: {
					slidesPerView: 3,
					spaceBetween: 30
				},
				320: {
					slidesPerView: 2,
				},
			}
		});
	}
	
	// brand-slider
	if(jQuery('.brand-slider').length > 0){
		var dealswiper = new Swiper('.brand-slider', {
			speed: 1500,
			slidesPerView: 6,
			spaceBetween: 30,
			loop:true,
			autoplay: {
			   delay: 1000,
			},
			navigation: {
				nextEl: '.swiper-button-next2',
				prevEl: '.swiper-button-prev2',
			},
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
				
			},
			breakpoints: {
				1400: {
					slidesPerView: 6,
				},
				1200: {
					spaceBetween: 30,
					slidesPerView: 6,
				},
				991: {
					slidesPerView: 5,
				},
				768: {
					slidesPerView: 3,
					spaceBetween: 30
				},
				320: {
					slidesPerView: 2,
				},
			}
		});
	}
	
	
	// specifications-slider
	if(jQuery('.specifications-slider').length > 0){
		var dealswiper = new Swiper('.specifications-slider', {
			speed: 1500,
			slidesPerView: 4,
			spaceBetween: 1,
			loop:true,
			autoplay: {
			   delay: 3000,
			},
			navigation: {
				nextEl: '.swiper-button-next2',
				prevEl: '.swiper-button-prev2',
			},
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
				
			},
			breakpoints: {
				1400: {
					slidesPerView: 4,
				},
				1200: {
					spaceBetween: 30,
					slidesPerView: 3,
				},
				768: {
					slidesPerView: 3,
				},
				500: {
					slidesPerView: 2,
					spaceBetween: 30
				},
				320: {
					slidesPerView: 1,
				},
			}
		});
	}
	
	
	// prev list slider
	if(jQuery('.prev-list-slider').length > 0){
		var dealswiper = new Swiper('.prev-list-slider', {
			speed: 1500,
			slidesPerView: 1,
			spaceBetween: 30,
			autoplay: {
			   delay: 3000,
			},
			navigation: {
				nextEl: '.swiper-button-next2',
				prevEl: '.swiper-button-prev2',
			},
		});
	}
	
	// single-image-swiper
	if(jQuery('.single-image-swiper').length > 0){
		var dealswiper = new Swiper('.single-image-swiper', {
			speed: 1500,
			slidesPerView: 1,
			effect:'fade',
			spaceBetween: 30,
			autoplay: {
			   delay: 3000,
			},
			navigation: {
				nextEl: '.swiper-button-next2',
				prevEl: '.swiper-button-prev2',
			},
		});
	}
	
	var swiper = new Swiper(".sync2", {
		spaceBetween: 30,
		slidesPerView: 'auto',
		freeMode: true,
		watchSlidesVisibility: true,
		watchSlidesProgress: true,
		breakpoints: {
			576: {
				spaceBetween: 30
			},
			320: {
				spaceBetween: 15
			}
		}
	});
	var swiper2 = new Swiper(".sync1", {
		spaceBetween: 10,
		navigation: {
		  nextEl: ".swiper-button-next",
		  prevEl: ".swiper-button-prev",
		},
		thumbs: {
		  swiper: swiper,
		},
	});
	
	
});
/* Document .ready END */



(function() {

  'use strict';

  // breakpoint where swiper will be destroyed
  // and switches to a dual-column layout
  const breakpoint = window.matchMedia( '(min-width:62em)' );

  // keep track of swiper instances to destroy later
  let mySwiper;

  //////////////////////////////////////////////////////////////////
  //////////////////////////////////////////////////////////////////
  //////////////////////////////////////////////////////////////////

  const breakpointChecker = function() {

    // if larger viewport and multi-row layout needed
    if ( breakpoint.matches === true ) {

      // clean up old instances and inline styles when available
	  if ( mySwiper !== undefined ) mySwiper.destroy( true, true );

	  // or/and do nothing
	  return;

      // else if a small viewport and single column layout needed
      } else if ( breakpoint.matches === false ) {

        // fire small viewport version of swiper
        return enableSwiper();

      }

  };

  const enableSwiper = function() {

    mySwiper = new Swiper ('.team-slider', {

      loop: true,
      
      slidesPerView: 'auto',

      //centeredSlides: true,

      //a11y: true,
      keyboardControl: true,
      grabCursor: true,

      // pagination
      pagination: '.swiper-pagination',
      paginationClickable: true,

    });

  };

  // keep an eye on viewport size changes
  breakpoint.addListener(breakpointChecker);

  // kickstart
  breakpointChecker();



})(); /* IIFE end */