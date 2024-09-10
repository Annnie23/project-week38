<?php
/* Template Name: Forside */
get_header();
?>

    <div class="content">

        <!-- Hero Section -->
        <div class="hero-section">
        <?php
    // ACF kode her for at trække brugerdefineret indhold
    if (have_posts()) :
        while (have_posts()) : the_post();

            // Træk ACF-feltet for hero_video ind
            $hero_video = get_field('hero_video');

            if ($hero_video) {
                echo '<div class="hero-video-wrapper">';
                echo '<video controls width="100%">';
                echo '<source src="' . esc_url($hero_video['url']) . '" type="' . esc_attr($hero_video['mime_type']) . '">';
                echo 'Your browser does not support the video tag.';
                echo '</video>';
                echo '</div>';
            }

            // Hero Titel
            $hero_titel = get_field('hero_titel');
            if ($hero_titel) {
                echo '<h1 class="hero-title">' . esc_html($hero_titel) . '</h1>';
            }

        
    // Blog Section
    echo '<div class="blog-section">';

    // Blog 1
    $blog_1_tekst = get_field('blog_1_tekst');
    $blogpost_1_link = get_field('blogpost_1_link');
    $blog1 = get_field('blog1');

    echo '<div class="blog-item">';
    if ($blog_1_tekst) {    
        echo '<div class="blog-text"><h2>' . wp_kses_post($blog_1_tekst) . '</h2></div>';
    }
    if ($blogpost_1_link && is_string($blogpost_1_link)) {
        echo '<a href="' . esc_url($blogpost_1_link) . '" class="blog-link">Read More</a>';
    }
    if ($blog1) {
        echo '<div class="blog-image-container">';
        echo '<img src="' . esc_url($blog1['url']) . '" alt="' . esc_attr($blog1['alt']) . '" class="blog-image">';
        echo '</div>';
    }
    echo '</div>'; // Close blog-item

    // Blog 2
    $blog_2_tekst = get_field('blog_2_tekst');
    $blogpost_2_link = get_field('blogpost_2_link');
    $blog2 = get_field('blog2');

    echo '<div class="blog-item">';
    if ($blog_2_tekst) {
        echo '<div class="blog-text"><h2>' . wp_kses_post($blog_2_tekst) . '</h2></div>';
    }
    if ($blogpost_2_link && is_string($blogpost_2_link)) {
        echo '<a href="' . esc_url($blogpost_2_link) . '" class="blog-link">Read More</a>';
    }
    if ($blog2) {
        echo '<div class="blog-image-container">';
        echo '<img src="' . esc_url($blog2['url']) . '" alt="' . esc_attr($blog2['alt']) . '" class="blog-image">';
        echo '</div>';
    }
    echo '</div>'; // Close blog-item

    echo '</div>'; // Close the blog-section container


    // Want to Know More Section
    $want_to_know_more = get_field('want_to_know_more');

    if ($want_to_know_more) {
        if (is_string($want_to_know_more)) {
            echo '<div class="want-to-know-more"><h2>' . esc_html($want_to_know_more) . '</h2></div>';
        }
    }


            
        
    echo '<div class="four-sections-container">';

    // FN's Verdensmål Section
    $billede1_tekst = get_field('billede1_tekst');
    $billede1 = get_field('billede1');

    echo '<div class="section">';
    if ($billede1 && is_array($billede1)) {
        echo '<img src="' . esc_url($billede1['url']) . '" alt="' . esc_attr($billede1['alt']) . '" class="section-image">';
    }
    if ($billede1_tekst && is_string($billede1_tekst)) {
        echo '<div class="section-text">' . wp_kses_post($billede1_tekst) . '</div>';
    }
    echo '</div>';

    // World Cleanup Day Section
    $billede2_tekst = get_field('billede2_tekst');
    $billede2 = get_field('billede2');

    echo '<div class="section">';
    if ($billede2 && is_array($billede2)) {
        echo '<img src="' . esc_url($billede2['url']) . '" alt="' . esc_attr($billede2['alt']) . '" class="section-image">';
    }
    if ($billede2_tekst && is_string($billede2_tekst)) {
        echo '<div class="section-text">' . wp_kses_post($billede2_tekst) . '</div>';
    }
    echo '</div>';

    // RESEA Project Section
    $billede3_tekst = get_field('billede3_tekst');
    $billede3 = get_field('billede3');

    echo '<div class="section">';
    if ($billede3 && is_array($billede3)) {
        echo '<img src="' . esc_url($billede3['url']) . '" alt="' . esc_attr($billede3['alt']) . '" class="section-image">';
    }
    if ($billede3_tekst && is_string($billede3_tekst)) {
        echo '<div class="section-text">' . wp_kses_post($billede3_tekst) . '</div>';
    }
    echo '</div>';

    // Cartel Copenhagen Section
    $billede4_tekst = get_field('billede4_tekst');
    $billede4 = get_field('billede4');

    echo '<div class="section">';
    if ($billede4 && is_array($billede4)) {
        echo '<img src="' . esc_url($billede4['url']) . '" alt="' . esc_attr($billede4['alt']) . '" class="section-image">';
    }
    if ($billede4_tekst && is_string($billede4_tekst)) {
        echo '<div class="section-text">' . wp_kses_post($billede4_tekst) . '</div>';
    }
    echo '</div>';

    echo '</div>'; // Close the four-sections-container

                endwhile;
            endif;
            ?>
        </div>
    </div>

    <?php get_footer(); ?>
