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
    <header>

        <?php
             $header = get_field('header');
             echo $header['logo'];
        ?>

        <nav class="nav">
            <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'main-menu'
                    ) 
                );
            ?>
        </nav>
        <?php
            echo $header['button_text'];
        ?>

        <?php
           echo $header['button_link']['url'];
        ?>
    </header>
