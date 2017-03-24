<?php get_header(); ?>

<main class="mainclr">
  <section id="topimage">
    <img src="<?php bloginfo('template_url' ); ?>/img/office1.jpg" alt="">
  </section>
  <section id="blogArea">
    <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <h2 class="category-name"><i class="fa fa-tags" aria-hidden="true"></i><?php single_cat_title(); ?></h2>
            <?php if ( have_posts()): ?>
                <div class="row blog-flame">
                     <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part('each_excerpt_post'); ?>
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