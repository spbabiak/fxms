

        <footer>
            <div class="wrapper">
                <?php
                    $post_id = get_queried_object_id();
                    $headerLogo = get_field('header_logo', $post_id); 
                    $footerDisclaimer = get_field('footer_disclaimer', $post_id);
                    $footerButtonText = get_field('footer_button_text', $post_id);
                    $footerButtonLink = get_field('footer_button_link', $post_id);
                ?>
                <div class="wrapper_logo">
                    <img class="image_logo" src="<?php if($headerLogo): echo $headerLogo; endif; ?>" alt="FXMS Logo. Brain mark with gears inside and FXMS sign">
                </div>
                <div class="wrapper_footer_nav">
                    <nav class="nav_footer">
                        <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'footer-menu'
                                ) 
                            );
                        ?>
                    </nav>
                    
                    <a href="<?php if($footerButtonLink): echo $footerButtonLink; else: echo '#'; endif; ?>" class="btn ghost_btn_1 cta">
                        <?php if($footerButtonText): echo $footerButtonText; endif; ?>
                    </a>
                    <div class="footer_disclaimer_wrapper">
                        <p class="footer_disclaimer_text"><?php if($footerDisclaimer): echo $footerDisclaimer; endif; ?></p>
                    </div>
                </div>
            </div>
        </footer>
    <?php wp_footer(); ?>
</body>
</html>