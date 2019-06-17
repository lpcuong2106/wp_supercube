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
$id = 'block_feature-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

$content = get_field('content');
$term = get_field('term');

?>
    <div class="block_how_to container">
        <div class="row">
                
                <div class="main col-12">
                <?php if(!empty($content)){echo $content; } ?>
                <?php if(have_rows('button')){
                    while(have_rows('button')): the_row() ?>
                        <div class="col-12 text-center">
                        <a href="<?= the_sub_field('href') ?>" class="btn btn-md btn_blue hvr-shutter-out-horizontal"><?= the_sub_field('text_button') ?></a>    
                        </div>
                <?php endwhile; } ?>
                    <h3 class="terms_condition">Terms &amp; Conditions</h3>
                    <?php if(!empty($content)){ echo $term; } ?>
                </div>
                
        </div>
    </div>
