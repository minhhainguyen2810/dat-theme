


<footer>

  <div class="footer-bottom">
    <div class="inner-bottom">
      <?php
        if(is_active_sidebar('widget-footer-bottom')){
          dynamic_sidebar('widget-footer-bottom');
        }
      ?>
    </div>
  </div>

</footer>

<?php wp_footer(); ?>

</body>
</html>
