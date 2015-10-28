<footer class="footer">
  <?php dynamic_sidebar('フッター１'); ?>
  <div class="footertext">
      <a href="<?php echo home_url('/');?>">
        <img alt="" src="<?php bloginfo('template_url');?>/images/logo-footer.png">
      </a>
      <address class="copyright">Copyright &copy; 2015 ONESE All Rights Reserved.</address>
  </div>
</footer>

  <?php wp_footer();?>
  <script src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.3.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/jquery-ui.min.js"></script>
  <script src="<?php bloginfo('template_url');?>/js/modernizr-custom.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/func.js"></script>
  <script src="<?php bloginfo('template_url');?>/js/jquery.slicknav.js"></script>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-54505331-5', 'auto');
    ga('send', 'pageview');
  </script>
</body>
</html>
