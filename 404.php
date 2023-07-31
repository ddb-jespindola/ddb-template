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

<section class="mt-3 mb-5">
    <div class="container">
        <div class="row">
			<div class="col-md-12">
				<div class="page-content text-center missing-page-background">
					<div class="missing-page-title">
						<h2 class="text-center page-section-title">Error 404</h2>
						<p>Página inexistente</p>
					</div>					
				</div><!-- .page-content -->
				<div class="text-center">
						<a href="<?php echo home_url(); ?>" class="missing-page-button">
						Volver al Inicio
						</a>
				</div>
			</div>
            
        </div>
    </div>
</section>



<?php
get_footer();
