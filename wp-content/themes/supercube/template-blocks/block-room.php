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
$style = get_field('style');
$bg_image = get_field('background-image');
$bg_color = get_field('background-color');
$title = get_field('title');
$content = get_field('content');
$colorText = get_field('color');

?>
<div class="col-lg-6 content-rooms-venues d-flex align-items-center text-center justify-content-center" style="<?php if($style== 'background-color'){echo "background-color:$bg_color" ; }else{echo "background-image: url(".$bg_image['url']. ")" ;} ;?>">
    <div class="content_room_block pt-2" style="color: <?= $colorText ?>">
        <h4 class="f-t-b " style="color: <?= $colorText ?>"><?= $title; ?></h4>
        <article class="pt-2"> 
            <?= $content ?>
        </article>
    </div>
</div>