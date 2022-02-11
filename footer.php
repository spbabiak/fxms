<?php wp_footer(); ?>

    <footer>
        <nav class="nav">
            <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer-menu'
                    ) 
                );
            ?>
        </nav>
    </footer>

</body>
</html>