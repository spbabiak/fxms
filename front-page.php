<?php get_header(); ?>

<section id="hero_section" class="hero">
    <div class="wrapper_slider">
        <?php 
            $slider = get_field('slider');
            if($slider):
        ?>
            <?php foreach($slider as $slide): ?>
                <?php if($slide): ?>
                <div class="wrapper_slide_content" style="background-image: url('<?= $slide['slide_image']; ?>');">
                    <div class="wrapper">
                        <div class="slide_content" style="text-align: <?= $slide['slide_content_alignment']?>;">
                            <h1 class="slide_content_title"><?= $slide['slide_title']; ?></h1>
                            <p class="slide_content_description"><?= $slide['slide_description']; ?></p>
                            <a class="btn btn_fill" href="<?= $slide['slide_button_link']; ?>"><?= $slide['slide_button_text']; ?></a>
                        </div>
                    </div>
                </div>
                <?php endif;?>
            <?php endforeach;?>
        <?php endif;?>
    </div>
    <div class="wrapper_slide_indicators"><!--
        <?php foreach($slider as $slide): ?>
            <?php if($slide): ?>
               --><span class="slide_indicator"></span><!--
            <?php endif; ?>
        <?php endforeach; ?>
    --></div>
</section>

<section id="our_advantages_section" class="our_advantages">
    <?php 
        $advantagesTitle = get_field('our_advantages_title');
        $advantagesDescription = get_field('our_advantages_description');   
        $advantagesFunds = get_field('our_advantages_funds');
    ?>
    <div class="wrapper_advantages">
        <div class="wrapper">
            <div class="advantages_text">
                <h2 class="section_title"><?php if($advantagesTitle): echo $advantagesTitle; endif; ?></h2>
                <p class="section_description"><?php if($advantagesDescription): echo $advantagesDescription; endif; ?></p>
            </div>
            <ul class="advantages_funds_list">
                <li class="advantages_funds_item">
                    <div class="icon_overlay">
                    <svg class="icon_forex" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 106 106">
                        <path d="M89.8749 20.3125h-74.375c-2.4163 0-4.375 1.9588-4.375 4.375V68c0 2.4162 1.9587 4.375 4.375 4.375h74.375c2.4162 0 4.375-1.9588 4.375-4.375V24.6875c0-2.4162-1.9588-4.375-4.375-4.375Z"/>
                        <path d="M53.125 72.5938a.2187.2187 0 1 0-.4375 0v21.4374a.2187.2187 0 1 0 .4375 0V72.5938Zm0-61.25a.2187.2187 0 1 0-.4375 0v8.3124a.2187.2187 0 1 0 .4375 0v-8.3124Z"/>
                        <path d="M52.6715 86.6482a.2188.2188 0 0 0-.2383-.367l-11.7413 7.625a.2187.2187 0 1 0 .2382.3669l11.7414-7.6249Z"/>
                        <path d="M52.7036 86.6483a.2188.2188 0 0 1 .2383-.3669l11.7414 7.6249a.2188.2188 0 0 1-.2383.3669l-11.7414-7.6249Zm-6.8744-43.1088a.2187.2187 0 1 0-.3093-.3094L30.98 57.77a.2188.2188 0 0 0 .3093.3094l14.5399-14.5399Z"/>
                        <path d="M55.642 53.5076a.2188.2188 0 0 0 .3094-.3094l-9.8995-9.8995a.2188.2188 0 0 0-.3094.3094l9.8995 9.8995Zm19.6059-18.3868a.2187.2187 0 1 0-.3093-.3094L56.6864 53.0636a.2188.2188 0 0 0 .3093.3094l18.2522-18.2522Z"/>
                    </svg>
                    </div>
                    <?php if($advantagesFunds) : ?>
                        <span class="advantages_funds_item_text"><?= $advantagesFunds['our_advantages_fund_1']; ?></span>
                    <?php endif;?>
                </li>
                <li class="advantages_funds_item">
                    <div class="icon_overlay">
                        <svg class="icon_stocks" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 106 106">
                            <path d="M33.32 30.84a.73.73 0 0 0-.32-.6 1.1 1.1 0 0 0-.73-.27c-.3 0-.54.09-.74.26a.77.77 0 0 0-.31.61v4.24h-2.68c-.29 0-.54.09-.74.26a.77.77 0 0 0-.31.61v25.11c0 .24.1.44.31.61.2.17.45.26.74.26h2.68v1.4c0 .24.1.44.31.61.2.18.45.26.74.26.28 0 .53-.08.73-.26.2-.17.31-.37.32-.6v-1.4h2.46c.29 0 .54-.1.74-.27.2-.17.31-.37.31-.6V35.94c0-.24-.1-.44-.31-.6a1.1 1.1 0 0 0-.74-.27h-2.46v-4.24Zm-3.73 5.99h5.14v23.36H29.6V36.83Zm-11.34 8.03c-.29 0-.54.09-.74.26a.78.78 0 0 0-.31.61v36.38c0 .24.1.44.31.61.2.17.45.26.74.26h2.67v2.27c0 .24.11.44.32.61.2.18.45.26.73.27.3 0 .54-.1.74-.27.2-.17.31-.37.31-.6v-2.28h2.47c.29 0 .53-.09.74-.26.2-.17.31-.37.31-.61V45.73c0-.24-.1-.44-.31-.6-.2-.18-.45-.27-.74-.27h-2.47v-.65c0-.24-.1-.45-.31-.62a1.1 1.1 0 0 0-.74-.26c-.28 0-.53.1-.73.26a.77.77 0 0 0-.32.62v.65h-2.67Zm1.05 1.75h5.14v34.62H19.3V46.61Zm24.3-3.1c0-.24-.1-.45-.31-.61a1.1 1.1 0 0 0-.74-.27c-.28 0-.53.1-.73.27a.77.77 0 0 0-.32.6v4.24h-2.67c-.29 0-.54.1-.74.26a.77.77 0 0 0-.31.62v25.1c0 .24.1.45.31.61.2.18.45.27.74.27h2.67v2.8c0 .23.11.43.32.6.2.18.45.26.73.27.3 0 .54-.1.74-.27.2-.17.31-.37.31-.6v-2.8h2.47c.29 0 .53-.1.74-.27a.8.8 0 0 0 .31-.6V48.61c0-.24-.1-.45-.31-.62-.2-.17-.45-.26-.74-.26H43.6V43.5Zm1.42 5.98v23.36h-5.14V49.49h5.14Zm8.14-10.74a1.1 1.1 0 0 0-.74-.27c-.28 0-.53.1-.73.27a.77.77 0 0 0-.32.6v4.24H48.7c-.29 0-.54.1-.74.27a.78.78 0 0 0-.31.6v7.65c0 .24.1.44.31.61.2.17.45.26.74.26h2.67v3.71c0 .24.11.45.32.62.2.17.45.26.73.26.3 0 .54-.1.74-.26a.8.8 0 0 0 .31-.62V53h2.47c.29-.01.53-.1.74-.27.2-.17.31-.37.31-.61v-7.64c0-.24-.1-.45-.31-.61a1.1 1.1 0 0 0-.74-.27h-2.47v-4.23c0-.24-.1-.44-.31-.61Zm-3.41 12.49v-5.9h5.14v5.9h-5.14ZM63.03 27.7c0-.24-.1-.44-.32-.61a1.1 1.1 0 0 0-.73-.26c-.29 0-.53.09-.74.26a.77.77 0 0 0-.31.6v12.2h-2.47c-.29 0-.53.08-.73.25a.77.77 0 0 0-.32.62v7.64c0 .24.1.44.32.6.2.18.44.27.73.27h2.47v1.7c0 .24.1.45.31.62.2.17.45.26.74.26s.53-.1.73-.26a.78.78 0 0 0 .32-.62v-1.7h2.68c.29 0 .53-.09.73-.26a.8.8 0 0 0 .32-.61v-7.64a.78.78 0 0 0-.32-.62 1.1 1.1 0 0 0-.73-.26 19.13 19.13 0 0 1-.53 0h-2.15V27.7Zm-3.52 19.82v-5.9h5.15v5.9H59.5Zm13.55-31.35a.76.76 0 0 0-.32-.61 1.1 1.1 0 0 0-.73-.26c-.29 0-.54.09-.74.26a.77.77 0 0 0-.31.61v3.84h-2.68c-.29 0-.53.1-.74.27a.77.77 0 0 0-.31.6V46c0 .23.1.44.31.6.2.18.45.27.74.27h2.68v7.64c0 .24.1.44.31.61.2.17.45.26.74.26.28 0 .53-.09.73-.26.21-.17.32-.37.32-.6v-7.65h2.46c.3 0 .54-.09.74-.26a.8.8 0 0 0 .31-.61V20.89c0-.24-.1-.45-.31-.61a1.1 1.1 0 0 0-.74-.27h-2.46v-3.84Zm-3.73 5.6h5.14v23.35h-5.14V21.76Zm25.99 66.8c0 .24.1.44.31.61l.79.66H6.02V16.87l.83.7c.22.18.46.27.74.26.3 0 .55-.09.73-.26.22-.18.33-.4.32-.66 0-.22-.1-.43-.32-.6l-2.88-2.37a1.2 1.2 0 0 0-.74-.21c-.28 0-.53.09-.73.26l-2.84 2.36a.77.77 0 0 0-.31.6c0 .25.1.45.31.62.2.17.45.26.74.26.28 0 .53-.09.73-.26l.79-.66v74.02c0 .3.13.54.37.74.27.23.58.35.94.35h91.72l-.84.7a.8.8 0 0 0-.26.61c0 .25.1.46.31.61.22.18.46.27.74.26.3 0 .55-.09.73-.26l2.84-2.4a.74.74 0 0 0 .31-.61.8.8 0 0 0-.31-.61l-2.84-2.36a1.1 1.1 0 0 0-.73-.26c-.3 0-.54.09-.74.26a.77.77 0 0 0-.31.61Zm-8.98-51a1.1 1.1 0 0 0-.74-.26h-2.46v-.66a.76.76 0 0 0-.32-.61 1.1 1.1 0 0 0-.73-.26c-.3 0-.54.09-.74.26a.77.77 0 0 0-.31.61v.66h-2.68c-.29 0-.53.08-.74.26a.78.78 0 0 0-.31.6v36.38c0 .24.1.45.31.61.2.18.45.26.74.27h2.68v2.27c0 .24.1.44.31.6.2.18.45.27.74.27.28 0 .53-.09.73-.26a.8.8 0 0 0 .32-.61v-2.27h2.46c.3 0 .54-.1.74-.27.2-.16.31-.37.31-.6V38.17c0-.24-.1-.44-.31-.61Zm-6.93 1.48h5.14v34.63h-5.14V39.05Z"/>
                        </svg>
                    </div>
                    <?php if($advantagesFunds) : ?>
                        <span class="advantages_funds_item_text"><?= $advantagesFunds['our_advantages_fund_2']; ?></span>
                    <?php endif;?>
                </li>
                <li class="advantages_funds_item">
                    <div class="icon_overlay">
                    <svg class="icon_metals" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 106 106">
                        <path d="m38.32 17.15-4.2 27.46h37.14l-4.6-27.46H38.33ZM13.29 59.96 9.07 87.42h37.16l-4.6-27.46H13.29Zm49.26 0-4.2 27.46H95.5l-4.6-27.46H62.55Z"/>
                    </svg>
                    </div>
                    <?php if($advantagesFunds) : ?>
                        <span class="advantages_funds_item_text"><?= $advantagesFunds['our_advantages_fund_3']; ?></span>
                    <?php endif;?>
                </li>
                <li class="advantages_funds_item">
                    <div class="icon_overlay">
                    <svg class="icon_crypto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 106 106">
                        <path d="M52.69 94.25a41.56 41.56 0 1 0 0-83.13 41.56 41.56 0 0 0 0 83.13Z"/>
                        <path d="M52.89 23.61A29.31 29.31 0 0 0 23.6 52.9a29.31 29.31 0 0 0 29.3 29.27 29.31 29.31 0 0 0 29.28-29.28A29.31 29.31 0 0 0 52.89 23.6Zm0 55.93A26.68 26.68 0 0 1 26.24 52.9a26.68 26.68 0 0 1 26.65-26.65A26.68 26.68 0 0 1 79.54 52.9 26.68 26.68 0 0 1 52.9 79.54Z"/>
                        <path d="M52.92 40.57c.97 0 1.92.11 2.84.33h.03c2.2.52 4.2 1.64 5.84 3.28a1.84 1.84 0 1 0 2.6-2.6A15.93 15.93 0 0 0 58 37.7v-4.9a1.84 1.84 0 0 0-3.68 0v4.15a16.35 16.35 0 0 0-2.78 0V32.8a1.84 1.84 0 1 0-3.67 0v4.91a15.94 15.94 0 0 0-6.25 3.87 15.89 15.89 0 0 0-4.69 11.31 15.9 15.9 0 0 0 4.69 11.31 15.92 15.92 0 0 0 6.25 3.87v4.9a1.84 1.84 0 0 0 3.67 0v-4.15a16.32 16.32 0 0 0 2.78 0v4.15a1.84 1.84 0 1 0 3.68 0v-4.9a15.93 15.93 0 0 0 6.24-3.87 1.84 1.84 0 1 0-2.6-2.6 12.25 12.25 0 0 1-5.84 3.28h-.02a12.4 12.4 0 0 1-5.68 0h-.05a12.24 12.24 0 0 1-5.83-3.28 12.24 12.24 0 0 1-3.61-8.71c0-3.3 1.28-6.39 3.6-8.71a12.24 12.24 0 0 1 8.72-3.61Z"/>
                    </svg>
                    </div>
                    <?php if($advantagesFunds) : ?>
                        <span class="advantages_funds_item_text"><?= $advantagesFunds['our_advantages_fund_4']; ?></span>
                    <?php endif;?>
                </li>
            </ul>
        </div>
    </div>
</section>

<section id="platform_info_section" class="platform_info">
    <div class="wrapper_platform_info">
        <div class="wrapper">
            <?php 
                $platformInfoTitle = get_field('platform_info_title');
                $platformInfoDescription = get_field('platform_info_description');
                $platformInfoButtonLink = get_field('platform_info_button_link');
                $platformInfoButtonText = get_field('platform_info_button_text');
            ?>
            <div class="platform_info_content">
                <h2 class="section_title"><?php if($platformInfoTitle): echo $platformInfoTitle; endif; ?></h2>
                <img class="platform_image_demo" srcset="<?php echo get_template_directory_uri() . '/images/platform_demo_215w.png'; ?> 215w,
                            <?php echo get_template_directory_uri() . '/images/platform_demo_499w.png'; ?> 499w"
                    sizes="(max-width: 599px) 215px,
                                499px"
                    src="<?php echo get_template_directory_uri() . '/images/platform_demo_499w.png'; ?>" alt="Platform Demo on Mobile and Desktop Devices">
                <p class="section_description"><?php if($platformInfoDescription): echo $platformInfoDescription; endif; ?></p>
                <a class="btn btn_fill" href="<?php if($platformInfoButtonLink): echo $platformInfoButtonLink; endif; ?>">
                    <?php if($platformInfoButtonText): echo $platformInfoButtonText; endif; ?>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="instruments_info_section" class="instruments_info">
    <div class="wrapper_instruments_info">
        <div class="wrapper">
            <?php 
                $instrumentsInfoTitle = get_field('instruments_info_title');
                $instruments = get_field('instruments');
            ?>
            <div class="instruments_info_content">
                <h2 class="section_title"><?php if($instrumentsInfoTitle): echo $instrumentsInfoTitle; endif;  ?></h2>
                <ul class="instruments_list snaps_inline">
                    <?php if($instruments): ?>
                    <?php foreach($instruments as $instrument): ?>
                        <li class="instruments_list_item">
                            <div class="wrapper_instruments_list_item_icon">
                                <span class="instruments_list_item_icon" style="width: 54px; height: 54px; display: inline-block; background-image: url('<?= $instrument['instrument_icon']; ?>');"></span>
                            </div>
                            <div class="wrapper_instruments_price"><!--
                            --><span class="instruments_name"><?= $instrument['instrument_name']?></span><!--
                            --><span class="instruments_price"><?= $instrument['instrument_price']?></span><!--
                        --></div> 
                            <div class="wrapper_instruments_percentage"><!--
                            --><svg class="icon_arrow" xmlns="http://www.w3.org/2000/svg"><!--
                                --><path d="M8.87 12.5a1 1 0 0 1-1.74 0L1.07 2A1 1 0 0 1 1.94.5h12.12a1 1 0 0 1 .87 1.5L8.87 12.5Z"/><!--
                            --></svg><!--
                            --><span class="instruments_grow_percentage"><?= $instrument['instrument_grow_percentage']?></span><!--
                        --></div>
                        </li>
                    <?php endforeach;?>
                    <?php endif; ?>
                </ul>
                <a href="#" class="btn service_btn">
                    Show More
                    <svg class="icon_arrow" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.87 12.5a1 1 0 0 1-1.74 0L1.07 2A1 1 0 0 1 1.94.5h12.12a1 1 0 0 1 .87 1.5L8.87 12.5Z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="membership_steps_section" class="membership_steps">
    <div class="wrapper_membership_steps">
        <div class="wrapper">
            <?php 
                $membershipTitle = get_field('membership_steps_title');
                $membershipSteps = get_field('membership_steps');
            ?>
            <div class="membership_steps_content">
                <h2 class="section_title"><?php if($membershipTitle): echo $membershipTitle; endif; ?></h2>
                <ul class="membership_steps_list">
                    <?php if($membershipSteps): ?>
                        <?php $i = 1; ?>
                    <?php foreach($membershipSteps as $step): ?>
                        <li class="membership_steps_list_item">
                            <h3 class="membership_steps_title"><?= $step['step_title']; ?></h3>
                            <p class="membership_steps_description"><?= $step['step_description']; ?></p>
                            <span class="step_number"><?php echo '0'. $i; $i++; ?></span>
                        </li>
                    <?php endforeach;?>
                    <?php endif;?>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="tiers_section" class="tiers">
    <div class="wrapper_tiers">
        <div class="wrapper">
            <?php 
                $tiersTitle = get_field('tiers_cards_title');
                $tiers = get_field('tiers');
            ?>
            <div class="tiers_content">
                <h2 class="section_title"><?php if($tiersTitle): echo $tiersTitle; endif; ?></h2>
                <div class="wrapper_tier_cards">
                    <?php if($tiers): $i = 0; ?>
                        <?php foreach($tiers as $tier): ++$i;?>
                            <div class="tier_card">
                                <h4 class="tier_card_title"><?= $tier['tier_title']; ?></h4>
                                <ul class="tier_card_benefits_list">
                                    <?php if($tier['tier_benefits']): ?>
                                    <?php foreach($tier['tier_benefits'] as $tierBenefit): ?>
                                        <li class="tier_card_benefits_item">
                                            <span class="tier_card_benefits_title"><?= $tierBenefit['benefit_title']; ?></span>
                                            <span class="tier_card_benefits_details"><?= $tierBenefit['benefit_details']; ?></span>
                                        </li>
                                    <?php endforeach;?>
                                    <?php endif; ?>
                                </ul>
                                <?php if($i == 1): ?>
                                    <a class="btn ghost_btn_1" href="<?= $tier['tier_button_link']; ?>"><?= $tier['tier_button_text']; ?></a>
                                <?php elseif($i == 2): ?>
                                    <a class="btn ghost_btn_2" href="<?= $tier['tier_button_link']; ?>"><?= $tier['tier_button_text']; ?></a>    
                                <?php endif; ?>        
                            </div>
                        <?php endforeach;?>
                    <?php endif;?>
                </div>
            </div>        
        </div>
    </div>
</section>

<section id="faq_section" class="faq">
    <div class="wrapper">
            <?php 
                $FAQTitle = get_field('faq_title');
                $categories = get_field('faq_categories');
            ?>
            <div class="faq_content">
                <h2 class="section_title"><?php if($FAQTitle): echo $FAQTitle; endif; ?></h2>
                <div class="wrapper_faq">
                <?php 
                    $args = array(
                        'posts_type'=> 'post',
                        'posts_per_page' => -1,
                        'cat' => $categories[0]->term_id
                    );
                    
                    $query = new WP_Query($args);
                    if($query->have_posts()): 
                        while($query->have_posts()): 
                            $query->the_post(); 
                ?>
                <div class="faq_list">
                    <div class="wrapper_faq_content">
                        <div class="wrapper_faq_question">
                            <h3><?php the_title(); ?></h3>
                            <svg class="icon_arrow" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.87 12.5a1 1 0 0 1-1.74 0L1.07 2A1 1 0 0 1 1.94.5h12.12a1 1 0 0 1 .87 1.5L8.87 12.5Z"/>
                            </svg>
                        </div>
                        <?php the_content(); ?>
                    </div>
                </div>
                <ul class="faq_categories_list">
                    <?php foreach($categories as $category): ?>
                        <li class="faq_category_item">
                            <a data-category="<?= $category->term_id; ?>" class="faq_category_item_link" href="<?= get_category_link($category->term_id); ?>">
                                <?= $category->name; ?>
                            </a>    
                        </li>    
                    <?php endforeach; ?>
                </ul>
                <?php endwhile; ?>
            <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>