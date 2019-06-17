<?php


class footer_widget extends WP_Widget {

    /**
     * Thiết lập widget: đặt tên, base ID
     */
    function __construct() {
        parent::__construct (
            'footer_widget', // id của widget
            'Footer Widget', // tên của widget

            array(
                'description' => 'Show on footer' // mô tả
            )
        );
    }

    /**
     * Tạo form option cho widget
     */
    function form( $instance ) {

    }

    /**
     * save widget form
     */

    function update( $new_instance, $old_instance ) {

    }

    /**
     * Show widget
     */

    function widget( $args, $instance ) {

        extract( $args );
        $widget_id= $args['widget_id'];
        $header = apply_filters( 'widget_title', get_field('header', 'widget_'.$widget_id ) );

        echo $before_widget;

        //In tiêu đề widget
        echo $before_title.$header.$after_title;

        // Nội dung trong widget

        the_field('content','widget_'.$widget_id );

        // Kết thúc nội dung trong widget

        echo $after_widget;
    }

}

function register_widget_theme() {
    register_sidebar( array(
        'name' => __( 'Footer One', 'supercube' ),
        'id' => 'footer_one_widget',
        'description' => __( 'Widgets in this area will be shown on footer one.', 'supercube' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s"  style="list-style-type: none">',
        'after_widget'  => '</li>',
        'before_title'  => '<h4 class="widget_title">',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name' => __( 'Footer Two', 'supercube' ),
        'id' => 'footer_two_widget',
        'description' => __( 'Widgets in this area will be shown on footer one.', 'supercube' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s" style="list-style-type: none">',
        'after_widget'  => '</li>',
        'before_title'  => '<h4 class="widget_title">',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name' => __( 'Footer Three', 'supercube' ),
        'id' => 'footer_three_widget',
        'description' => __( 'Widgets in this area will be shown on footer one.', 'supercube' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s"  style="list-style-type: none">',
        'after_widget'  => '</li>',
        'before_title'  => '<h4 class="widget_title">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'register_widget_theme' );

function create_widget_supercube(){
    register_widget('footer_widget');
}
add_action('widgets_init', 'create_widget_supercube');