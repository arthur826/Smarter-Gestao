<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="<?php echo get_template_directory_uri( ) ?>/img/logo-mini-smarter.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css">
    

    <title>Smarter</title>

    <?php wp_head(); ?>

</head>
<body>
    <header id="js-header-scrolled">
        <div class="container">
            <div class="logo" id="logo-scrolled">
            <a href="<?php echo get_option("siteurl"); ?>"><img src="<?php echo get_template_directory_uri( ) ?>/img/logo-smarter.png" alt=""></a>
            </div>
            <nav>
                <?php
                    $args = array(
                    'menu' => 'Header Principal Desktop',
                    'theme_location' => 'header-principal-desktop',
                    'container' => false
                    );
                    wp_nav_menu( $args );
                ?>
            </nav>
            <div id="js-btnMobile" class="btn-mobile">
                <img src="<?php echo get_template_directory_uri( ) ?>/img/icone-mobile.png" alt="">
            </div>
        </div>
    </header>
    <div class="menu-mobile">
        <div class="overlay js-overlay">
            <aside>
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri( ) ?>/img/logo-smarter.png" alt="">
                </div>
                <nav>
                    <ul>
                    <?php
                        $args = array(
                            'menu' => 'Header Principal Mobile',
                            'theme_location' => 'menu-principal-mobile',
                            'container' => false
                        );
                        wp_nav_menu( $args );
                    ?>
                </nav>
            </aside>
        </div>
    </div>