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

$title = get_field('title');
$description = get_field('description');
$hr_peak_time = get_field('hr_peak_time');
$hr_off_peak_time = get_field('hr_off_peak_time');

?>
<div class="bg-gray block-item" >
    <div class="row">
        <div class="col-6 text-left">
            <h4 class="f-t-b text-white"><?= $title ?></h4>
            <?= $description ?>
        </div>
        <div class="col-6 text-center d-flex price_item">
            <h5 class="f-t-b text-pri">£<?= $hr_peak_time ?>/HR PEAK TIME</h5>
            <h5 class="f-t-b text-yellow">£<?= $hr_off_peak_time ?>/HR OFF PEAK TIME</h5>
        </div>
    </div>
</div>

