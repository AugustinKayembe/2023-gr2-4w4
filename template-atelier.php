<?php
/**
 * Template Name: Atelier
 */
get_header();
?>

<main class="site__main">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php the_post_thumbnail('thumbnail'); ?>
            <h1><?php echo get_the_title(); ?></h1>
            <?php the_content(); ?>
            <p>Formateur <?php the_field('formateur_'); ?></p>
            <p>Date de début <?php the_field('date_de_debut_'); ?></p>
            <p>Heure de début <?php the_field('heure_de_debut_'); ?></p>
            <p>Durée <?php the_field('duree_'); ?></p>
            <p>Local <?php the_field('local_'); ?></p>
        <?php endwhile; ?>
    <?php endif; ?>
</main><!-- #main -->

<?php get_footer(); ?>
