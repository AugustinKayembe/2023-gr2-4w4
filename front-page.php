<?php
/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>
<main>
    <h3>front-page.php</h3>
<section class="blocflex">
<?php
    if (have_posts()): 
        while (have_posts()) : the_post(); ?>

        <article>
        <h1>
            <a href="<?php echo get_permalink();?>"><?php echo get_the_title(); ?></a>
        </h1>

        <?php //the_content(); // affiche le contenu de l'article ?> 
        <?php the_excerpt(); // affiche un résumé de l'article ?> 
        <?php wp_trim_words(get_the_excerpt(), 10, "&#10148")?> 
        </article>
            <hr>
        <?php endwhile;
    endif;
?>
</main>
</section>
<?php get_footer(); ?>