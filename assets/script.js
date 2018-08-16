jQuery(document).ready(function($) {
 
    $(".scroll").click(function(event){   
    event.preventDefault();
    $('html,body').animate({scrollTop:$(this.hash).offset().top}, 800,'swing');
    });
    });





// uniform
    $(function () {
    $('input[type="checkbox"], input[type="radio"], select').uniform();
    });

// social icon
$(document).ready(function($) {
  $('.social i').tooltip('hide')
});

// 

var wow = new WOW(
  {
    boxClass:     'wowload',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset:       0,          // distance to the element when triggering the animation (default is 0)
    mobile:       true,       // trigger animations on mobile devices (default is true)
    live:         true        // act on asynchronously loaded content (default is true)
  }
);
wow.init();




$('.carousel').swipe( {
     swipeLeft: function() {
         $(this).carousel('next');
     },
     swipeRight: function() {
         $(this).carousel('prev');
     },
     allowPageScroll: 'vertical'
 });

/*
 **********************************************************
 * OPAQUE NAVBAR SCRIPT
 **********************************************************
 */

// Toggle tranparent navbar when the user scrolls the page

$(window).scroll(function() {
    if($(this).scrollTop() > 5)  /*height in pixels when the navbar becomes non opaque*/
    {
        $('.opaque-navbar').addClass('opaque');
        document.getElementById("img-bar-brand").style.transition = "background-color 1s ease";
        document.getElementById("img-bar-brand").style.backgroundColor = "#c0a16b";
    } else {
        $('.opaque-navbar').removeClass('opaque');
        document.getElementById("img-bar-brand").style.backgroundColor = "#c0a16b00";
    }
});

/* Demo Scripts for Bootstrap Carousel and Animate.css article
* on SitePoint by Maria Antonietta Perna
*/
(function($) {
    //Function to animate slider captions
    function doAnimations(elems) {
        //Cache the animationend event in a variable
        var animEndEv = "webkitAnimationEnd animationend";

        elems.each(function() {
            var $this = $(this),
                $animationType = $this.data("animation");
            $this.addClass($animationType).one(animEndEv, function() {
                $this.removeClass($animationType);
            });
        });
    }

    //Variables on page load
    var $myCarousel = $("#carouselExampleIndicators"),
        $firstAnimatingElems = $myCarousel
            .find(".carousel-item:first")
            .find("[data-animation ^= 'animated']");

    //Initialize carousel
    $myCarousel.carousel();

    //Animate captions in first slide on page load
    doAnimations($firstAnimatingElems);

    //Other slides to be animated on carousel slide event
    $myCarousel.on("slide.bs.carousel", function(e) {
        var $animatingElems = $(e.relatedTarget).find(
            "[data-animation ^= 'animated']"
        );
        doAnimations($animatingElems);
    });
})(jQuery);

// jQuery("#wowslider-container").wowSlider({effect:"rotate",prev:"",next:"",duration:20*100,delay:20*100,width:580,height:212,autoPlay:true,stopOnHover:false,loop:false,bullets:true,caption:true,captionEffect:"slide",controls:true,logo:"",images:0});


$(document).ready(function() {
    $('.carousel').carousel({
        interval: 6000
    })
});
