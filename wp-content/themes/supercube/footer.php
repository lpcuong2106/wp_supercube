<?php GLOBAL $opt_theme; ?>
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 float-left mt-5 logo-footer-hide">
                <?php if ($opt_theme['footer_logo']['url']) { ?>
                    <a href="<?php site_url() ?>">
                        <img class="img" width="80px" src="<?php echo $opt_theme['footer_logo']['url'] ?>"
                             alt="<?php bloginfo('name') ?>">
                    </a>
                <?php } ?>
            </div>
            <div class="widget_footer col-md-12">
                <div class="row">
                    <div class="col-md-3 float-left text-white">
                        <?php if (is_active_sidebar('footer_one_widget')) : ?>
                            <?php dynamic_sidebar('footer_one_widget'); ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-3 float-left text-white">
                        <?php if (is_active_sidebar('footer_two_widget')) : ?>
                            <?php dynamic_sidebar('footer_one_widget'); ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-3 float-left text-white">
                        <?php if (is_active_sidebar('footer_three_widget')) : ?>
                            <?php dynamic_sidebar('footer_one_widget'); ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-2 float-left">
                        <?php if ($opt_theme['switch_icon_social'] == 1) { ?>
                            <h4 class="f-w-600 f-s-16 text-white">Follow us</h4>
                            <ul id="social-link_footer">
                                <?php if ($opt_theme['facebook_social']) { ?>
                                    <li>
                                        <a target="_blank" href="<?= $opt_theme['facebook_social'] ?>">Fackbook</a>
                                    </li>
                                <?php } ?>
                                <?php if ($opt_theme['twitter_social']) { ?>
                                    <li>
                                        <a  target="_blank" href="<?= $opt_theme['twitter_social'] ?>">Twitter</a>
                                    </li>
                                <?php } ?>
                                <?php if ($opt_theme['instagram_social']) { ?>
                                    <li>
                                        <a  target="_blank" href="<?= $opt_theme['instagram_social'] ?>">Instagram</a>
                                    </li>
                                <?php } ?>
                            </ul>`
                        <?php } ?>
                    </div>
                    <div class="col-md-1 float-left logo_footer_hide">
                        <?php if ($opt_theme['footer_logo']['url']) { ?>
                            <a href="<?= site_url() ?>">
                                <img src="<?php echo $opt_theme['footer_logo']['url'] ?>" id="logo_footer"
                                     alt="<?php bloginfo('name') ?>">
                            </a>
                        <?php } ?>
                    </div>
                </div>

            </div>

            <div class="col-md-12" style="padding-right: 0px;padding-left: 0px;">
                <hr class="hr_footer">
            </div>
            <div class="col-md-12" style="padding-right: 0px; padding-left:0px;">
                <div class="col-lg-6" style="float:left; padding-right: 0px; padding-left:0px;">
                    <p class="copyright_text">
                        <?php
                        if ($opt_theme['turn_copyright_sympol'] == 1) {
                            echo '© ';
                        }
                        if ($opt_theme['text_copyright']) {
                            echo $opt_theme['text_copyright'];
                        }
                        ?>
                    </p>
                </div>
                <div class="col-lg-6" style="float:left; padding-right: 0px; padding-left:0px;">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'footer_menu',
                        'menu_id' => 'main_footer',
                        'container' => false,
                    )) ?>
                </div>
                <div class="col-lg-6 float-left footer-show"> <span><p class="f-w-600 text-center f-s-12 text-white ">
                   <?php
                   if ($opt_theme['turn_copyright_sympol'] == 1) {
                       echo '© ';
                   }
                   if ($opt_theme['text_copyright']) {
                       echo $opt_theme['text_copyright'];
                   }
                   ?>
                </p> </span></div>
            </div>
        </div>

    </div>
</footer>
</div>
<?php wp_footer() ?>
</body>
</html>