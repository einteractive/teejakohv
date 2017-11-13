jQuery(document).ready(function($) {
    // Внутри этой функции $() будет работать как синоним jQuery()

    // Off-Canvas Menu in #mainWraaper
  $(function () {
    'use strict'

    $('[data-toggle="offcanvas"]').on('click', function () {
      $('.row-offcanvas').toggleClass('active')
    })
  })
});
