<?php
/*  Template Name: Page Room Feature
    Template Post Type: page
*/
?>
<?php get_header() ?>

<?php
while (have_posts()) : the_post(); ?>

    <div class="banner banner-page" style="background: linear-gradient(#003651, #004a6f, #00689c); ">
        <div class="container" id="banner_top">
            <div class="row">
                <h1 class="title_room"><?php the_title() ?></h1>
            </div>
        </div>
    </div>
    <section class="how-to-tempalte">
        <?php
        the_content();
        ?>
    </section>
    <section id="carausel_slide">


        <?php if (get_field('turn_on_slide')) { ?>

            <div id="carousel_slide_home" class="carousel slide custome_slide carousel-fade" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <?php $i = 0;
                    while (have_rows('slide_carousel')) : the_row() ?>
                        <li data-target="#carousel_slide_home" data-slide-to="<?= $i ?>" <?php if ($i == 0) {
                                                                                                echo "class='active'";
                                                                                            } ?>></li>
                        <?php $i++;
                    endwhile; ?>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    <?php $i = 0;
                    while (have_rows('slide_carousel')) : the_row() ?>
                        <div class="carousel-item 
                                    <?php if ($i == 0) {
                                        echo 'active';
                                    } ?>">
                            <img src="<?php the_sub_field('background-image') ?>">
                            <div class="container">
                                <div class="slider-caption fadeInDown wow" data-wow-duration="1s">
                                    <div class="items-slider ml-auto mr-auto d-flex flex-column bd-highlight justify-content-center">
                                        <h2 class="text-white text-uppercase f-t-b mb-1 align-self-center w-100"><?php the_sub_field('title') ?></h2>
                                        <article class="text-white align-self-center w-100">
                                            <?php the_sub_field('content') ?>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $i++;
                    endwhile; ?>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#carousel_slide_home" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="carousel-control-text hvr-sweep-to-right">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel_slide_home" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    <span class="carousel-control-text hvr-sweep-to-left">Next</span>
                </a>

            </div>
        <?php } ?>


    </section>
    <?php


    if (have_rows('button_bottom')) : ?>
        <section id="button-room">
            <div class="container-fluid">
                <div class="row">
                    <?php
                    // loop through the rows of data
                    $id = 0;
                    while (have_rows('button_bottom')) : the_row(); ?>

                        <div class="col-md-6 bottom_service_ft  hvr-shutter-out-horizontal f-w-600 text-center" style="background: <?php the_sub_field('background') ?>">
                            <a class="f-t-b" href="<?php the_sub_field('href'); ?>" id="block-service-<?= $id ?>"><?php the_sub_field('content'); ?></a>
                        </div>
                        <style>
                            #button-room .row .bottom_service_ft:hover a#block-service-<?= $id ?> {
                                color: <?php the_sub_field('background');
                                        ?> !important;
                            }
                        </style>
                        <?php $id++; ?>
                    <?php

                endwhile;

            else :

            // no layouts found

            endif;
            ?>

            <?php
        endwhile; // End of the loop.
        ?>
        </div>
    </div>
</section>
<script>
    new WOW().init();
</script>
<?php get_footer() ?>