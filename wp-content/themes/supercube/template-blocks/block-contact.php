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
$title = get_field('title') ?: 'Your title here...';
$colorText = get_field('color') ?: '#000';
$background = get_field('background') ?: '#ffffff';
$content = get_field('content');
$button = get_field('button');
$address = get_field('address');

?>
<div class="col-xl-6 col-lg-12 text-center" style="background: <?= $background ?>; color: <?= $colorText; ?>!important">
    <div class="body_contact">
        <h2 class="title-venues f-t-b"><?= $title ?></h2>
        <article class="article_contact">
            <?= $content ?>
        </article>
        <?php if(have_rows('button')){
                while(have_rows('button')): the_row(); ?>
                    <a href="<?php the_sub_field('href') ?>" class="btn btn-md btn_blue hvr-shutter-out-horizontal"><?php the_sub_field('text') ?></a>
              <?php   endwhile ?>
        <?php } ?>
        <article class="article_contact">
            <?= $address ?>
        </article>
    </div>
    
</div>

