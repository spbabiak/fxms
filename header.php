<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php wp_head(); ?>

</head>
<body>
    <header id="home" class="main_header">
        <div class="wrapper">
            <?php 
                $headerLogo = get_field('header_logo'); 
                $headerButtonLink = get_field('header_button_link');
                $headerButtonText = get_field('header_button_text');
            ?>
            <div class="wrapper_logo">
                <img class="image_logo" src="<?php if($headerLogo): echo $headerLogo; endif; ?>" alt="FXMS Logo. Brain mark with gears inside and FXMS sign">
            </div>
            <nav class="nav">
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'main-menu'
                        ) 
                    );
                ?>
            </nav>
            <a href="<?php if($headerButtonLink): echo $headerButtonLink; endif; ?>" target="_blank" class="btn"><?php if($headerButtonText): echo $headerButtonText; endif; ?></a>
        </div>
    </header>
