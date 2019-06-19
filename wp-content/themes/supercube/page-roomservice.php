<?php
/*  Template Name: Page Room Service
    Template Post Type: page
*/
?>
<?php get_header(); ?>

<?php

while (have_posts()) : the_post(); ?>

    <div class="banner banner-page" style="<?php handle_bacground_header() ?>">
        <div class="container" id="banner_top">
            <div class="row">
                <h1 class="title_room"><?php the_title() ?></h1>
            </div>
        </div>
    </div>
    <?php
    if (!empty(get_field('image_full_width'))) {
        ?>
        <img class="image_full_width" src="<?= get_field('image_full_width')['url'] ?>" alt="">
    <?php } ?>
    <section class="block_how_to">
        <div class="container">
            <div class="row">
                <div class="main col-12 text-center">
                    <?php
                    the_content();
                    ?>
                </div>
            </div>
        </div>

    </section>
    <section id="carausel_slide">
        <!-- Set up your HTML -->
        <div class="owl-carousel">
            <?php

            // check if the flexible content field has rows of data
            if (have_rows('slide')) {

                // loop through the rows of data
                $id = 0;
                while (have_rows('slide')) : the_row(); ?>
                    <?php
                    $image = get_sub_field('image');
                    $content = get_sub_field('content');
                    ?>
                    <div class="background_image_carausel" style="background-image: url('<?= $image['url']; ?>')">

                        <div class="container">
                            <div class="text-center wrapper_content">

                                <h4 class="f-t-b text-uppercase"><?php the_sub_field('header') ?></h4>

                                <article>
                                    <?php echo $content ?>
                                </article>


                            </div>
                        </div>

                    </div>
                <?php
            endwhile;
        }
        ?>
        </div>
    </section>
    <?php get_template_part('handle', 'slipcol');
endwhile; 
?>
</div>
</div>
</section>
<?php
$background = get_field('background');
$text_check = get_field('text_checking');
if (!empty($background) && !empty($text_check)) {
    ?>
    <div class="container-fluid" style="background: url('<?= $background ?>') no-repeat; background-size:cover">
        <div class="row">
            <div class="col-12 testimal text-white text-center ">
                <p class="fadeInDownSmall animated text_checking"><?= $text_check ?></p>
            </div>
        </div>
    </div>
<?php } ?>
<?php get_footer() ?>