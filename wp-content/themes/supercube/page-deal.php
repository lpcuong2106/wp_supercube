<?php
/*  Template Name: Page Deal
    Template Post Type: page
*/
?>
<?php get_header() ?>

<?php
while (have_posts()) : the_post(); ?>

    <div class="banner banner-page-super" style="
        <?php 
            if(!empty(get_field('background-image'))){ 
                $image = get_field('background-image');
                echo "background:url('" . $image . "') no-repeat center center fixed; background-size: cover;";
            }
        ?>">
        <div class="container" id="banner_top">
            <div class="row">
                <h1 class="title"><?php the_title() ?></h1>
            </div>
        </div>
    </div>
    <section class="how-to-tempalte">
        <div class="container-fluid">
            <div class="row">
                <?php the_content(); ?>
            </div>
        </div>
    </section>
  <?php  if (have_rows('button_bottom')) : ?>
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
<?php endwhile; ?>
        </div>
    </div>
</section>



<?php get_footer() ?>