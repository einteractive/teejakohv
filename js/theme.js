// function name demo
// Open
$(function () {
  'use strict'


}) // Close

// This code add and remove to woo tabs bootstrap4 active class to anchor element
$( "li.nav-item.active a" ).addClass( "active" );
$( 'li.nav-item a' ).click(function(e){
  "use strict";
  $( 'li.nav-item a' ).removeClass("active"); // remove class from other tab
  $(this).addClass("active"); // set class to current clicked tab

});
// Close bs4 tabs


// Mini Cart button open Woo widget hover or click function
$(function () {
  'use strict'

  // $('#cart').on('mouseenter', function () {
  //   $(".box").slideDown(500);
  //   console.log("IN");
  //   });
  // $('#cart').on('mouseleave', function () {
  //   $(".box").slideUp(500);
  //   console.log("OUT");
  //   // Need add slow effect
  // });

  $("#cart").click(function(){
    $(".box").slideToggle(600);
  });

}); // Close mini cart btn







// Off-Canvas Menu in #mainWraaper
$(function () {
  'use strict'

  $('[data-toggle="offcanvas"]').on('click', function () {
    $('.row-offcanvas').toggleClass('active')
  })
})
// Close Off-Canvas menu


// Define the PHP function to call from here
var data = {
  'action': 'theme_update_mini_cart'
};
$.post(
  woocommerce_params.ajax_url, // The AJAX URL
  data, // Send our PHP function
  function(response){
    $('#mode-mini-cart').html(response); // Repopulate the specific element with the new content
  }
);
// Close anon function.


// Mini cart animation and count
// Open
$(function () {
  'use strict'
  // Added lisener to add to cart botton
  $( ".ajax_add_to_cart" ).bind( "click", function() {
    console.log("animet");
    $(this).addClass("animet");
  });
  // var pc = 1;
  $(".ajax_add_to_cart").click(function(){


  });

}) // Close Mini cart animation and count


/*
	Add to cart fly effect with jQuery. - May 05, 2013
	(c) 2013 @ElmahdiMahmoud - fikra-masri.by
	license: https://www.opensource.org/licenses/mit-license.php
*/

$('.ajax_add_to_cart').on('click', function () {
        var cart = $('#cart');
        var imgtodrag = $(this).parent('li.product').find("a.woocommerce-LoopProduct-link img").eq(0);
        if (imgtodrag) {
            var imgclone = imgtodrag.clone()
                .offset({
                top: imgtodrag.offset().top,
                left: imgtodrag.offset().left
            })
                .css({
                    'opacity': '0.5',
                    'position': 'absolute',
                    'height': '150px',
                    'width': '150px',
                    'z-index': '1099'
            })
                .appendTo($('body'))
                .animate({
                    'top' : cart.offset().top + '50',
                    'left' : cart.offset().left + '50',
                    'width' : '75',
                    'height' : '75'
            }, 1000, 'easeInOutExpo');

            setTimeout(function () {
                cart.effect("shake", {
                    times: 2
                }, 200);
            }, 1500);

            imgclone.animate({
                'width': 0,
                'height': 0
            }, function () {
                $(this).detach()
            });
        }
    });
