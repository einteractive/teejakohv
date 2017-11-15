
// $( "ul" ).addClass( "nav" );
// $( "ul.nav li" ).addClass( "nav-item" );
// $( "ul.nav li.nav-item a" ).addClass( "nav-link" );
$( "li.nav-item a.nav-link span" ).removeClass( "wpml-ls-native" )

    // Off-Canvas Menu in #mainWraaper
  $(function () {
    'use strict'

    $('[data-toggle="offcanvas"]').on('click', function () {
      $('.row-offcanvas').toggleClass('active')
    })
  })
