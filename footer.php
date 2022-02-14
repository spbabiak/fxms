

    <footer>
        <?php
            $post_id = get_queried_object_id();
            $header = get_field('header', $post_id);
            echo $header['header_logo'];
        ?>
        
        <nav class="nav">
            <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer-menu'
                    ) 
                );
            ?>
        </nav>
        
        <?php
            $footer = get_field('footer', $post_id);
            echo $footer['footer_disclaimer'];
        ?>

        <?php echo $footer['footer_button_text'];?>
        <?php echo $footer['footer_button_link'];?>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>