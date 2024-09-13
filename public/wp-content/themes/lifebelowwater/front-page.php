<?php
get_header();
?>

<div class="content">

<div class="hero-section">
<?php

if (have_posts()) :
    while (have_posts()) : the_post();

        $hero_video = get_field('hero_video');

        if ($hero_video) {
            echo '<div class="hero-video-wrapper">';
            echo '<video controls autoplay width="100%">';
            echo '<source src="' . esc_url($hero_video['url']) . '" type="' . esc_attr($hero_video['mime_type']) . '">';
            echo 'Your browser does not support the video tag.';
            echo '</video>';
            echo '</div>';
        }

        $hero_titel = get_field('hero_titel');
        if ($hero_titel) {
            echo '<h1 class="hero-title">' . esc_html($hero_titel) . '</h1>';
        }

    endwhile;
endif;
?>
</div>

<?php
$box_1 = get_field('box_1');
$box_2 = get_field('box_2');
$box_1_text = get_field('box_1_text');
$box_2_text = get_field('box_2_text');

echo '<div class="box-section">';
echo '<div class="box-container">';
if ($box_1) {
    $box_1_img = isset($box_1['box_1_img']) ? $box_1['box_1_img'] : null;
    $box_1_link = isset($box_1['box_1_link']) ? $box_1['box_1_link'] : null;
    
    echo '<div class="box">';
    if ($box_1_text) {
        echo '<div class="box-title">' . esc_html($box_1_text) . '</div>';
    }
    if ($box_1_img) {
        if ($box_1_link) {
            echo '<a href="' . esc_url($box_1_link) . '" class="box-link">';
        }
        echo '<img src="' . esc_url($box_1_img['url']) . '" alt="' . esc_attr($box_1_img['alt']) . '" class="box-image">';
        if ($box_1_link) {
            echo '</a>';
        }
    }
    echo '</div>';
}

if ($box_2) {
    $box_2_img = isset($box_2['box_2_img']) ? $box_2['box_2_img'] : null;
    $box_2_link = isset($box_2['box_2_link']) ? $box_2['box_2_link'] : null;

    echo '<div class="box">';
    if ($box_2_text) {
        echo '<div class="box-title">' . esc_html($box_2_text) . '</div>';
    }
    if ($box_2_img) {
        if ($box_2_link) {
            echo '<a href="' . esc_url($box_2_link) . '" class="box-link">';
        }
        echo '<img src="' . esc_url($box_2_img['url']) . '" alt="' . esc_attr($box_2_img['alt']) . '" class="box-image">';
        if ($box_2_link) {
            echo '</a>';
        }
    }
    echo '</div>';
}

echo '</div>';
echo '</div>';
?>

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
    $billede1_tekst = get_field('billede1_tekst');
    $billede1 = get_field('billede1');
    $billede_1_link = get_field('billede_1_link');

    echo '<div class="section">';
    if ($billede1 && is_array($billede1)) {
        if ($billede_1_link && is_string($billede_1_link)) {
            echo '<a href="' . esc_url($billede_1_link) . '">';
        }

        echo '<img src="' . esc_url($billede1['url']) . '" alt="' . esc_attr($billede1['alt']) . '" class="section-image">';

        if ($billede_1_link && is_string($billede_1_link)) {
            echo '</a>';
        }
    }
    if ($billede1_tekst && is_string($billede1_tekst)) {
        echo '<div class="section-text">' . wp_kses_post($billede1_tekst) . '</div>';
    }
    echo '</div>';

    $billede2_tekst = get_field('billede2_tekst');
    $billede2 = get_field('billede2');
    $billede_2_link = get_field('billede_2_link');

    echo '<div class="section">';
    if ($billede2 && is_array($billede2)) {
        if ($billede_2_link && is_string($billede_2_link)) {
            echo '<a href="' . esc_url($billede_2_link) . '">';
        }

        echo '<img src="' . esc_url($billede2['url']) . '" alt="' . esc_attr($billede2['alt']) . '" class="section-image">';

        if ($billede_2_link && is_string($billede_2_link)) {
            echo '</a>';
        }
    }
    if ($billede2_tekst && is_string($billede2_tekst)) {
        echo '<div class="section-text">' . wp_kses_post($billede2_tekst) . '</div>';
    }
    echo '</div>';

    $billede3_tekst = get_field('billede3_tekst');
    $billede3 = get_field('billede3');
    $billede_3_link = get_field('billede_3_link');

    echo '<div class="section">';
    if ($billede3 && is_array($billede3)) {
        if ($billede_3_link && is_string($billede_3_link)) {
            echo '<a href="' . esc_url($billede_3_link) . '">';
        }

        echo '<img src="' . esc_url($billede3['url']) . '" alt="' . esc_attr($billede3['alt']) . '" class="section-image">';

        if ($billede_3_link && is_string($billede_3_link)) {
            echo '</a>';
        }
    }
    if ($billede3_tekst && is_string($billede3_tekst)) {
        echo '<div class="section-text">' . wp_kses_post($billede3_tekst) . '</div>';
    }
    echo '</div>';

    $billede4_tekst = get_field('billede4_tekst');
    $billede4 = get_field('billede4');
    $billede_4_link = get_field('billede_4_link');

    echo '<div class="section">';
    if ($billede4 && is_array($billede4)) {
        if ($billede_4_link && is_string($billede_4_link)) {
            echo '<a href="' . esc_url($billede_4_link) . '">';
        }

        echo '<img src="' . esc_url($billede4['url']) . '" alt="' . esc_attr($billede4['alt']) . '" class="section-image">';

        if ($billede_4_link && is_string($billede_4_link)) {
            echo '</a>';
        }
    }
    if ($billede4_tekst && is_string($billede4_tekst)) {
        echo '<div class="section-text">' . wp_kses_post($billede4_tekst) . '</div>';
    }
    echo '</div>';
    ?>

</div>
</div>
<?php get_footer(); ?>