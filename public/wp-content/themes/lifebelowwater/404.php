<?php
get_header();
?>

<div class="content">
    <div class="error-404">
        <h1><?php pll_e('404 - Page Not Found'); ?></h1>
        <p><?php pll_e('Sorry, but the page you were trying to view does not exist.'); ?></p>
        <p><?php pll_e('Here are some helpful links instead:'); ?></p>
        <ul>
            <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php pll_e('Back to Home'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/blog')); ?>"><?php pll_e('View Community'); ?></a></li>
        </ul>
    </div>
</div>

<?php
get_footer();
?>
