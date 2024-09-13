</div> <!-- #content -->
<footer class="site-footer">
    <div class="container-foot">
        <div class="footer-logo">
            <a href="<?php echo home_url(); ?>" class="site-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logofn.png" alt="<?php bloginfo('name'); ?>">
            </a>
        </div>
        <div class="footer-content">
            <nav class="footer-navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'menu_id'        => 'footer-menu',
                    'container'      => false,
                ));
                ?>
            </nav>
            <div class="footer-social">
                <div class="social-icon">
                    <a href="#" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/instagram.png" alt="Instagram">
                        <span><?php pll_e('@LifeBelowWater'); ?></span>
                    </a>
                </div>
                <div class="social-icon">
                    <a href="#" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt="Facebook">
                        <span><?php pll_e('Life Below Water'); ?></span>
                    </a>
                </div>
            </div>
            <div class="footer-links">
                <a href="#"><?php pll_e('UN World Goals '); ?></a>
                <a href="#"><?php pll_e('ReSea Project'); ?></a>
                <a href="#"><?php pll_e('World Cleanup Day'); ?></a>
                <a href="#"><?php pll_e('Cartel Copenhagen'); ?></a>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>
</footer>
</body>
</
