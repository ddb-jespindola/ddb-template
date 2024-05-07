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
            SI quieres hacer parte de nuestro equipo de trabajo, registra tu hoja de vida y estaremos en contacto según la disponibilidad de nuestras vacantes
            </div>
            <div class="alert alert-warning" role="alert">
            ADVERTENCIA! ESTAFA POR FALSA CONVOCATORIA A PROCESOS DE SELECCIÓN.
            DEPOSITO DE DROGAS BOYACÁ informa que personas inescrupulosas estan utilizando nuestro nombre para realizar falsos procesos y cobros ilegales.
            Hacemos un llamado a la ciudadanía para que no caiga en este tipo de estafas pues, nosotros no realizamos nungún tipo de cobro por estos procesos, examenes médicos y no tenemos intermediarios.
            Si onoce algun intento de estafa por favor comunicarlo en nuestro formulario de contacto.
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6 ">
                
                <div>
                   <img src="/wp-content/uploads/2020/08/trabaja-con-nosotros_1.jpg" alt="" class="w-100">
                </div>
            </div>
            <div class="col-md-6">
                <?php echo do_shortcode('[contact-form-7 id="274" title="Trabaja con nosotros"]'); ?>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
