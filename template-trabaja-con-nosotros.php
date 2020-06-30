<?php
/*
*
Template Name: Trabaja con nosotros
*/

get_header();
get_template_part( 'template-parts/section', 'hero' );
?>


<section class="mb-5 mt-5">
    <div class="container">
        <div class="row border mt-3 mb-3">
            <div class="col-md-12 text-center pt-5 pb-5">
            Si quieres hacer parte de nuestro equipo de trabajo, registra tu hoja de vida y estaremos en contacto según la disponibilidad de nuestras vacantes
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6 ">
                
                <div>
                   <img src="http://localhost/ddb/wp-content/uploads/2020/06/trabaja-con-nosotros-1.jpg" alt="" class="w-100">
                </div>
            </div>
            <div class="col-md-6">
                <?php echo do_shortcode('[contact-form-7 id="168" title="Contact form 1"]'); ?>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
