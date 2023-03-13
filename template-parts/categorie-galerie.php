<?php
/**
 * template part pour afficher la galerie dans la page d'accueil
*/
?>
<article class="blocflex__galerie">
    <?php the_content(); 
    if (have_posts()): 
        while (have_posts()) : the_post(); 
        $la_categorie='4w4';
            if (in_category('galerie')){
                $la_categorie='galerie';
                get_template_part("template-parts/categorie", $la_categorie); 
             the_content();
            }
            // else {
            //     // get_template_part("template-parts/categorie", $la_categorie);  
            // }
         endwhile;
    endif;    
    ?>

</article>