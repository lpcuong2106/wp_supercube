<?php

/**
 * Testimonial Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'block_how_to-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
// $className = 'testimonial';
// if( !empty($block['className']) ) {
//     $className .= ' ' . $block['className'];
// }
// if( !empty($block['align']) ) {
//     $className .= ' align' . $block['align'];
// }

// Load values and assing defaults.

$header = get_field('header');
$content = get_field('content');
$color = get_field('background') ?: '#ffffff';
$colorText = get_field('color') ?: '#ffffff';
$button = get_field('button_option');
//$image = get_field('image') ?: 295;
// $background_color = get_field('background_color');
// $text_color = get_field('text_color');
?>
<div class="block_how_to" id="<?php echo esc_attr($id); ?>">
    <div class="col-12 main text-center" style="background: <?= $color ?>; color: <?= $colorText ?>">
       <?php if(!empty($header)){?>
        <h4 class="title_block_hw text-center font-weight-bold"><?php echo $header ?></h4>
        <?php } ?>
       <?php if(!empty($content)){?>
        <article class="text-center">
            <?php echo $content ?>
        </article>
        <?php } ?>
        <?php if (have_rows('button_option')) {
            while (have_rows('button_option')) : the_row(); ?>
                <p style="margin-bottom: 20px;">
                <a href="<?php the_sub_field('link') ?>" class="text-center hvr-shutter-out-horizontal f-t-b btn btn-lg btn_on_block"
                   style="background: <?php the_sub_field('background') ?>; color:<?php the_sub_field('color_text') ?>"><?php the_sub_field('text_button') ?></a>
                </p>
                  
            <?php

            endwhile;?>
            
     <?php } ?>

    </div>
</div>

