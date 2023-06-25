<?php
/*============================
 theme added function
 =============================*/
function theme_customize_register($wp_customize)
{
    // header area function
    $wp_customize->add_section('header_area_customize', array(
        'title' => __('Header Area', 'dev_think'),
        'description' => __('if you need to change header you can explore here', 'dev_think')

    ));


    $wp_customize->add_setting('header_area_customize_setting', array(
        'default' => get_bloginfo('template_directory') . '/img/thinkdev.png'

    ));


    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_area_customize_setting', array(
        'label'      => __('Upload a logo', 'dev_think'),
        'section'    => 'header_area_customize',
        'setting'   => 'header_area_customize_setting'

    )));

    //menu position 
    $wp_customize->add_section('dev_menu_option_section', array(
        'title' => __('Menu Position Option', 'dev_think'),
        'description' => __('if you need to change menu position you can do it from here', 'dev_think')
    ));
    $wp_customize->add_setting('dev_menu_option_setting', array(
        'default' => 'right_menu'
    ));
    $wp_customize->add_control('dev_menu_option_control', array(
        'label' => __('Menu Position'),
        'description' => __('Select your menu Position'),
        'section'    => 'dev_menu_option_section',
        'settings'   => 'dev_menu_option_setting',
        'type' => 'radio',
        'choices'  => array(
            'right_menu' => 'Right Menu',
            'left_menu' => 'Left Menu',
            'center_menu' => 'Center Menu'
        )

    ));

    //footer option
    $wp_customize->add_section('dev_footer_option_section', array(
        'title' => __('Footer Option', 'dev_think'),
        'description' => __('if you need to change site footer you can do it', 'dev_think')
    ));
    $wp_customize->add_setting('dev_footer_option_setting', array(
        'default' => '&copy; copyright 2020-2023 | @DevThink'
    ));
    $wp_customize->add_control('dev_footer_option_control', array(
        'label' => __('Copyright Text'),
        'description' => __('changer here your copyright text'),
        'section'    => 'dev_footer_option_section',
        'settings'   => 'dev_footer_option_setting'

    ));
}
add_action('customize_register', 'theme_customize_register');
