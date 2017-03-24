  <footer>
    <div class="container">
      <div class="row service_list">
        <div class="col-md-10 col-md-offset-1">
          <div class="row">
              <div class="col-md-6 col-sm-6 cp-area">
                <h4><i class="fa fa-building-o" aria-hidden="true"></i>会社情報</h4>
                <ul class="footerlist">
                  <li><a href="<?php echo home_url(); ?>/about">ご挨拶</a></li>
                  <li><a href="<?php echo home_url(); ?>/company">会社情報</a></li>
                  <li><a href="<?php echo home_url(); ?>/contact">お問い合わせ</a></li>
                  <li><a href="<?php echo home_url(); ?>/blog">ブログ</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-sm-6 svc-area">
              　<h4><i class="fa fa-paperclip" aria-hidden="true"></i>サービス情報</h4>
                <ul class="footerlist">
                  <li><a href="<?php echo home_url(); ?>/accounting">進出/会計業務サポート</a></li>
                  <li><a href="<?php echo home_url(); ?>/tsuyaku">通訳/翻訳サポート</a></li>
                  <li><a href="<?php echo home_url(); ?>/education">日本語教育/人事スタッフ育成/ファシリテーター育成</a></li>
                </ul>
              </div>
          </div>
        </div>
      </div>
    </div>
  </footer>


    <script type="text/javascript" src="<?php bloginfo('template_url' ); ?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url' ); ?>/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url' ); ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url' ); ?>/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url' ); ?>/js/bootstrap-dropdown.js"></script>
    <script>
    function slideSwitch() {
       var $active = $('#slideshow p.active');

       if ( $active.length == 0 ) $active = $('#slideshow p:last');

       var $next =  $active.next().length ? $active.next()
          : $('#slideshow p:first');

       $active.addClass('last-active');

       $next.css({opacity: 0.0})
          .addClass('active')
          .animate({opacity: 1.0}, 1000, function() {
             $active.removeClass('active last-active');
          });
    }

    $(function() {
       setInterval( "slideSwitch()", 7000 );
    });
    </script>
    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php bloginfo('template_url' ); ?>/js/jqBootstrapValidation.js"></script>

    <!-- Theme JavaScript -->
    <script src="<?php bloginfo('template_url' ); ?>/js/agency.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
<?php wp_footer(); ?>
</body>
</div>

</html>
