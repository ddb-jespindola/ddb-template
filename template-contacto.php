<?php
/*
*
Template Name: Contacto
*/

get_header();

get_template_part( 'template-parts/section', 'hero' );
?>


<section class="section-without-background mt-5">
    <div class="container">

        <h2 class="text-center mb-5 page-section-title">Preguntas, Reclamos o Sugerencias</h2>
        <p class="text-center mb-5">Responderemos sus requerimientos a la brevedad</p>
        <div class="row">
            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.4809669830456!2d-74.12385568523767!3d4.686158296596175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9b451d6a85f3%3A0x7213b2e152566ddf!2sParque%20Empresarial%20Puerta%20del%20Sol!5e0!3m2!1ses-419!2sco!4v1590555054990!5m2!1ses-419!2sco" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="col-md-6">
                <?php echo do_shortcode('[contact-form-7 id="168" title="Contact form 1"]'); ?>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
