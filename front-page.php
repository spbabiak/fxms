<?php get_header(); ?>

<section id="hero" class="hero">
    
    <?php 
        $slider = get_field('slider');
        if($slider): 
    ?>
        <?php foreach($slider as $slide): ?>
            <?php print_r($slide); ?>
        <?php endforeach;?>
    <?php endif;?>

</section>

<section id="our_advantages" class="our_advantages">
    
    <?php 
        $advantages = get_field('our_advantages');
        if($advantages): 
    ?>
        <?php print_r($advantages); ?>

    <?php endif;?>

</section>

<section id="platform_info" class="platform_info">
    
    <?php 
        $platformInfo = get_field('platform_info');
        if($platformInfo): 
    ?>

        <?php print_r($platformInfo); ?>

    <?php endif;?>

</section>

<section id="instruments_info" class="instruments_info">
    
    <?php 
        $instrumentsInfo = get_field('instruments_info');
        if($instrumentsInfo): 
    ?>
        <?php foreach($instrumentsInfo as $instrument): ?>
            <?php print_r($instrument); ?>
        <?php endforeach;?>
    <?php endif;?>

</section>

<section id="membership_instructions" class="membership_instructions">
    
    <?php 
        $membershipInstructions = get_field('membership_instructions');
        if($membershipInstructions): 
    ?>
        <?php foreach($membershipInstructions as $step): ?>
            <?php print_r($step); ?>
        <?php endforeach;?>
    <?php endif;?>

</section>

<section id="tiers" class="tiers">
    <?php echo get_field('tiers_cards_title')?>
    <?php 
        $tiers = get_field('tiers');
        if($tiers): 
    ?>
        <?php foreach($tiers as $tier): ?>
            <?php print_r($tier); ?>
        <?php endforeach;?>
    <?php endif;?>

</section>

<section id="faq" class="faq">
    <?= get_field('faq_title')?>
    <?php $categories = get_field('faq_categories'); print_r($categories);?>
    
    <ul class="faq_categories_list">
        <?php foreach($categories as $category): ?>
            <li class="faq_category_item">
                <a data-category="<?= $category->term_id; ?>" class="faq_category_item_link" href="<?= get_category_link($category->term_id); ?>">
                    <?= $category->name; ?>
                </a>    
            </li>    
        <?php endforeach; ?>
    </ul>
    <?php 
        $args = array(
            'posts_type'=> 'post',
            'posts_per_page' => -1,
            'cat' => $categories[0]->term_id
        );
        
        $query = new WP_Query($args);
        if($query->have_posts()): 
            while($query->have_posts()): $query->the_post(); ?>
                <div class="faq_content">
                    <?php 
                        the_title('<h2>', '</h2>');
                        the_content('p', '</p>');
                    ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

</section>

<?php get_footer(); ?>