<?php get_header(); ?>

  <main class="mainclr">
    <section class="topwrapper">
      <!-- Place somewhere in the <body> of your page -->
      <div id="slideshow">
         <p class="active">
            <span class="wrapLetter_1">We bring you closer to Vietnam<br>日本とベトナムの距離をもっと近くしたい。</span>
            <img src="<?php bloginfo('template_url' ); ?>/img/topimage4.jpg" alt="">
         </p>
         <p>
            <span class="wrapLetter_2">Keep on evolving your business<br>私たちは、日系企業が<br class="br-border-1">ホーチミンで根をはるお手伝いをします。</span>
            <img src="<?php bloginfo('template_url' ); ?>/img/topimage2.jpg" alt="">
         </p>
         <p>
            <span class="wrapLetter_3">We release people's potential in Vietnam<br>私たちはベトナム人スタッフの<br class="br-border-1">潜在能力を引き出すお手伝いをします。</span>
            <img src="<?php bloginfo('template_url' ); ?>/img/topimage3.jpg" alt="">
         </p>
      </div>
    </section>


    <section id="newsarea">
      <h2>SERVICE<br><span class="smalltitle">-事業内容-</span></h2>
      <div class="container">
         <div class="row servicearea">
           <div class="col-md-4 col-sm-4 servicebox">
             <div class="bx-area">
               <i class="fa fa-book fa-5x" aria-hidden="true"></i>
               <h3>通訳/翻訳事業</h3>
               <p>視察や会議でのビジネス通訳、<br class="br-border-2">観光通訳、翻訳を承ります。</p>
               <a href="<?php echo home_url(); ?>/tsuyaku" class="readmore"><i class="fa fa-chevron-right" aria-hidden="true"></i>詳しくはこちら</a>
             </div>
           </div>
           <div class="col-md-4 col-sm-4 servicebox">
             <div class="bx-area">
               <i class="fa fa-briefcase fa-5x" aria-hidden="true"></i>
               <h3>進出支援事業</h3>
               <p>ベトナムへの進出する企業に<br class="br-border-2">設立から会計までサポートします。</p>
               <a href="<?php echo home_url(); ?>/accounting" class="readmore"><i class="fa fa-chevron-right" aria-hidden="true"></i>詳しくはこちら</a>
             </div>
           </div>
           <div class="col-md-4 col-sm-4 servicebox">
             <div class="bx-area">
             　<i class="fa fa-bar-chart fa-5x" aria-hidden="true"></i>
               <h3>教育事業</h3>
               <p>日本語、人事教育、<br class="br-border-2">ファシリテーター育成を行います。</p>
               <a href="<?php echo home_url(); ?>/education" class="readmore"><i class="fa fa-chevron-right" aria-hidden="true"></i>詳しくはこちら</a>
             </div>
           </div>
         </div>
         <a href="<?php echo home_url(); ?>/contact" class="btn btn-contact"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>お問い合わせはこちら</a>
      </div>
    </section>


    <section id="updatearea">
        <div class="row">
          <div class="col-md-6 col-sm-6 cp-grting">
            <h3>ご挨拶</h3>
            <a href="<?php echo home_url(); ?>/about" class="readmore_2 cp-stn"><i class="fa fa-chevron-right" aria-hidden="true"></i>詳しくはこちら</a>
            <img src="<?php bloginfo('template_url' ); ?>/img/tp-img6.jpg" alt="">
          </div>
          <div class="col-md-6 col-sm-6 cp-info">
            <h3>会社情報</h3>
            <a href="<?php echo home_url(); ?>/company" class="readmore_2 cp-stn"><i class="fa fa-chevron-right" aria-hidden="true"></i>詳しくはこちら</a>
            <img src="<?php bloginfo('template_url' ); ?>/img/tp-img3.jpg" alt="">
          </div>
        </div>
    </section>
    <div class="clearfix"></div>

    <section id="blogarea">
      <div class="container">
        <h2>Blog</h2>
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
                <?php $args = array(
                     'posts_per_page' => 5,
                     'orderby' => 'post_date'
                     ); 
                ?>
                
                <?php $myposts = new WP_Query( $args ); ?>
                  <?php if($myposts -> have_posts()): ?>
                  <?php while($myposts -> have_posts()): $myposts->the_post();?>
                
                    <div class="row top-post-picture">
                      <div class="col-md-4 col-sm-4">
                        <a class="pull-left" href="<?php echo home_url(); ?>/blog">
                          <?php if ( has_post_thumbnail() ) :
                         the_post_thumbnail('post-thumbnails');
                         else :
                         echo '<img src="';
                         bloginfo( 'template_url' );
                         echo '/images/the_post_thumbnail_default.png" alt="デフォルト画像" />';
                         endif; ?>
                        </a>
                      </div>
                      <div class="col-md-8 col-sm-8">
                        <div class="top-post-description">
                          <h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                          <p><i class="fa fa-pencil" aria-hidden="true"></i>By BambooShoots<span><a class="archive-tim" href="<?php the_permalink(); ?>"><i class="fa fa-clock-o" aria-hidden="true"></i><time datetime="<?php the_time('y-m-d'); ?>"></time><?php the_time( get_option('date_format') ); ?></a></span></p>
                          <?php the_excerpt(); ?>
                        </div>
                      </div>
                    </div>
                     <hr>
                  <?php endwhile; endif; ?>
                <?php wp_reset_postdata(); ?>
          </div>
        </div>
      </div>
    </section>
  </main>
  
  <?php get_footer(); ?>