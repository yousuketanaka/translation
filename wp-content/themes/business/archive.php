<?php get_header(); ?>

<main class="mainclr">
  <section id="topimage">
    <img src="<?php bloginfo('template_url' ); ?>/img/office1.jpg" alt="">
  </section>
  <section id="blogArea">
    <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <?php if ( have_posts()): ?>
             <div class="row blog-flame">
             <?php while ( have_posts() ) : the_post(); ?>
                <div class="col-md-5 archive-pic">
                  <a href="<?php the_permalink(); ?>">
                     <?php if ( has_post_thumbnail() ) :
                     the_post_thumbnail('post-thumbnails');
                     else :
                     echo '<img src="';
                     bloginfo( 'template_url' );
                     echo '/images/the_post_thumbnail_default.png" alt="デフォルト画像" />';
                     endif; ?>
                  </a>
                </div>
                <div class="col-md-7 archive-title">
                   <h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                   <p>By BambooShoots<span><a class="archive-tim" href="<?php the_permalink(); ?>"><time datetime="<?php the_time('y-m-d'); ?>"></time><?php the_time( get_option('date_format') ); ?></a></span></p>
                   <?php the_excerpt(); ?>
                </div>
             <?php endwhile; ?>
             </div>
             <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
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