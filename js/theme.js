  // This code add and remove to woo tabs bootstrap4 active class to anchor element
  $( "li.nav-item.active a" ).addClass( "active" );
  //$( "li.nav-item:not(.active) a" ).removeClass( "active" );

  $( 'li.nav-item a' ).click(function(e){
    $( 'li.nav-item a' ).removeClass("active"); // remove class from other tab
    $(this).addClass("active"); // set class to current clicked tab

  });


  // Off-Canvas Menu in #mainWraaper
  $(function () {
    'use strict'

    $('[data-toggle="offcanvas"]').on('click', function () {
      $('.row-offcanvas').toggleClass('active')
    })
  })
