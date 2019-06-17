<?php
/*  Template Name: Page Price
    Template Post Type: page
*/
?>
<?php get_header(); ?>
   
<?php

while (have_posts()) : the_post(); ?>

    <div class="banner banner-page"  style="
        <?php 
            if(!empty(get_field('background-image'))){ 
                $image = get_field('background-image');
                echo "background:url('" . $image . "') no-repeat center center fixed; background-size: cover;";
            }else{
                echo 'background: linear-gradient(#003651, #004a6f, #00689c);';
            }
        ?>">
        <div class="container" id="banner_top">
            <div class="row">
                <h1 class="title_room"><?php the_title() ?></h1>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-black">
        <div class="container">
           <div class="row main" id="container_form">
             <div class="col-12" style="padding-top: 110px;">
                    <form action="" id="view_price">
                        <div class="form-group row" id="box-prices">
                            <label for="rooms-select" class="text_view_price f-t-b col-form-label f-w-600 text-white col-xl-3 col-12">VIEWING PRICES FOR</label>
                            <div class="select_button col-xl-9 col-12">

                                    <?php if(!empty(get_field('add_a_post_in_order_to_select'))){ ?>
                                        <select class="form-control form-control-lg text-black"id="room-select">
                                        <?php
                                            $posts = get_field('add_a_post_in_order_to_select');
                                            foreach($posts as $post):  setup_postdata($post); ?>
                                                
                                                <option value="<?php the_ID() ?>"><?php the_title() ?></option>
                                        <?php endforeach;  wp_reset_postdata() ?>
                                        </select>
                                    <?php } ?>
                                    <button type="submit" class="f-t-b text-center btn btn-price btn-lg ">UPDATE</button>

                            </div>
                        </div>
                      
                    </form>
                    
                </div>
           </div>
        </div>
        
    </div>
<?php
    if(!empty(get_the_content())){
?>
    <section class="block_how_to bg-black" id="form_section">
        <div class="container">
            <div class="row main">
                <div class="main col-12 text-center">
                
                    <?php
                        the_content(); 
                    ?>
                </div>  
            </div>
        </div>
        
    </section>
    
<?php } ?>
<div class="container-fluid bg-black">
    <div class="container">
        <div class="row">
                <div id="content_price" class="text-white main text-center col-md-12">

                </div>
        </div>
    </div>
    
</div>
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
<script>
    $(document).ready(function(){
        $("#view_price").submit();
    });
    
</script>
<?php get_footer() ?>