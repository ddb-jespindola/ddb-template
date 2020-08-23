<?php
/*
*
Template Name: Contacto
*/

get_header();

get_template_part( 'template-parts/section', 'hero' );
?>


<section class="section-without-background mt-5 mb-5">
    <div class="container">

        <h2 class="text-center mb-5 page-section-title">Preguntas, Reclamos o Sugerencias</h2>
        <p class="text-center mb-5">Responderemos tus requerimientos a la brevedad</p>
        <div class="row">
            <div class="col-md-7">
                <h2>Formulario de contacto</h3>
                <?php echo do_shortcode('[contact-form-7 id="273" title="Formulario de contacto 1"]'); ?>
            </div>
            
            <div class="col-md-5 contact-info ">
                <h2>Datos de contacto</h3>
                <ul class="mt-4">
                    <li><i class="fas fa-map-marker-alt"></i><a href="https://www.google.com/maps/place/Dep%C3%B3sito+de+Drogas+Boyac%C3%A1/@4.6860751,-74.1213518,15z/data=!4m2!3m1!1s0x0:0x11fb3f84b9c80ffb?sa=X&ved=2ahUKEwilhevoqa_rAhUCjlkKHS7VAxgQ_BIwCnoECBUQCA" target="_blank">
                            Transversal 93 # 51-98 
                            Parque Empresarial Puerta del Sol Bodega 18  . Bogotá-Colombia</a>
                    </li>
                    <li><i class="far fa-clock"></i>Lun-Vie 7am-4pm | Sab 8am-1pm</li>
                    <li><i class="fas fa-phone"></i><a href="tel:(+571)7432597">(1) 743 25 97</a></li>
                    <li><i class="fas fa-phone"></i><a href="tel:(+57)3007484272">(+57) 300 748 42 72</a></li>
                    
                    <li><i class="far fa-envelope"></i><a href="mailto:info@ddb.com.co">info@ddb.com.co</a></li>
                </ul>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15905.925761157088!2d-74.1213518!3d4.6860751!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x11fb3f84b9c80ffb!2sDep%C3%B3sito%20de%20Drogas%20Boyac%C3%A1!5e0!3m2!1ses!2sco!4v1596217507733!5m2!1ses!2sco" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>

    </div>
</section>

<?php
get_footer();
