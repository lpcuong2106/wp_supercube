<?php
/*  
    Template Name: page venous
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
    if (!empty(get_the_content())) {
        ?>
        <section class="block_how_to container-fluid page_default">
            <div class="row">
                <?php
                the_content();
                ?>
            </div>
        </section>

    <?php }
get_template_part('handle', 'slipcol'); ?>

<?php endwhile; 
?>
</div>
</div>
</section>

<?php get_footer() ?>