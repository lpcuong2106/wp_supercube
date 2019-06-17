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
$title = get_field('title')
?>
    <div class="block_how_to container block_song_info">
        <div class="row">
            <div class="main col-12">
                <?php if(!empty($title)){ ?>
                <h3 class="info_song f-t-b font-weight-bold text-black text-center"><?= $title; ?></h3>
                <?php } ?>
                <?php if(!empty($content)){ echo $content; } ?>
            </div>
        </div>
    </div>
