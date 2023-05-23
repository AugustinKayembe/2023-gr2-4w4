<aside class="site__aside">
<?php get_template_part('template-part-aside-atelier'); ?>
<h3>Menu Atelier 2023 </h3>
<?php 
$ma_categorie = "4w4";
if (in_category('Atelier')) {
 $ma_categorie= "Atelier";
}
wp_nav_menu(array(
"menu" => $ma_categorie,
"container" => "nav"
));?>
</aside>