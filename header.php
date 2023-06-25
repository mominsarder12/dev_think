<?php

/**
 * this template for displaying header
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- header section start here -->
    <header id="header" class="<?php echo get_theme_mod('dev_menu_option_setting'); ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="<?php echo site_url(); ?>">
                        <img src="<?php echo get_theme_mod('header_area_customize_setting'); ?>" alt="dev_think logo">
                        <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/thinkdev.png" alt="dev_think logo"> -->
                    </a>
                </div>
                <div class="col-md-9">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'main-menu',
                        'menu_id' => 'nav'
                    )); ?>
                    <!-- <ul id="nav">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Service</a>
                            <ul>
                                <li><a href="#">Web Design</a></li>
                                <li><a href="#">Web Development</a></li>
                                <li><a href="#">App Development</a></li>
                                <li><a href="#">Digital Marketing</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Projects</a>
                            <ul>
                                <li><a href="#">Blog Projects</a>
                                    <ul>
                                        <li><a href="#">Personal Blog</a></li>
                                        <li><a href="#">News Blog</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">e-Commerce Projects</a></li>
                                <li><a href="#">RealState Projects</a></li>
                                <li><a href="#">Portfolio Projects</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Media</a></li>
                        <li><a href="#">Download</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul> -->
                </div>
            </div>
        </div>
    </header>
    <!-- header section end here -->