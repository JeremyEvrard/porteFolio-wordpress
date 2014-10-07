<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="fr"> <!--<![endif]-->
<head>
    <meta charset="<?php blogInfo('charset'); ?>"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php blogInfo('Name'); ?></title>
    <meta name="description" content="<?php blogInfo('Description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="alternate" type="application/rss+xml" title="Titre du site &raquo; Flux" href="http://jevrard.be/feed/" />
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!--[if lt IE 9]> <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
        <header class="home">
        <h1 class="riban"><a  href="<?php echo get_site_url(); ?>"><img class="long" src="<?php echo get_template_directory_uri(); ?>/images/riban.png" alt="Jérémy Evrard"><img class="large" src="<?php echo get_template_directory_uri(); ?>/images/ribanLarge.svg" alt="Jérémy Evrard"></a></h1>
        <nav>
            <h1 class="hidden">menu de naviguation</h1>
            <div id="containerMenuButton" class="containerMenuButton">
                <img class="black" src="<?php echo get_template_directory_uri(); ?>/images/menuIcon.svg" alt="Boutton pour ouvrir le menu">
                <img class="white" src="<?php echo get_template_directory_uri(); ?>/images/menuIconWhite.svg" alt="Boutton pour ouvrir le menu">
            </div>
            <?php
                $arg = array(
                    'theme_location'  => 'top',
                    'menu_class'      => 'listing',
                    'container'       => '',
                    'echo'            => true,
                    'items_wrap'      => '<div id="%1$s" class="%2$s">%3$s</div>',
                    'walker'          => new themeslug_walker_nav_menu
                );?>
                <?php wp_nav_menu($arg); ?>
        </nav>
        <div class="banniere">
            <ul>
                <li>WEB DESIGNER</li><!--
                --><li>WEB DEVELOPER</li>
            </ul>
        </div>
    </header>