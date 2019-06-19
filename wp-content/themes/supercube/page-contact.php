<?php
/*  Template Name: Page Contact 
    Template Post Type: page
*/
?>
<?php get_header() ?>

<?php
while (have_posts()) : the_post(); ?>

    <div class="banner banner-page-super" style="<?php handle_bacground_header() ?>">
        <div class="container" id="banner_top">
            <div class="row">
                <h1 class="title"><?php the_title() ?></h1>
            </div>
        </div>
    </div>
    <section>
        <div class="container-fluid">
            <div class="row">
                <?php the_content(); ?>
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