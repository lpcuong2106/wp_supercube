<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
<?php global $opt_theme; ?>
<div class="lds-ring"><div></div><div></div><div></div><div></div></div>
<div class="scrollToTop circle hiddenScroll fadeToTop"><i class="fa fa-angle-up"></i></div>
<div id="wrapper">
    <header>
        <div class="container-fluid">
            <div class="row" id="header_language">
                <ul>
                    <li>
                        
                        <a href="<?php the_permalink($opt_theme['page_lg_united']) ?>" <?php if(!is_page(get_the_title($opt_theme['page_lg_chinese'])) && !is_page(get_the_title($opt_theme['page_lg_spa'])) &&!is_page(get_the_title($opt_theme['page_lg_kor'])) && !is_page(get_the_title($opt_theme['page_lg_jap']))){ echo 'class="active"'; }?>><img width='20' height='20' src="<?= get_theme_file_uri() ?>/images/united_1.png" alt=""></a>
                    </li>
                    <li>
                        <a href="<?php the_permalink($opt_theme['page_lg_spa']) ?>" <?php if(is_page(get_the_title($opt_theme['page_lg_spa']))){ echo 'class="active"'; }?>><img width='20' height='20' src="<?= get_theme_file_uri() ?>/images/spain_1.png" alt=""></a>
                    </li>
                    <li>
                        <a href="<?php the_permalink($opt_theme['page_lg_kor']) ?>" <?php if(is_page(get_the_title($opt_theme['page_lg_kor']))){ echo 'class="active"'; }?>><img  width='20' height='20' src="<?= get_theme_file_uri() ?>/images/korea_1.png" alt=""></a>
                    </li>
                    <li>
                        <a href="<?php the_permalink($opt_theme['page_lg_jap']) ?>" <?php if(is_page(get_the_title($opt_theme['page_lg_jap']))){ echo 'class="active"'; }?>><img   width='20' height='20'  src="<?= get_theme_file_uri() ?>/images/japan_1.png" alt=""></a>
                    </li>
                    <li>
                        <a href="<?php the_permalink($opt_theme['page_lg_chinese']) ?>" <?php if(is_page(get_the_title($opt_theme['page_lg_chinese']))){ echo 'class="active"'; }?>><img  width='20' height='20'  src="<?= get_theme_file_uri() ?>/images/china_1.png" alt=""></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="sticky-wrapper">
            <div class="container" id="nav_header_menu">
                <div class="row">
                    <div class="col-md-1 hidden-md" style="padding-left: 0px; ">
                    <?php 
                        $custom_id_logo = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_id_logo, 'full');
                        if(has_custom_logo()){ ?>
                            <a href="<?php echo site_url(); ?>"><img id="img_logo"
                            src="<?= esc_url($logo[0]) ?>"
                            alt="<?php bloginfo('name')?>"></a>
                    <?php
                        }else{
                            echo '<h5 class="hidden-md" style="color: white">'.get_bloginfo( 'name' ).'</h5>';
                        }
                    ?>          
                    </div>
                    <div class="col-md-11 col-12" style="padding-right: 0px;">
                        <nav class="navbar sticky-top navbar-expand-lg navbar-light">
                            <div class="navbar-brand clearfix hidden-lg-up">
                            <?php 
                                if(has_custom_logo()){ ?>
                                    <a href="<?php echo site_url() ?>"><img id="img_logo"
                                        src="<?= esc_url($logo[0]); ?>"
                                        alt="<?php bloginfo('name')?>">
                                    </a>
                            <?php
                                }else{
                                    echo '<h5 style="color: white">'.get_bloginfo( 'name' ).'</h5>';
                                }
                            ?>    
                            </div>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <?php wp_nav_menu(array(
                                'theme_location' => 'nav_main_menu',
                                'menu_class' => 'navbar-nav',
                                'menu_id' => 'main_menu',
                                'container' => 'div',
                                'container_class' => 'collapse navbar-collapse',
                                'container_id' => 'navbarNav',

                            )) ?>

                            <ul id="social-link" class="hidden-lg">
                                <?php if ($opt_theme['facebook_social']) { ?>
                                    <li>
                                        <a target="_blank" href="<?= $opt_theme['facebook_social'] ?>"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                <?php } ?>
                                <?php if ($opt_theme['twitter_social']) { ?>
                                    <li>
                                        <a target="_blank" href="<?= $opt_theme['twitter_social'] ?>"><i class="fab fa-twitter"></i></a>
                                    </li>
                                <?php } ?>
                                <?php if ($opt_theme['instagram_social']) { ?>
                                    <li>
                                        <a target="_blank" href="<?= $opt_theme['instagram_social'] ?>"><i class="fab fa-instagram"></i></a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </header>
    