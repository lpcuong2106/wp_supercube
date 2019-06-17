<?php
/*  Template Name: Page Contact 
    Template Post Type: page
*/
?>
<?php get_header() ?>

<?php
while (have_posts()) : the_post(); ?>

    <div class="banner banner-page-super" style="background:url('https://i2.wp.com/supercube.biz/wp-content/uploads/2018/10/21-1.jpg') no-repeat center center fixed; background-size: cover;">
        <div class="container" id="banner_top">
            <div class="row">
                <h1 class="title"><?php the_title() ?></h1>
            </div>
        </div>
    </div>
    <section >
        <div class="container-fluid">
            <div class="row">
                    <?php the_content(); ?>
            </div>
        </div>
       
    </section>

    <?php

    // check if the flexible content field has rows of data
    if (have_rows('block_bottom')) : ?>
        <section id="button-service">
            <div class="container-fluid">
                <div class="row">
                    <?php
                    // loop through the rows of data
                    $id = 0;
                    while (have_rows('block_bottom')) : the_row(); ?>

                        <div class="col-lg-3 bottom_service_ft text-center hvr-shutter-out-horizontal" style="background: <?php the_sub_field('background') ?>">
                            <a href="" id="block-service-<?= $id ?>"><?php the_sub_field('content_bottom'); ?></a>
                        </div>
                        <style>
                            #button-service .row .bottom_service_ft:hover a#block-service-<?= $id ?> {
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



<?php get_footer() ?>