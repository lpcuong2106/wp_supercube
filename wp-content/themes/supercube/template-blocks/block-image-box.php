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
// $text_color = get_field('text_color');
?>
<?php if (have_rows('image_box')) { ?>
    <section id="adding-song">
        <div class="container">
            <div class="row">
                <?php while (have_rows('image_box')) : the_row(); ?>
                    <div class="col-12">
                        <div class="row">
                            <div class="image_box col-lg-6 col-md-12">
                                <img src="<?php the_sub_field('image')['url'] ?>" alt="">
                            </div>
                            <div class="content_image col-lg-6 col-md-12">
                                <h3 class="f-t-b"><?php the_sub_field('header') ?></h3>
                                <article>
                                    <?php the_sub_field('content') ?>
                                </article>
                            </div>
                        </div>
                        
                    </div>
                <?php
            endwhile;
        }
        ?>
        </div>
    </div>
</section>