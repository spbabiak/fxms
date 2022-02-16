<?php get_header(); ?>

<section id="hero_section" class="hero">
    <div class="wrapper_slider">
        <?php 
            $slider = get_field('slider');
            if($slider):
        ?>
            <?php foreach($slider as $slide): ?>
                <?php if($slide): ?>
                <div class="slide_content" style="background-image: url('<?= $slide['slide_image']; ?>');">
                    <div class="wrapper">
                        <div class="wrapper_slide_content" style="width: <?= $slide['slide_content_width'] . '%'?>; text-align: <?= $slide['slide_content_alignment']?>;">
                            <h1 class="slide_content_title"><?= $slide['slide_title']; ?></h1>
                            <p class="slide_content_description"><?= $slide['slide_description']; ?></p>
                            <a class="btn" href="<?= $slide['slide_button_link']; ?>"><?= $slide['slide_button_text']; ?></a>
                        </div>
                    </div>
                </div>
                <?php endif;?>
            <?php endforeach;?>
        <?php endif;?>
    </div>
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
                <h2 class="advantages_title"><?php if($advantagesTitle): echo $advantagesTitle; endif; ?></h2>
                <p class="advantages_description"><?php if($advantagesDescription): echo $advantagesDescription; endif; ?></p>
            </div>
            <ul class="advantages_funds_list">
                <li class="advantages_funds_item">
                    <div class="advantages_funds_item_icon_1"></div>
                    <?php if($advantagesFunds) : ?>
                        <span class="advantages_funds_item_text"><?= $advantagesFunds['our_advantages_fund_1']; ?></span>
                    <?php endif;?>
                </li>
                <li class="advantages_funds_item">
                    <div class="advantages_funds_item_icon_2"></div>
                    <?php if($advantagesFunds) : ?>
                        <span class="advantages_funds_item_text"><?= $advantagesFunds['our_advantages_fund_2']; ?></span>
                    <?php endif;?>
                </li>
                <li class="advantages_funds_item">
                    <div class="advantages_funds_item_icon_3"></div>
                    <?php if($advantagesFunds) : ?>
                        <span class="advantages_funds_item_text"><?= $advantagesFunds['our_advantages_fund_3']; ?></span>
                    <?php endif;?>
                </li>
                <li class="advantages_funds_item">
                    <div class="advantages_funds_item_icon_4"></div>
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
                <h2 class="platform_info_title"><?php if($platformInfoTitle): echo $platformInfoTitle; endif; ?></h2>
                <p class="platform_info_description"><?php if($platformInfoDescription): echo $platformInfoDescription; endif; ?></p>
                <a class="btn" href="<?php if($platformInfoButtonLink): echo $platformInfoButtonLink; endif; ?>">
                    <?php if($platformInfoButtonText): echo $platformInfoButtonText; endif; ?>
                </a>
            </div>
            <div class="wrapper_planform_info_image"></div>
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
                <h2 class="instruments_info_title"><?php if($instrumentsInfoTitle): echo $instrumentsInfoTitle; endif;  ?></h2>
                <ul class="instruments_list">
                    <? if($instruments): ?>
                    <?php foreach($instruments as $instrument): ?>
                        <li class="instruments_list_item">
                            <div class="wrapper_instruments_list_item_icon">
                                <span class="instruments_list_item_icon" style="width: 54px; height: 54px; display: inline-block; background-image: url('<?= $instrument['instrument_icon']; ?>');"></span>
                            </div>
                            <span class="instruments_list_item_name"><?= $instrument['instrument_name']?></span>
                            <div class="instruments_numbers">
                                <span class="instruments_list_item_price"><?= $instrument['instrument_price']?></span>
                                <span class="instruments_list_item_grow_percentage"><?= $instrument['instrument_grow_percentage']?></span>
                            </div>
                        </li>
                    <?php endforeach;?>
                    <? endif; ?>
                </ul>
                <a href="#" class="btn btn_service">Show More</a>
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
                <h2 class="membership_steps_title"><?php if($membershipTitle): echo $membershipTitle; endif; ?></h2>
                <ul class="membership_steps_list">
                    <?php if($membershipSteps): ?>
                    <?php foreach($membershipSteps as $step): ?>
                        <li class="membership_steps_list_item">
                            <h3 class="membership_steps_item_title"><?= $step['step_title']; ?></h3>
                            <p class="membership_steps_item_description"><?= $step['step_description']; ?></p>
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
                <h2 class="tiers_title"><?php if($tiersTitle): echo $tiersTitle; endif; ?></h2>
                <div class="wrapper_tier_cards">
                    <?php if($tiers): ?>
                        <?php foreach($tiers as $tier): ?>
                            <div class="tier_card">
                                <h4 class="tier_card_title"><?= $tier['tier_title']; ?></h4>
                                <ul class="tier_card_benefits_list">
                                    <?php if($tier['tier_benefits']): ?>
                                    <?php foreach($tier['tier_benefits'] as $tierBenefit): ?>
                                        <li class="tier_card_benefits_item">
                                            <span class="tier_card_benefits_item_title"><?= $tierBenefit['benefit_title']; ?></span>
                                            <span class="tier_card_benefits_item_details"><?= $tierBenefit['benefit_details']; ?></span>
                                        </li>
                                    <?php endforeach;?>
                                    <?php endif; ?>
                                </ul>
                                <a class="btn" href="<?= $tier['tier_button_link']; ?>"><?= $tier['tier_button_text']; ?></a>
                            </div>
                        <?php endforeach;?>
                    <?php endif;?>
                </div>
            </div>        
        </div>
    </div>
</section>

<section id="faq_section" class="faq">
    <div class="wrapper_tiers">
        <div class="wrapper">
            <?php 
                $FAQTitle = get_field('faq_title');
                $categories = get_field('faq_categories');
            ?>
            <div class="faq_content">
                <h2 class="faq_title"><?php if($FAQTitle): echo $FAQTitle; endif; ?></h2>
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
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_content(); ?></p>
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