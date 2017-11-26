"use strict";

// This code add and remove to woo tabs bootstrap4 active class to anchor element
$( "li.nav-item.active a" ).addClass( "active" );
$( 'li.nav-item a' ).click(function(e){
  "use strict";
  $( 'li.nav-item a' ).removeClass("active"); // remove class from other tab
  $(this).addClass("active"); // set class to current clicked tab

});
// Close bs4 tabs


// Mini Cart button open Woo widget hover or click function
// $('#cart').on('mouseenter', function () {
//   $(".box").slideDown(600);
//   console.log("IN");
//   });
// $('#cart').on('mouseleave', function () {
//   $(".box").slideUp(600);
//   console.log("OUT");
//   });

$("#cart").click(function(){
  $(".box").slideToggle(600);
});
// Close Mini Cart


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
  'action': 'mode_theme_update_mini_cart'
};
$.post(
  woocommerce_params.ajax_url, // The AJAX URL
  data, // Send our PHP function
  function(response){
    $('#mode-mini-cart').html(response); // Repopulate the specific element with the new content
  }
);
// Close anon function.
