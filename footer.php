<?php if (!is_page('contact')): ?>
<div class="exit">
  <a href="<?php echo home_url('/');?>contact/">
    <img src="<?php bloginfo('template_directory');?>/images/onese-exit.png" alt="exitボタン" />
  </a>
</div>
<?php endif; ?>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>
  <script src="<?php bloginfo('template_url');?>/js/modernizr-custom.js"></script>


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
