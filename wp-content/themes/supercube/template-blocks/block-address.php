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

$address = get_field('address');

?>
<div class="col-xl-6 col-lg-12 text-center height_map" style="margin: 0;padding:0;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2233.78932611341!2d-3.201405284606041!3d55.953023284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4887c7912a137bdd%3A0x31b8823a7ef7be73!2s58A+George+St%2C+Edinburgh+EH2+2LR%2C+V%C6%B0%C6%A1ng+Qu%E1%BB%91c+Anh!5e0!3m2!1svi!2s!4v1559549498614!5m2!1svi!2s" width="100%" height="100%"  frameborder="0" style="border:0" allowfullscreen></iframe>

</div>

