

        <footer>
            <div class="wrapper">
                <?php
                    $post_id = get_queried_object_id();
                    $headerLogo = get_field('header_logo', $post_id); 
                ?>
                <div class="wrapper_logo">
                    <img class="image_logo" src="<?php if($headerLogo): echo $headerLogo; endif; ?>" alt="FXMS Logo. Brain mark with gears inside and FXMS sign">
                </div>
                
                <nav class="nav">
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'footer-menu'
                            ) 
                        );
                    ?>
                </nav>
                <div class="footer_disclaimer_wrapper">
                    <?php 
                        $footerDisclaimer = get_field('footer_disclaimer', $post_id);
                        $footerButtonText = get_field('footer_button_text', $post_id);
                        $footerButtonLink = get_field('footer_button_link', $post_id);
                    
                    ?>
                    
                    <p class="footer_disclaimer_text"><?php if($footerDisclaimer): echo $footerDisclaimer; endif; ?></p>
                </div>
                <a href="<?php if($footerButtonLink): echo $footerButtonLink; endif; ?>" target="_blank" class="btn">
                    <?php if($footerButtonText): echo $footerButtonText; endif; ?>
                </a>
            </div>
        </footer>
    <?php wp_footer(); ?>
</body>
</html>