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

        endwhile;
    endif;
    ?>
    </div><!-- End hero-section -->

    <div class="blog-section-forside">
    <?php
    $blog_img_1 = get_field('blog_img_1'); // Erstat med det korrekte felt navn
    $blogpost_1_link = get_field('blogpost_1_link'); // Erstat med det korrekte felt navn

    if ($blog_img_1 && $blogpost_1_link) {
        // Output billedet med link
        echo '<a href="' . esc_url($blogpost_1_link['url']) . '" target="_blank">'; // Hvis linket er en array
        echo '<img src="' . esc_url($blog_img_1['url']) . '" alt="' . esc_attr($blog_img_1['alt']) . '">';
        echo '</a>';
    } else {
        echo '<p>No blog image or link found.</p>'; // Fejlmeddelelse hvis ingen data findes
    }
    ?>
</div>


    <!-- Want to Know More Section -->
    <?php
    $want_to_know_more = get_field('want_to_know_more');

    if ($want_to_know_more) {
        if (is_string($want_to_know_more)) {
            echo '<div class="want-to-know-more"><h2>' . esc_html($want_to_know_more) . '</h2></div>';
        }
    }
    ?>

    <div class="four-sections-container">

        <?php
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

        ?>
    </div><!-- Close four-sections-container -->

</div><!-- Close content -->

<?php get_footer(); ?>