<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_title(); ?>

    <?php wp_head(); ?>

</head>
<body>
<?php the_content(); ?>
    <header id="home" class="main_header">
        <div class="wrapper">
            
            <?php 
                $headerLogo = get_field('header_logo'); 
                $headerButtonLink = get_field('header_button_link');
                $headerButtonText = get_field('header_button_text');
            ?>
            <div class="wrapper_header_content">
                <div class="wrapper_logo">
                    <img class="image_logo" src="<?php if($headerLogo): echo $headerLogo; endif; ?>" alt="FXMS Logo. Brain mark with gears inside and FXMS sign">
                </div>
                <div class="wrapper_nav_icon_burger">
                    <span class="nav_icon_burger"></span>
                </div>
                <nav class="nav_header_mobile">
                    <div class="wrapper_icon_cross">
                        <span class="icon_cross"></span>
                    </div>
                        <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'main-menu'
                                ) 
                            );
                        ?>
                </nav>
                <nav class="nav_widescreen"> 
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'main-menu'
                            ) 
                        );
                    ?>
                </nav>
                <a href="<?php if($headerButtonLink): echo $headerButtonLink; else: echo '#'; endif; ?>" class="btn ghost_btn_1 cta"><?php if($headerButtonText): echo $headerButtonText; endif; ?></a>
            </div>
        </div>
    </header>
