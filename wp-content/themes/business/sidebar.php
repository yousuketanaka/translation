<div class="well">
    <h4>Blog Search</h4>
    <div class="input-group">
        <?php get_search_form(); ?>
    </div>
    <!-- /.input-group -->
</div>

<!-- Blog Categories Well -->
<div class="well">
    <h4>Blog Categories</h4>
    <div class="row">
        <div class="col-lg-6">
            <ul class="list-unstyled">
                <a href="#">
                <?php 
                    $args = array(
                	'show_option_all'    => '',
                	'orderby'            => 'name',
                	'order'              => 'ASC',
                	'style'              => 'list',
                	'show_count'         => true,
                	'hide_empty'         => 1,
                	'use_desc_for_title' => 1,
                	'child_of'           => 0,
                	'feed'               => '',
                	'feed_type'          => '',
                	'feed_image'         => '',
                	'exclude'            => '',
                	'exclude_tree'       => '',
                	'include'            => '',
                	'hierarchical'       => true,
                	'title_li'           => '',
                	'show_option_none'   => __( '' ),
                	'number'             => null,
                	'echo'               => 1,
                	'depth'              => 2,
                	'current_category'   => 0,
                	'pad_counts'         => 0,
                	'taxonomy'           => 'category',
                	'walker'             => null
                    );
                    wp_list_categories( $args ); 
                ?>
                </a>
            </ul>
        </div>
    </div>
    <!-- /.row -->
</div>

<!-- Side Widget Well -->
<div class="well">
    <h4>Blog Archive</h4>
    <?php
    $args = array(
    	'type'            => 'monthly',
    	'limit'           => '12',
    	'format'          => 'html', 
    	'before'          => '<i class="fa fa-caret-right fa-lg" aria-hidden="true"></i>',
    	'after'           => '',
    	'show_post_count' => true,
    	'echo'            => 1,
    	'order'           => 'DESC',
    	'post_type'     => 'post'
    );
    wp_get_archives( $args );
    ?>
</div>