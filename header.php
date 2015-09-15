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
    <!--<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/strip/strip.css"/>-->
    <!--<link rel="alternate" type="application/rss+xml" title="Titre du site &raquo; Flux" href="http://jevrard.be/feed/" />-->
</head>
<body>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-67147310-1', 'auto');
        ga('send', 'pageview');

    </script>
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!--[if lt IE 9]> <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
        <header class="home">
        <h1 class="riban"><a  href="<?php echo get_site_url(); ?>"><img class="long" src="<?php echo get_template_directory_uri(); ?>/images/slice1.png" alt="Jérémy Evrard"><img class="large" src="<?php echo get_template_directory_uri(); ?>/images/slice2.png" alt=""></a></h1>
        <nav>
            <h2 class="hidden">menu de naviguation</h2>
            <div id="containerMenuButton" class="containerMenuButton">
                <img class="black" src="<?php echo get_template_directory_uri(); ?>/images/menuIcon.svg" alt="Boutton pour ouvrir le menu">
                <img class="white" src="<?php echo get_template_directory_uri(); ?>/images/menuIconWhite.svg" alt="Boutton pour ouvrir le menu">
            </div>
            <?php
                $menu = wp_nav_menu( array(
                    'theme_location'  => 'top',
                    'menu_class'      => 'listing',
                    'container'       => false,
                    'echo'            => false,
                    'items_wrap'      => '<div id="%1$s" class="%2$s">%3$s</div>'
                ));
                echo str_replace( 'li', 'span', $menu );?>
        </nav>
        <div class="banniere">
            <ul>
                <li>WEB DESIGNER</li><!--
                --><li>WEB DEVELOPER</li>
            </ul>
        </div>
    </header>
