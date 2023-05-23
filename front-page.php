<?php
/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>
<main class="site__main">
    <h3></h3>

    <section class="blocflex">

    <?php wp_nav_menu(array(
        "menu" => "evenement",
        "container" => "nav"
      ));
    ?>

<?php wp_nav_menu(array(
        "menu" => "Atelier",
        "container" => "nav"
      ));
    ?>

    </section>
    <section class="blocflex">
    <?php
        if (have_posts()): 
            while (have_posts()) : the_post(); 
                if (in_category('galerie')){
                 //get_template_part("template-parts/categorie", "galerie");
                 the_content();
                }
                else {
                    get_template_part("template-parts/categorie", "4w4");  
                }
             endwhile;
        endif;    
    ?>
    </section>
</main>

<?php get_footer(); ?>