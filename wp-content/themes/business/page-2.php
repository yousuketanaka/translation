<?php
/*
Template Name: page2
*/
?>

<?php get_header(); ?>

<main class="mainclr">
  <section id="topimage">
    <img src="<?php bloginfo('template_url' ); ?>/img/office1.jpg" alt="">
  </section>
  <?php while(have_posts()): the_post(); ?>
     <?php the_content(); ?>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>