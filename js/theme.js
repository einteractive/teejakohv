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

}) // Close mini cart btn







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
  // $( ".ajax_add_to_cart" ).bind( "click", function() {
  //   update( $( "span.cart-badge" ) );
  // });
  // var pc = 1;
  // $(".ajax_add_to_cart").click(function(){
  //     pc += 1; console.log("+");
  //     $("span.cart-badge").text(pc);
  //
  // });
  // $("a.remove").click(function(){
  //     pc -= 1; console.log("-");
  //     $("span.cart-badge").text(pc);
  //
  // });



//   $( "button:last" ).click(function() {
//
//   update( $( "span.cart-badge" ) );
// });

function update( j ) {
  var n = parseInt( j.text(), 10 );
  j.text( n + 1 );
}

  // Add +1 cout to cart Button
  // Despay counts
  // If remove botton clicked remove count from cart btn



}) // Close Mini cart animation and count
