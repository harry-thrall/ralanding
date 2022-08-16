//Add class to navbar once user starts scrolling
jQuery(window).scroll(function () {
    if (jQuery(window).scrollTop() >= 100) {
      jQuery(".site-header").addClass("navbar-fixed-top");
    } else {
      jQuery(".site-header").removeClass("navbar-fixed-top");
    }
  });

  //Add animate class when window reaches the fold
function isScrolledIntoView(elem) {
    var docViewTop = jQuery(window).scrollTop() * 1.5 + 50;
    var docViewBottom = docViewTop + jQuery(window).height();
    var elemTop = jQuery(elem).offset().top * 1.5;
    var elemBottom = elemTop + jQuery(elem).height();
    return ((elemTop <= docViewBottom ) && elemBottom >= docViewTop );
}

jQuery(document).ready(function () {

	setTimeout(function(){
		
		jQuery('.animate-on-load').addClass('animate-complete');
		}, 500);
			
		jQuery('.animate').addClass('out-view');	
});

jQuery(window).scroll(function () {"use strict";
	
  jQuery('.animate').each(function() {   
      if (isScrolledIntoView(this) === true) {	
      
          jQuery(this).removeClass('out-view');
          jQuery(this).addClass('animate-complete'); 
      }
   });
   
});
//Animation Ends

//Slick Sliders
jQuery(document).ready(function(){
  jQuery('.team-slider').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 980,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 540,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  jQuery('.work-slider').slick({
    dots: true,
    infinite: true,
    speed: 300,
    arrows: true,
    prevArrow: '<i class="fas fa-arrow-circle-left"></i>',
    nextArrow: '<i class="fas fa-arrow-circle-right"></i>',
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1450,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 980,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 540,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });
});

//Open and Close the navigation menu

jQuery(document).ready(function () {
  jQuery(".toggle").change(function () {
    console.log("changed");
    if (this.checked) {
      jQuery(".nav-menu").addClass("opened animate-complete");
      jQuery("body").addClass("no-scroll");
    } else {
      closeMenu();
    }
  });

  jQuery(".menu-close").on("click", function (e) {
    e.preventDefault();
    closeMenu();
  });

  jQuery(".menu-overlay").on("click", function () {
    closeMenu();
  });

  function closeMenu() {
    jQuery(".nav-menu").removeClass("opened animate-complete");
    jQuery("body").removeClass("no-scroll");
    jQuery(".toggle").removeAttr("checked");
  }

  jQuery('.scroll-text').on('click', function(e){
    e.preventDefault();
    console.log('clicked');
    jQuery('html, body').animate({
      scrollTop: jQuery(".content-wrapper").offset().top
  }, 2000);
  });
});