<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); 
get_template_part( 'template-parts/section', 'hero' );
?>

<section class="mt-5 mb-5">
    <div class="container">
			<h2 class="text-center mb-5 page-section-title">Error 404</h2>
        <div class="row">
			<div class="col-md-12">

				<div class="page-content text-center">
					<p>La página a la que intentas ingresar no existe</p>
					
					<div class="w-50 m-auto">
						<a href="<?php echo home_url(); ?>">
							<img src="/wp-content/uploads/2020/07/deposito-de-drogas-boyaca-logo.png" alt="" class="w-50">
						</a>
					</div>
					
				</div><!-- .page-content -->

			</div>
            
        </div>
    </div>
</section>



<?php
get_footer();
