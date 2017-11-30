<!-- Start Footer.php -->
</div> <!-- /#mainWraaper -->
</div> <!-- /#mainCont -->

  <!-- Footer -->
  <footer class="bg-dark text-light" >
  <div class="container">
  <div class="row">
    <div class="col-6 col-lg-3">
      <ul class="navbar">
        <li>
          <?php if ( ! dynamic_sidebar( 'menu-footer' ) ): ?> 	<?php endif; ?>
        </li>
      </ul>

    </div>
    <div class="col-6 col-lg-3">
      <?php if ( ! dynamic_sidebar( 'myaccount-footer' ) ): ?> 	<?php endif; ?>
    </div>
    <div class="col-6 col-lg-3">
      <h3><?php _e('Follow us','teejakohv') ?></h3>

      <a href="https://www.facebook.com/TEEjaKOHV/" class="facebook text-light" target="_blank"><span class="fa-stack fa-lg">
          <i class="fa fa-circle fa-stack-2x text-blue"></i>
          <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
      </span>Facebook</a><br>

    </div>

    <div class="col-6 col-lg-3">
      <h3>Contact us</h3>
      <address>
        <strong>RC TRADING OÜ</strong><br />
        Redise tn 8-15, <br />
        Harjumaa, Laagri, 76401<br />
        <abbr title="Phone"><?php _e('Tel','teejakohv') ?>:</abbr> <a href="tel:+37255923710">(372) 5592-3710</a>
         <a href="mailto:info@teejakohv.ee">info@teejakohv.ee</a>

      </address>
    </div>

  </div>
  <hr class="border-success">

  <p class="text-success developers-link"><small><?php bloginfo('name'); ?> <?php echo date('Y'); ?> @ <a class="developers-link" href="www.iweb.ee" target="_blank">iweb.ee</small></p>
</div>



      </footer>

    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js" integrity="sha256-xNjb53/rY+WmG+4L6tTl9m6PpqknWZvRt0rO1SRnJzw=" crossorigin="anonymous"></script>

    <?php wp_footer(); ?>
  </body>
</html>
