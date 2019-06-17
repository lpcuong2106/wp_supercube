<?php
/*  
    Template Post Type: post
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
<?php }

    if(!empty(get_the_content())){
?>
    <section class="block_how_to container page_default" >
        <div class="row">
            <div class="main">
                <?php 
                     the_content();
                ?>
            </div>
        </div>
       
    </section>
    
<?php } endwhile; // End of the loop.?>
        </div>
    </div>
</section>

<?php get_footer() ?>