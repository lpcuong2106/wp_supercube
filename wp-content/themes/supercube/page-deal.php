<?php
/*  Template Name: Page Deal
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
    <section class="how-to-tempalte">
        <div class="container-fluid">
            <div class="row">
                <?php the_content(); ?>
            </div>
        </div>
    </section>
    <?php get_template_part('handle', 'slipcol');
endwhile; ?>
</div>
</div>
</section>



<?php get_footer() ?>