<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body class="site <?php echo (is_front_page()? 'no-aside' : '' )?>">
   <header class="site__header">
    <div class="logomenu">
   <?php the_custom_logo(); ?>
    <?php wp_nav_menu(array(
        "menu" => "Entete",
        "container" => "nav"
    )) ?>
    </div>
    <?php get_search_form() ?>
    <h1 class="titre_principal"><a href="<?= bloginfo('url') ?>"><?= bloginfo('name') ?></a></h1>
    <h2><?= bloginfo('description') ?></h2>
   </header>
   <?php 

   if (! is_front_page()) {
    get_template_part("template-parts/aside"); 
   }
   ?>

