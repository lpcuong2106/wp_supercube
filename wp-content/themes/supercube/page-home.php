<?php
/*  Template Name: home page
    Template Post Type: page
*/
?>
<?php get_header(); ?>

<?php

while (have_posts()) : the_post();
    if (get_field('turn_on_slide')) {
        ?>

        <div id="carousel_slide_home" class="carousel slide carousel-fade" data-ride="carousel">

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
                    <div class="carousel-item <?php if ($i == 0) {
                                                    echo 'active';
                                                } ?>">
                        <img src="<?php the_sub_field('background-image') ?>">
                        <div class="container">
                            <div class="slider-caption">
                                <h2 class="f-t-b text-white fadeInDown animated wow" data-wow-duration="1s"><?php the_sub_field('title') ?></h2>
                                <?php the_sub_field('content') ?>
                                <?php if (have_rows('button')) {
                                    while (have_rows('button')) : the_row(); ?>
                                        <article style="margin-bottom: 20px;">
                                            <a href="<?php the_sub_field('link') ?>" class="text-center hvr-shutter-out-horizontal f-t-b fadeInLeft animated btn btn-lg btn_slide_home" data-wow-duration="1s"><?php the_sub_field('text_button') ?></a>
                                        </article>

                                    <?php

                                endwhile; ?>

                                <?php } ?>
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
    <?php } else { ?>

        <div class="banner banner-page" style="background: linear-gradient(#003651, #004a6f, #00689c); ">
            <div class="container" id="banner_top">
                <div class="row">
                    <h1 class="title_room"><?php the_title() ?></h1>
                </div>
            </div>
        </div>
    <?php } ?>
    <?php
    if (!empty(get_the_content())) {
        ?>
        <section class="container-fluid" id="home_page">
            <div class="row">
                <?php
                the_content();
                ?>
            </div>

        </section>

    <?php }
// check if the flexible content field has rows of data
if (have_rows('button_bottom')) : ?>
    <section id="button-room">
        <div class="container-fluid">
            <div class="row">
                <?php
                $nnumberCollum = get_field('number_collum');
            
                switch((int)$nnumberCollum){
                    case 1:
                        $colum = 12;
                        break;
                    case 2:
                        $colum = 6;
                        break;
                    case 3:
                        $colum = 4;
                        break;
                    case 4:
                        $colum = 3;
                        break;
                    default:
                        $colum = 12;
                        break;
                };
                // loop through the rows of data
                $id = 0;
                while (have_rows('button_bottom')) : the_row(); ?>

                    <div class="col-md-<?= $colum ?> bottom_service_ft  hvr-shutter-out-horizontal f-w-600 text-center" style="background: <?php the_sub_field('background') ?>">
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