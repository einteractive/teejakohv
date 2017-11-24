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

  <p class="text-success" ><small><?php bloginfo('name'); ?> <?php echo date('Y'); ?> @ <a href="www.iweb.ee" target="_blank">iweb.ee</small></p>
</div>



      </footer>



    <?php wp_footer(); ?>
</body>
</html>
