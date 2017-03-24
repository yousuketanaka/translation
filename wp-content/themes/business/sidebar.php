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
    <?php if ( have_posts()): ?>
    <div class="row">
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="col-lg-6">
            <ul class="list-unstyled">
                <li><a href="#">
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
                	'hierarchical'       => 1,
                	'title_li'           => '',
                	'show_option_none'   => __( '' ),
                	'number'             => null,
                	'echo'               => 1,
                	'depth'              => 0,
                	'current_category'   => 0,
                	'pad_counts'         => 0,
                	'taxonomy'           => 'category',
                	'walker'             => null
                    );
                    wp_list_categories( $args ); 
                ?>
                </a></li>
            </ul>
            
        </div>
        <?php endwhile; ?>
    </div>
    <!-- /.row -->
    <?php endif; ?>
</div>

<!-- Side Widget Well -->
<div class="well">
    <h4>Side Widget Well</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
</div>