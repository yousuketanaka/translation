<?php get_header(); ?>

<main class="mainclr">
  <section id="topimage">
    <img src="<?php bloginfo('template_url' ); ?>/img/office1.jpg" alt="">
  </section>
  <section id="blogArea">
    <div class="container">
        <div class="row">
          <div class="col-lg-8 blog-main-part">
              <?php if ( have_posts()): ?>
                  <?php while(have_posts()): the_post(); ?>
                       <h1><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                       <p class="lead">by 管理者</p>
                       <hr>
                       <p><span class="glyphicon glyphicon-time"></span><a class="archive-tim" href="<?php the_permalink(); ?>"><time datetime="<?php the_time('y-m-d'); ?>"></time>
                       <?php the_time( get_option('date_format') ); ?></a></p>
                       <hr>
                       <?php the_content(); ?>
                       <hr>
                       <?php comments_template(); ?>
                  <?php endwhile; ?>
              <?php endif; ?>
          </div>
          <div class="col-md-4">
            <?php get_sidebar(); ?>
          </div>
        </div>
        <div class="lastpart"></div>
    </div>
  </section>
</main>
<div class="clearfix"></div>
<?php get_footer(); ?>