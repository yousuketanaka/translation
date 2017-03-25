<?php

if (function_exists('register_sidebar')) {
//ここから
register_sidebar(array(
'name' => 'サイドバー1',
'id' => 'sidebar1',
'description' => '説明1',
'before_widget' => '<div>',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>'
));
//ここまでが1つのウィジェットエリアです。
register_sidebar(array(
'name' => 'サイドバー2',
'id' => 'sidebar2',
'description' => '説明2',
'before_widget' => '<div>',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>'
));
register_sidebar(array(
'name' => 'サイドバー3',
'id' => 'sidebar3',
'description' => '説明3',
'before_widget' => '<div>',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>'
));
register_sidebar(array(
'name' => 'サイドバー4',
'id' => 'sidebar4',
'description' => '説明4',
'before_widget' => '<div>',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>'
));
}


function new_excerpt_more( $more ) {
 return ' <a class="blog-read-more" href="'. get_permalink( get_the_ID() ) . '">続きを読む</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );
function add_favicon_link(){ ?>
 <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico" />
 <?php }
add_action('wp_head', 'add_favicon_link');
add_theme_support( 'post-thumbnails' );


add_action('init', function() {
	remove_filter('the_excerpt', 'wpautop');
	remove_filter('the_content', 'wpautop');
});
 
add_filter('tiny_mce_before_init', function($init) {
	$init['wpautop'] = false;
	$init['apply_source_formatting'] = ture;
	return $init;
});

?>