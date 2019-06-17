<?php
/*  Template Name: Page Room Service
    Template Post Type: page
*/
?>
<?php get_header(); ?>
   
<?php

while (have_posts()) : the_post(); ?>

    <div class="banner banner-page" style="background: linear-gradient(#003651, #004a6f, #00689c); ">
        <div class="container" id="banner_top">
            <div class="row">
                <h1 class="title_room"><?php the_title() ?></h1>
            </div>
        </div>
    </div>
<?php    
    if(!empty(get_field('image_full_width'))){
?>
<img class="image_full_width" src="<?= get_field('image_full_width')['url'] ?>" alt="">
<?php }?>
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
    <?php

    // check if the flexible content field has rows of data
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
<?php 
$background = get_field('background');
$text_check = get_field('text_checking');
if(!empty($background) && !empty($text_check)){
?>
<div class="container-fluid"  style="background: url('<?= $background ?>') no-repeat; background-size:cover">
        <div class="row">   
            <div class="col-12 testimal text-white text-center ">
                <p class="fadeInDownSmall animated text_checking"><?= $text_check ?></p>
            </div>
        </div>
</div>
<?php } ?>
<?php get_footer() ?>