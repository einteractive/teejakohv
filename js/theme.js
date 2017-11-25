
$( "li.nav-item.active a" ).addClass( "active" );
    // Off-Canvas Menu in #mainWraaper
  $(function () {
    'use strict'

    $('[data-toggle="offcanvas"]').on('click', function () {
      $('.row-offcanvas').toggleClass('active')
    })
  })
