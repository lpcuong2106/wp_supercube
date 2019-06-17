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
$content = get_field('content') ?: 'Your content here...';
$colorText = get_field('color') ?: '#ffffff';
// $background_color = get_field('background_color');
// $text_color = get_field('text_color');
?>
<div class="sup-title bg-white text-center" id="<?php echo esc_attr($id); ?>">
    <h3 class="f-t-b" style="color:<?= $colorText ?>"><?= $content ?></h3>
</div>

