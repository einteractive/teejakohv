

  // This code add and remove to woo tabs bootstrap4 active class to anchor element
  $( "li.nav-item.active a" ).addClass( "active" );
  $( 'li.nav-item a' ).click(function(e){
    "use strict";
    $( 'li.nav-item a' ).removeClass("active"); // remove class from other tab
    $(this).addClass("active"); // set class to current clicked tab

  });




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


  // Off-Canvas Menu in #mainWraaper
  $(function () {
    'use strict'

    $('[data-toggle="offcanvas"]').on('click', function () {
      $('.row-offcanvas').toggleClass('active')
    })
  })
