<?php

/**
 * 
 * * Modele par defaut* */

?>
<?php get_header(); ?>

<main>
    <h3>search.php</h3>
    <h3>Résultats de la recherche</h3>
    <section class="article_solo">
    <?php if (have_posts()) :
        while (have_posts()) : the_post();
            the_title('<h1>', '</h1>');
            //the_content(); ?>
            <?php wp_trim_words(get_the_excerpt(), 50, "[...]"); ?>
            <hr>
    <?php
    
        endwhile;
    endif;
    ?>
</section>

</main>
<?php get_footer(); ?>