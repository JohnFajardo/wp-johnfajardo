<?php


// Read more button
function johnsReadMore() {
    return '<a class="read-more" href="' . get_permalink() . '">Read More...</a>';
}

add_filter( 'the_content_more_link', 'johnsReadMore' );

// Register Sidebar
function custom_sidebar() {

	$args = array(
		'id'            => 'primary',
		'name'          => __( 'Primary' ),
		'description'   => __( 'Appears on posts and pages in the sidebar.', 'text_domain' ),
		'before_title'  => '',
		'after_title'   => '',
		'before_widget' => '<li>',
		'after_widget'  => '</li>',
	);
	register_sidebar( $args );

}
add_action( 'widgets_init', 'custom_sidebar' );

// navs
register_nav_menus(
	array('my_theme_sidebar_menu' => 'Sidebar Menu' )
);

// Sidebar links
class Walker_Sidebar_Menu extends Walker {

    var $db_fields = array(
        'parent' => 'menu_item_parent', 
        'id'     => 'db_id' 
    );

    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0, $current_object_id = 'active' ) {
        $output .= sprintf( "\n<li class=\"menu-link\"><a href='%s'%s>%s</a></li>\n",
            $item->url,
            ( $item->object_id === get_the_ID() ) ? ' class="active"' : '',
            $item->title
        );
    }
}

// Pagination
if ( ! function_exists( 'post_pagination' ) ) :
    function post_pagination() {
      global $wp_query;
      $pager = 999999999; // need an unlikely integer
  
         echo paginate_links( array(
              'base' => str_replace( $pager, '%#%', esc_url( get_pagenum_link( $pager ) ) ),
              'format' => '?paged=%#%',
              'current' => max( 1, get_query_var('paged') ),
              'total' => $wp_query->max_num_pages
         ) );
    }
 endif;