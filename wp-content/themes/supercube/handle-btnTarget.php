<?php if (have_rows('button_bottom')) : ?>
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
                        <a class="f-t-b" target="_blank" href="<?php the_sub_field('href'); ?>" id="block-service-<?= $id ?>"><?php the_sub_field('content'); ?></a>
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