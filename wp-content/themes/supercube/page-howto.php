<?php
/*  Template Name: Page How To 
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
    <section class="how-to-tempalte">
        <?php
        the_content();
        ?>
    </section>

    <?php
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



<?php get_footer() ?>