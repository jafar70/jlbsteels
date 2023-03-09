<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Jafar_Theme
 */

get_header();
?>

<section class="ds s-py-55 s-pb-md-60 s-pt-lg-95 s-pb-lg-100 s-pt-xl-145 s-pb-xl-150 not-found page_404">
<div class="container">
<div class="row">
<div class="col-sm-12 text-center">
<div class="page-content">
<p class="error-404">error</p>
<p class="color-main name-404">404</p>
<div class="content-404">
<p class="fs-20 fw-500">Sorry, the page you were looking for doesn’t exist!</p>
<p>Dont worry, just have coffee and come back.</p>
</div>
<img class="mb-1" src="<?php bloginfo( 'template_url' ); ?>/images/404-img.png" alt="">
<p class="buttons_404 mt-30">
<a href="<?php echo esc_url( home_url() ); ?>" class="btn btn-big btn-wide btn-maincolor">Go Home</a>
</p>
</div>
<!-- .page-content -->
</div>
</div>
</div>
</section>


<?php
get_footer();
