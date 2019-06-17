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

$header = get_field('header');
$content = get_field('content');
$color = get_field('background') ?: '#ffffff';
$colorText = get_field('color') ?: '#ffffff';
$button = get_field('button_option');

?>
<div class="block_how_to container" id="<?php echo esc_attr($id); ?>">
    <div class="col-12 main text-center" style="background: <?= $color ?>; color: <?= $colorText ?>">
       <?php if(!empty($header)){?>
        <h4 class="title_block_hw text-center font-weight-bold" style="color:<?= $colorText ?>!important"><?php echo $header ?></h4>
        <?php } ?>
       <?php if(!empty($content)){?>
        <article class="text-center">
            <?php echo $content ?>
        </article>
        <?php } ?>
        <?php if (have_rows('button_option')) {
            $id= 0;
            while (have_rows('button_option')) : the_row(); ?>
             
                <a href="<?php the_sub_field('link') ?>" class="btn-wel-<?= $id ?> text-center hvr-shutter-out-horizontal f-t-b btn btn-lg btn_welc_block"
                   style="background: <?php the_sub_field('background') ?>; color:<?php the_sub_field('color_text') ?>"><?php the_sub_field('text_button') ?></a>
              <style>
                  .btn-wel-<?= $id ?>:hover{
                    color: <?php the_sub_field('background') ?>!important;
                  }
              </style>
                  
            <?php
            $id++;
            endwhile;?>
            
     <?php } ?>

    </div>
</div>
