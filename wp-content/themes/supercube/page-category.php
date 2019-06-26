<?php
/*  Template Name: Page Category
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
    <section class="block_how_to page_category">
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

    <?php get_template_part('handle', 'slipcol');
endwhile; // End of the loop.
?>
</div>
</div>
</section>

<?php get_footer() ?>