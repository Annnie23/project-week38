<?php
/* 
Template Name: Quiz Template
*/

get_header(); ?>

<div class="quiz-area">
    <div class="quiz-main">

        <!-- Vis quiz-titel fra ACF -->
        <h1><?php the_field('quiz_titel'); ?></h1>

        <p><?php the_field('quiz_description'); ?></p>

        <!-- Tilføj quiz-formen her -->
        <?php echo do_shortcode('[contact-form-7 id="18dc239" title="Quiz" html_class="quiz-form"]'); ?>

    </div><!-- .quiz-main -->
</div><!-- .quiz-area -->

<?php get_footer(); ?>

