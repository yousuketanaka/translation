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
   <p><i class="fa fa-pencil" aria-hidden="true"></i>By BambooShoots<span><a class="archive-tim" href="<?php the_permalink(); ?>"><i class="fa fa-clock-o" aria-hidden="true"></i><time datetime="<?php the_time('y-m-d'); ?>"></time><?php the_time( get_option('date_format') ); ?></a></span></p>
   <?php the_excerpt(); ?>
</div>