<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="container-nav">
            <div class="site-branding">
                <a href="<?php echo home_url(); ?>" class="site-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logofn.png" alt="<?php bloginfo('name'); ?>">
                </a>
            </div>
            <div class="menu-toggle" id="menu-toggle">
                <span class="menu-icon"></span>
                <span class="menu-icon"></span>
                <span class="menu-icon"></span>
            </div>
            <nav class="main-navigation" id="main-navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                    'container'      => false,
                ));
                ?>

                <div class="language-switcher-container">
                    <select class="language-switcher" onchange="location = this.value;">
                        <option value="" disabled selected><?php pll_e('Select language'); ?></option>
                        <option value="<?php echo pll_home_url('da'); ?>" <?php echo (get_locale() == 'da_DK') ? 'disabled' : ''; ?>>Dansk</option>
                        <option value="<?php echo pll_home_url('en'); ?>" <?php echo (get_locale() == 'en_GB') ? 'disabled' : ''; ?>>English</option>
                    </select>
                </div>
            </nav>
        </div>
    </header>
    <div id="content" class="site-content">
