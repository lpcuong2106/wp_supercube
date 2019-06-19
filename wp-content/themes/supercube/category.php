<?php get_header(); ?>

<div class="banner banner-page" style="<?php handle_bacground_header() ?>">
    <div class="container" id="banner_top">
        <div class="row">
            <h1 class="title_room"><?php single_cat_title("", true); ?></h1>
        </div>
    </div>
</div>
<?php
$categories = get_the_category();
$currentPage = get_query_var('paged', 1);
$args = array(
    'post_type' => 'post',
    'post_status'   => 'publish',
    'posts_per_page' => '2',
    'paged'         => $currentPage,
    'cat'   =>  $categories[0]->cat_ID,
);
$my_posts = new Wp_Query($args);
if ($my_posts->have_posts()) {
    ?>

    <section class="block_how_to container page_default">
        <div class="row">
            <?php while ($my_posts->have_posts()) : $my_posts->the_post(); ?>
                <div class="main col-12 text-center category_page">
                    <h2 class=" text-uppercase  m-t-15">
                        <a class="f-t-b" href="<?php the_permalink() ?>" title="Read more"><?php the_title() ?></a>
                    </h2>
                    <span class="date_time"><?php the_time("l dS F Y"); ?></span>
                    <article>
                        <p>
                            <?php
                            if (has_excerpt()) {
                                the_excerpt();
                            } else {
                                echo wp_trim_words(get_the_content(), 50, ' […]');
                            }
                            ?>
                        </p>
                    </article>
                </div>

            <?php endwhile;  ?>
            <?php if ($my_posts->max_num_pages > 1)
                echo ' <div class="col-12 main text-center"><a id="loadmore" class="hvr-shutter-out-horizontal f-t-b btn btn-md btn_load_more">LOAD MORE </a></div>';
            ?>
        </div>
    </section>
    </div>

<?php }
wp_reset_postdata(); ?>
</div>
</section>
<script>
    var current_page = <?php if (get_query_var('paged')) {
                            echo get_query_var('paged');
                        } else {
                            echo 1;
                        } ?>;
    $('#loadmore').click(function() {
        var ajaxurl = "<?= admin_url('admin-ajax.php') ?>";
        var max_page = <?= $my_posts->max_num_pages ?>;
        var button = $(this),
            data = {
                'action': 'loadmore',
                'query': <?= json_encode($my_posts->query) ?>, // that's how we get params from wp_localize_script() function
                'page': current_page + 1,
            };
        $.ajax({ // you can also use $.post here
            url: ajaxurl, // AJAX handler
            data: data,
            type: 'POST',
            beforeSend: function(xhr) {
                button.text('Loading...'); // change the button text, you can also add a preloader image
            },
            success: function(data) {
                if (data) {
                    button.text('More posts').parent().before(data); // insert new posts
                    current_page++;

                    if (current_page == max_page) {
                        button.remove(); // if last page, remove the button
                    }

                } else {
                    button.remove(); // if no data, remove the button as well
                }
            }
        });
    });
</script>
<?php get_footer() ?>