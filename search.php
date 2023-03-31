<?php

/**
 * 
 * * Modele par defaut* */

?>
<?php get_header(); ?>

<main>
    <h3>search.php</h3>
    <h2>Résultats de la recherche</h2>
    <section class="article_solo">
    <?php  if (have_posts()): 
        while (have_posts()) : the_post();
        if (in_category('4w4')){
           ?>
            <?php  get_template_part("template-parts/search", "4w4");  ?>
            <hr>

        <?php 
        }else if (in_category('cours')){
            ?>
           <?php get_template_part("template-parts/search", "cours");  ?>
            <hr>
        <?php }else{ ?>
            <?php  get_template_part("template-parts/search", "4w4"); }?>

        <?php endwhile;
    endif; ?>
    
  </section>

</main>
<?php get_footer(); ?>