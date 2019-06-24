<?php

require_once(dirname(__FILE__) . '/sample/barebones-config.php');

require get_template_directory() . '/inc/wigets.php';

//Making jQuery Google API
function modify_jquery()
{
    if (!is_admin()) {
        // comment out the next two lines to load the local copy of jQuery
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js', false, null);
        wp_enqueue_script('jquery');
    }
}
add_action('init', 'modify_jquery');

if (!function_exists('setup_stylesheet_theme')) {
    function setup_stylesheet_theme()
    {
        wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), null);
        wp_enqueue_style('owl-css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', array(), null);
        wp_enqueue_style('owl-theme-css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css', array(), null);

        wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css?family=Barlow+Condensed|Raleway&display=swap', array(), null);

        wp_enqueue_style('hover', "https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css", array(), null);

        wp_enqueue_style('awesome', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css', array(), null);
        wp_enqueue_style('animates', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.1/animate.min.css', array(), null);

        wp_enqueue_style('app-css', get_template_directory_uri() . '/assets/css/app.css', array(), wp_get_theme()->get('Version'));


        wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'), null);
        wp_enqueue_script('owljs', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array(), null);
        wp_enqueue_script('awesome', 'https://use.fontawesome.com/releases/v5.3.1/js/all.js', array(), null);
        wp_enqueue_script('wow', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js', array(), null);


        wp_enqueue_script('mainjs', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), wp_get_theme()->get('Version'));
    }

    add_action('wp_enqueue_scripts', 'setup_stylesheet_theme');
}

if (!function_exists('super_reg_nav')) {
    function super_reg_nav()
    {
        register_nav_menu('nav_main_menu', 'Header Location Menu');
        register_nav_menu('footer_menu', __('Footer Location Men', 'supercube'));
        add_theme_support('title-tag');
        $default = array(
            'height'      => 100,
            'width'       => 100,
            'flex-height' => true,
            'flex-width'  => true,
            'header-text' => array('site-title', 'site-description'),
        );
        add_theme_support('custom-logo', $default);
    }

    add_action('after_setup_theme', 'super_reg_nav');
}

function register_acf_block_types()
{

    // register a testimonial block.
    acf_register_block_type(array(
        'name' => 'block_how_to',
        'title' => __('Block How To'),
        'description' => __('A block how to.'),
        'render_template' => 'template-blocks/block-howto.php',
        'category' => 'common',
        'icon' => 'dashicons dashicons-text-page',
        'keywords' => array('block how to', 'block'),
    ));
    acf_register_block_type(array(
        'name' => 'block_room_feature',
        'title' => __('Block Room Feature'),
        'description' => __('A block how to.'),
        'render_template' => 'template-blocks/block-roomfeature.php',
        'category' => 'common',
        'icon' => 'dashicons dashicons-text-page',
        'keywords' => array('block room feature', 'block'),
    ));
    acf_register_block_type(array(
        'name' => 'block_room_system',
        'title' => __('Block BESPOKE SYSTEM'),
        'description' => __('A block BESPOKE SYSTEM.'),
        'render_template' => 'template-blocks/block-image-box.php',
        'category' => 'common',
        'icon' => 'dashicons dashicons-text-page',
        'keywords' => array('block room feature', 'block'),
    ));
    acf_register_block_type(array(
        'name' => 'block_contact',
        'title' => __('Block Contact'),
        'description' => __('A block how to.'),
        'render_template' => 'template-blocks/block-contact.php',
        'category' => 'common',
        'icon' => 'dashicons dashicons-text-page',
        'keywords' => array('block room feature', 'block'),
    ));
    acf_register_block_type(array(
        'name' => 'block_goole_map',
        'title' => __('Block Google Map'),
        'description' => __('A block how to.'),
        'render_template' => 'template-blocks/block-address.php',
        'category' => 'common',
        'icon' => 'dashicons dashicons-text-page',
        'keywords' => array('block google map', 'block'),
    ));
    acf_register_block_type(array(
        'name' => 'block_room',
        'title' => __('Block Room'),
        'description' => __('A block room'),
        'render_template' => 'template-blocks/block-room.php',
        'category' => 'common',
        'icon' => 'dashicons dashicons-text-page',
        'keywords' => array('block room', 'block'),
    ));
    acf_register_block_type(array(
        'name' => 'block_deal',
        'title' => __('Block Terms & Conditions'),
        'description' => __('A block Terms & Conditions'),
        'render_template' => 'template-blocks/block-terms.php',
        'category' => 'common',
        'icon' => 'dashicons dashicons-text-page',
        'keywords' => array('block deal', 'block'),
    ));
    acf_register_block_type(array(
        'name' => 'block_info',
        'title' => __('Block Info Song'),
        'description' => __('A Block Info Song'),
        'render_template' => 'template-blocks/block-info.php',
        'category' => 'common',
        'icon' => 'dashicons dashicons-text-page',
        'keywords' => array('block info', 'block'),
    ));
    acf_register_block_type(array(
        'name' => 'block_price',
        'title' => __('Block Price'),
        'description' => __('A Block Price'),
        'render_template' => 'template-blocks/block-price.php',
        'category' => 'common',
        'icon' => 'dashicons dashicons-text-page',
        'keywords' => array('block Price', 'block'),
    ));
    acf_register_block_type(array(
        'name' => 'block_bgfun',
        'title' => __('Block background Fun'),
        'description' => __('A Block background Fun'),
        'render_template' => 'template-blocks/block-bgfun.php',
        'category' => 'common',
        'icon' => 'dashicons dashicons-text-page',
        'keywords' => array('block background Fun', 'block'),
    ));
    acf_register_block_type(array(
        'name' => 'block_wellcome',
        'title' => __('Block welcome'),
        'description' => __('A Block welcome'),
        'render_template' => 'template-blocks/block-wellcome.php',
        'category' => 'common',
        'icon' => 'dashicons dashicons-text-page',
        'keywords' => array('block welcome', 'block'),
    ));
}

// Check if function exists and hook into setup.
if (function_exists('acf_register_block_type')) {
    add_action('acf/init', 'register_acf_block_types');
}
function new_excerpt_more($excerpt)
{
    return $excerpt . ' [...]';
}
add_filter('get_the_excerpt', 'new_excerpt_more');



function misha_loadmore_ajax_handler(){
    $args =array(
        'post_type' => 'post',
        'post_status'   => 'publish',
        'posts_per_page' => '2',
        'cat'           => $_POST['query']['cat'],
        'paged'         => $_POST['page'],
    );

    $one_post = new Wp_Query($args);
	if( $one_post->have_posts() ) :

    while($one_post->have_posts() ): $one_post->the_post();?>

             <div class="main col-12 text-center category_page">
                <h2 class=" text-uppercase  m-t-15">
                    <a class="f-t-b"href="<?php the_permalink(); ?>" title="Read more"><?php the_title() ?></a>
                </h2>
                <span class="date_time"><?php the_time("l dS F Y"); ?></span>
                <article>
                    <p>
                        <?php 
                        if(has_excerpt()){ 
                            the_excerpt();
                        }else{
                            echo wp_trim_words(get_the_content(), 50, ' […]' );
                        }
                        ?>
                    </p>
                </article>
            </div> 
 
        <?php endwhile;
        wp_reset_postdata(); 
 
	endif;
	die; // here we exit the script and even no wp_reset_query() required!
}
 
add_action('wp_ajax_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}

function handle_bacground_header(){
    if (!empty(get_field('background-image'))) {
        $image = get_field('background-image');
        echo "background:url('" . $image . "') no-repeat center center fixed; background-size: cover;";
    } else {
        echo 'background: linear-gradient(#003651, #004a6f, #00689c);';
    }
}