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

$title = get_field('title');
$background = get_field('background-image');


?>
<div class="col-12">
<div id="testimonial" class="dark-translucent-bg p-0 d-flex align-items-center" style="background-image:url('<?=$background['url']?>');">
    <!-- ================ -->
    <div class="container">
        <div class="row justify-content-lg-center">
            <div class="col-lg-12 text-center">
                <h2 class="title f-t-b m-0"><?= $title ?></h2></div>
        </div>
        <div class="row text-center animate-content fadeInDownSmall wow bounceInDown animated" data-wow-duration="1s" data-wow-delay="0.2s" >
            <?php if(have_rows('block_content')){
                  while(have_rows('block_content')): the_row();     
            ?>
            <div class="col-lg-6  ">
                <div class="feature-box-2">
                    <?php the_sub_field('content'); ?>
                </div>
            </div>
            <?php endwhile; } ?>
        </div>
    </div>
</div>
</div>