<?php
/*  
    The template for displaying 404 pages (Not Found)
*/
?>
<?php get_header(); ?>

    <div class="banner banner-page" style="background: linear-gradient(#003651, #004a6f, #00689c); ">
        <div class="container" id="banner_top">
            <div class="row">
                <h1 class="title_room">PAGE NOT FOUND</h1>
            </div>
        </div>
    </div>
    <section class="block_how_to container page_default" >
        <div class="row">
            <div class="main col-12 text-center">
                <h2 class="title_404">404</h2>
                <h4 class="mt-4 mb-4 f-z-28">Ooops! Page Not Found</h4>
                <p class="lead">The requested URL was not found on this server. Make sure that the Web site address displayed in the address bar of your browser is spelled and formatted correctly.</p>
                <a href="<?= site_url() ?>" class="btn btn-blue btn-animated btn-back-home btn-lg">Return Home<i class="fas fa-home"></i></a>
            </div>
        </div>
       
    </section>
    
        </div>
    </div>
</section>

<?php get_footer() ?>