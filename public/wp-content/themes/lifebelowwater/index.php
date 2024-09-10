<?php
/* Denne side er den side der vises når man trykker på "Blog" i menuen. Den viser alle blogindlæg i en liste. */

get_header();
?>

<div class="content">

    <div class="blog-list">
        <h1><?php echo get_the_title(get_option('page_for_posts')); ?></h1>

        <div class="some-section">
            <?php
            $some_tekst = get_field('some_tekst', get_option('page_for_posts'));
            if ($some_tekst) {
                echo '<div class="some_tekst">' . wp_kses_post($some_tekst) . '</div>';
            } else {
                echo '<p>No content available for some_tekst.</p>';
            }
            ?>
        </div>

        <?php if (have_posts()) : ?>
            <div class="post-list">
                <?php while (have_posts()) : the_post(); ?>
                    <div class="post">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title_attribute(); ?>">
                        <?php endif; ?>

                        <div class="post-info">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <div class="excerpt">
                                <?php the_excerpt(); ?>
                            </div>
                            <div class="post-meta">
                                <div class="post-categories">
                                    <strong>Categories:</strong> <?php the_category(', '); ?>
                                </div>
                                <div class="post-tags">
                                    <strong>Tags:</strong> <?php the_tags('', ', ', ''); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>

            <div class="pagination">
                <?php the_posts_pagination(); ?>
            </div>

        <?php else : ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>

        <!-- Social Media Icons Section -->
            <div class="social-media-icons">
                <?php
                // Retrieve ACF fields for Instagram
                $instagram_icon = get_field('instagram_icon', get_option('page_for_posts'));
                $instagram_name = get_field('instagram_name', get_option('page_for_posts'));

                // Display Instagram icon and name if available
                if ($instagram_icon) {
                    echo '<a href="' . esc_url($instagram_icon['url']) . '" target="_blank" class="social-i">';
                    echo '<img src="' . esc_url($instagram_icon['icon']) . '" alt="' . esc_attr($instagram_name) . '">';
                    echo '<span>' . esc_html($instagram_name) . '</span>';
                    echo '</a>';
                }

                // Retrieve ACF fields for Facebook
                $facebook_icon = get_field('facebook_icon', get_option('page_for_posts'));
                $facebook_name = get_field('facebook_name', get_option('page_for_posts'));

                // Display Facebook icon and name if available
                if ($facebook_icon) {
                    echo '<a href="' . esc_url($facebook_icon['url']) . '" target="_blank" class="social-i">';
                    echo '<img src="' . esc_url($facebook_icon['icon']) . '" alt="' . esc_attr($facebook_name) . '">';
                    echo '<span>' . esc_html($facebook_name) . '</span>';
                    echo '</a>';
                }
                ?>
            </div>


    </div>
</div>

<?php get_footer(); ?>
