<form role="search" method="get" class="search-form-group" action="<?php echo home_url( '/' ); ?>">
    <input type="search"  class="form-control" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" 
    value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
    <input type="submit" id="search-form-btn" class="btn btn-default" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>