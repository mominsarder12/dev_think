<?php
/*============================
 theme file enqueue
 =============================*/
function dev_think_files_calling()
{
    /**==============================
     * css file calling
     ===============================*/

    //google fonts enqueue
    wp_register_style('dev_think_google_fonts', 'https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Oswald&display=swap', false);
    wp_enqueue_style('dev_think_google_fonts');

    // bootstrap css file
    wp_register_style('dev_think_bootstrap_style', get_template_directory_uri() . '/css/bootstrap.css', array(), '5.0.2', 'all');
    wp_enqueue_style('dev_think_bootstrap_style');

    // custom css file
    wp_register_style('dev_think_custom_style', get_template_directory_uri() . '/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style('dev_think_custom_style');

    // theme css file
    wp_enqueue_style('dev_think_style', get_stylesheet_uri());

    /**===============================
     * js or jquery file calling
     =================================**/

    //wordpress default jquery file calling
    wp_enqueue_script('jquery');

    // bootstrap js file
    wp_enqueue_script('dev_think_bootstrap_script', get_template_directory_uri() . '/js/bootstrap.js', array(), '5.0.2', true);

    // script js file
    wp_enqueue_script('dev_think_script', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'dev_think_files_calling');
