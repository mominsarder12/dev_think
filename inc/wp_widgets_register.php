<?php
/*===============================
widgets register
============================== */

function dev_widgets_register(){
register_sidebar(array(
'name' => __('Main Widgets Area','dev_think'),
'id' => 'blog-sidebar',
'class' => '',
'description' => __('its for our sidebar','dev_think'),
'before_widget' => '<div class="child-sidebar">',
'after_widget' => '</div>',
'before_title' => '<h2 class="widget-title">',
'after_widget' => '</h2>',

));
register_sidebar(array(
'name' => __('Footer Widget 1','dev_think'),
'id' => 'footer-widget-1',
'class' => '',
'description' => __('its for our sidebar','dev_think'),
'before_widget' => '<div class="child-sidebar">',
'after_widget' => '</div>',
'before_title' => '<h2 class="widget-title">',
'after_widget' => '</h2>',

));
register_sidebar(array(
'name' => __('Footer Widget 2','dev_think'),
'id' => 'footer-widget-2',
'class' => '',
'description' => __('its for our sidebar','dev_think'),
'before_widget' => '<div class="child-sidebar">',
'after_widget' => '</div>',
'before_title' => '<h3 class="widget-title">',
'after_widget' => '</h3>',

));
register_sidebar(array(
'name' => __('Footer Widget 3','dev_think'),
'id' => 'footer-widget-3',
'class' => '',
'description' => __('its for our sidebar','dev_think'),
'before_widget' => '<div class="child-sidebar">',
'after_widget' => '</div>',
'before_title' => '<h3 class="widget-title">',
'after_widget' => '</h3>',

));
}
add_action('widgets_init','dev_widgets_register');