<?php
/*============================
 theme added function
 =============================*/
register_nav_menu('main-menu', __('Main Menu', 'dev_think'));

/*============================
  added walker menu in nav links
  =============================*/
function dev_walker_nav_menu($item_output, $item, $depth, $args)
{
    if (!empty($item->description)) {
        $item_output = str_replace($args->link_after . '</a>', '<span class="walker_nav">' . $item->description . '</span>' . $args->link_after . '</a>', $item_output);
    }
    return $item_output;
}
add_filter('walker_nav_menu_start_el', 'dev_walker_nav_menu', 10, 4);
