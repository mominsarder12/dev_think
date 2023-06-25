<?php
/*============================
 Our theme support
 =============================*/
add_theme_support('title-tag');

// thumbnail support
add_theme_support('post-thumbnails',array('post','page'));

// add image size
add_image_size('post-thumbnails', 900, 450, true);

// the expert more
function dev_excerpt_more($more) {
return '<br> <br> <a class="read-more" href="'.get_permalink().'">' . 'Read More' . '</a>';
}
add_filter('excerpt_more', 'dev_excerpt_more');

// custom length
function dev_custom_excerpt_length( $length ) {
    return 40;
}
add_filter( 'excerpt_length', 'dev_custom_excerpt_length', 999 );

// page nav function for adding page navigation
function dev_pagenav(){
    global $wp_query, $wp_rewrite;
    $pages ='';
    $max = $wp_query -> max_num_pages;
    if(!$current = get_query_var('paged')) $current = 1;
    $args['base'] = str_replace(99999999,'%#%',get_pagenum_link(99999999));
    $args['total'] = $max;
    $args['current'] = $current;
    $total = 1;
    $args['prev_text'] = 'previous';
    $args['next_text'] = 'next';
    if($max > 1)echo '<div>
    <div class="wp_pagenav">';
    if($total == 1 && $max > 1) $pages = '<p class="pages">'.'pages' .' ' . $current .'<span>of </span>' . $max .' </p>';
    echo $pages . paginate_links($args);
    if($max > 1) echo '</div></div>';
  
}
// function custom_pagination() {
//     global $wp_query;
//     $big = 999999999; // Set a big number to avoid conflicting with other variables

//     echo '<div class="pagination">';
//     echo paginate_links(array(
//         'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
//         'format' => '?paged=%#%',
//         'current' => max(1, get_query_var('paged')),
//         'total' => $wp_query->max_num_pages,
//         'prev_text' => __('&laquo; Previous'),
//         'next_text' => __('Next &raquo;'),
//         'type' => 'list',
//         'end_size' => 3,
//         'mid_size' => 3
//     ));
//     echo '</div>';
// }




