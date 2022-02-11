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

<?php get_footer(); ?>