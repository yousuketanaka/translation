<?php
/*
Template Name: page3
*/
?>

<?php get_header(); ?>

<main class="mainclr">
  <?php while(have_posts()): the_post(); ?>
     <?php the_content(); ?>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>