<?php
/*
*
Template Name: Home
*/
get_header();

?>

<!-- <div class="container">
    <h1>
        <?php //the_title(); ?>
    </h1>
    <?php //get_template_part('includes/section', 'content') ?>
</div> -->

<section class="container-fluid main slider-main">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="/nuestra-empresa/">
                <picture>
                    <source srcset="/wp-content/uploads/2020/08/banner_nosotros_large_4.jpg" media="(min-width: 1000px)" class="w-100" loading="lazy">
                    <source srcset="/wp-content/uploads/2020/08/banner_nosotros_mobile_1.jpg" media="(min-width: 800px)" class="w-100" loading="lazy">
                    <img srcset="/wp-content/uploads/2020/08/banner_nosotros_mobile_1.jpg" src="/wp-content/uploads/2020/08/banner_nosotros_mobile_1.jpg" alt="…" class="w-100" loading="lazy">
                </picture>
                </a>
            </div>
            <div class="carousel-item">
                <a href="/etiqueta-producto/medical-kit-ltda/">
                <picture>
                    <source srcset="/wp-content/uploads/2020/11/limpieza_banner-2.jpg" media="(min-width: 1000px)" class="w-100" loading="lazy">
                    <source srcset="/wp-content/uploads/2020/11/banner_limpieza_mobile.jpg" media="(min-width: 800px)" class="w-100" loading="lazy">
                    <img srcset="/wp-content/uploads/2020/11/banner_limpieza_mobile.jpg" src="/wp-content/uploads/2020/11/banner_limpieza_mobile.jpg" alt="…" class="w-100" loading="lazy">
                </picture>
                </a>
            </div>
            <div class="carousel-item ">
                <a href="/catalogo-de-productos/">
                <picture>
                    <source srcset="/wp-content/uploads/2020/08/banner_covid_large_1.jpg" media="(min-width: 1000px)" class="w-100" loading="lazy">
                    <source srcset="/wp-content/uploads/2020/08/banner_covid_mobile_2.jpg" media="(min-width: 800px)" class="w-100" loading="lazy">
                    <img srcset="/wp-content/uploads/2020/08/banner_covid_mobile_2.jpg" src="/wp-content/uploads/2020/08/banner_covid_mobile_2.jpg" alt="…" class="w-100" loading="lazy">
                </picture>
                </a>
            </div>
            <!-- <div class="carousel-item">
                <a href="/catalogo-de-productos/">
                <picture>
                    <source srcset="/wp-content/uploads/2020/08/banner_catalogo_medium_2.jpg" media="(min-width: 1000px)" class="w-100" loading="lazy">
                    <source srcset="/wp-content/uploads/2020/08/banner_catalogo_mobile_1-1.jpg" media="(min-width: 800px)" class="w-100" loading="lazy">
                    <img srcset="/wp-content/uploads/2020/08/banner_catalogo_mobile_1-1.jpg" src="/wp-content/uploads/2020/08/banner_catalogo_mobile_1-1.jpg" alt="…" class="w-100" loading="lazy">
                </picture>
                </a>
            </div> -->
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

<section class="section-comercializacion-distribucion">
    <div class="container">
        <div class="row d-flex justify-content-center text-center">
            <div data-aos="fade-down" class="col-md-12 text-center" >
                <h3>Comercialización y distribución de medicamentos</h3>
            </div>
            <p data-aos="fade-down" class="mt-3">
            Nos especializamos en la comercialización y distribución de productos farmacéuticos éticos y genéricos, medicamentos de marca, dispositivos médicos y kits institucionales a entidades estatales y privadas
            </p>
        </div>
        <div class="row">
            <div data-aos="fade-left" class="col-md-3 text-center border-right border-light service">
                <i class="far fa-clock"></i>
                <div class="mt-3"></div>
                <h6>SERVICIO 7 DÍAS</h6>
                <span class="icon-text">Entrega de medicamentos en las instituciones y redes de distribución especializada</span>   
            </div>
            <div data-aos="fade-up" class="col-md-3 text-center border-right border-light service">
                <i class="fas fa-chalkboard-teacher"></i>
                <div class="mt-3"></div>
                <h6>ASESORÍA EN CALIDAD</h6>
                <span class="icon-text">Modelos conceptuales donde se identifique las fallas de la atención en salud y probabilidades de riesgo</span>   
            </div>
            <div data-aos="fade-up" class="col-md-3 text-center border-right border-light service">
                <i class="fas fa-plane"></i>
                <div class="mt-3"></div>
                <h6>IMPORTACIÓN Y EXPORTACIÓN</h6>
                <span class="icon-text">Importación de Vitales no disponibles y exportación de productos farmacéuticos</span>   
            </div>
            <div data-aos="fade-right" class="col-md-3 text-center service">
                <i class="fas fa-check"></i>
                <div class="mt-3"></div>
                <h6>CERTIFICADO NTC 6001:2017</h6>
                <span class="icon-text">Acreditados por BVQI Colombia desde el 2014 como garantía de la calidad en todos nuestros procesos</span>   
            </div>
        </div>
    </div>
</section>

<!-- SECTION COUNTER -->
<section class="numbers dark-blue-bg white-txt">
    <div class="container">

    
        <div class="row marged flex">
        <!-- item 01 -->
            <div class="col-md-3 col-6 number-item">
                <h4>+ <span class="value">3000</span></h4>
                <h4>PRODUCTOS</h4>
            </div>

        <!-- item 02 -->
            <div class="col-md-3 col-6 number-item">
                <h4>+ <span class="value">400</span></h4>
                <h4>CLIENTES</h4>
            </div>

        <!-- item 03 -->
            <div class="col-md-3 col-6 number-item">
                <h4>+ <span class="value">80</span></h4>
                <h4>MUNICIPIOS</h4>
            </div>

        <!-- item 04 -->
            <div class="col-md-3 col-6 number-item">
                <h4>+ <span class="value">200</span></h4>
                <h4>PROVEEDORES</h4>
            </div>
        </div>
        </div>
    </section>
<!-- END OF SECTION NUMBERS -->


<!-- SECTION CATALOGO -->

<section class="section-catalogo">
    <div class="container">
        <div class="row">
            <div data-aos="fade-down" class="col-md-12 text-center">
                <h3 class="grayDdb-text" >Conoce nuestro catálogo de productos</h3>
            </div>
        </div>
    <div class="row mt-5">
        <div data-aos="fade-left" class="col-md-4">
            <a href="/categoria-producto/medicamento/">
                <div class="distribution-elements-img">
                    <!-- <img src="/wp-content/uploads/2020/08/medicamentos_2.jpg" alt="" class="w-100"  loading="lazy"> -->
                    <picture>
                        <source srcset="/wp-content/uploads/2020/11/medicamentos-desktop.jpg" media="(min-width: 1000px)" class="w-100" loading="lazy">
                        <img srcset="/wp-content/uploads/2020/11/medicamentos-mobile.jpg" alt="…" class="w-100" loading="lazy">
                    </picture>

                    <div class="distribution-elements-text d-flex justify-content-center align-items-center">
                        <h5>Productos farmacéuticos hospitalarios, ambulatorios, control especial y alto costo</h5>
                    </div>
                </div>
            </a>    
        </div>
        <div data-aos="zoom-in" class="col-md-4">
            <a href="/categoria-producto/alimentos-nutricional/">
                <div class="distribution-elements-img">
                    <!-- <img src="/wp-content/uploads/2020/08/alimentos-nutriciones_1.jpg" alt="" class="w-100"  loading="lazy"> -->
                    <picture>
                        <source srcset="/wp-content/uploads/2020/11/alimentos-desktop.jpg" media="(min-width: 1000px)" class="w-100" loading="lazy">
                        <img srcset="/wp-content/uploads/2020/11/alimentos-mobile.jpg" alt="…" class="w-100" loading="lazy">
                    </picture>
                    <div class="distribution-elements-text d-flex justify-content-center align-items-center">
                        <h5>Alimentos y nutriciones</h5>
                    </div>
                </div>
            </a>    
        </div>
        <div data-aos="fade-right" class="col-md-4">
            <a href="/categoria-producto/medico-quirurgicos/">
                <div class="distribution-elements-img">
                    <!-- <img src="/wp-content/uploads/2020/08/dispositivos-medicos_2.jpg" alt="" class="w-100"  loading="lazy"> -->
                    <picture>
                        <source srcset="/wp-content/uploads/2020/11/dispositivos-desktop.jpg" media="(min-width: 1000px)" class="w-100" loading="lazy">
                        <img srcset="/wp-content/uploads/2020/11/dispositivos-mobile.jpg" alt="…" class="w-100" loading="lazy">
                    </picture>
                    <div class="distribution-elements-text d-flex justify-content-center align-items-center">
                        <h5>Dispositivos médicos</h5>
                    </div>
                </div>
            </a>    
        </div>
        </div>
        <div class="row mt-3">
        <div data-aos="fade-left" class="col-md-4">
                <a href="/categoria-producto/sustitutos-oseos-biomateriales/">
                    <div class="distribution-elements-img">
                        <!-- <img src="/wp-content/uploads/2020/08/sustitutos-oseos_3.jpg" alt="" class="w-100"  loading="lazy"> -->
                        <picture>
                            <source srcset="/wp-content/uploads/2020/11/osteosintesis-desktop.jpg" media="(min-width: 1000px)" class="w-100" loading="lazy">
                            <img srcset="/wp-content/uploads/2020/11/osteosintesis-mobile.jpg" alt="…" class="w-100" loading="lazy">
                        </picture>
                        <div class="distribution-elements-text d-flex justify-content-center align-items-center">
                            <h5>Osteosíntesis y Sustitutos Óseos</h5>
                        </div>
                    </div>
                </a>    
            </div>
            <div data-aos="zoom-in" class="col-md-4">
                <a href="/categoria-producto/reactivo-diagnostico/">
                    <div class="distribution-elements-img">
                        <!-- <img src="/wp-content/uploads/2020/08/productos-biologicos_1.jpg" alt="" class="w-100"  loading="lazy"> -->
                        <picture>
                            <source srcset="/wp-content/uploads/2020/11/laboratorio-desktop.jpg" media="(min-width: 1000px)" class="w-100" loading="lazy">
                            <img srcset="/wp-content/uploads/2020/11/laboratorio-mobile.jpg" alt="…" class="w-100" loading="lazy">
                        </picture>
                        <div class="distribution-elements-text d-flex justify-content-center align-items-center">
                            <h5>Productos biológicos</h5>
                        </div>
                    </div>
                </a>    
            </div>
            <div data-aos="fade-right" class="col-md-4">
                <a href="/categoria-producto/kits-de-atencion-social-institucional/">
                    <div class="distribution-elements-img">
                        <!-- <img src="/wp-content/uploads/2020/08/kits_1.jpg" alt="" class="w-100"  loading="lazy"> -->
                        <picture>
                            <source srcset="/wp-content/uploads/2020/11/kits-desktop.jpg" media="(min-width: 1000px)" class="w-100" loading="lazy">
                            <img srcset="/wp-content/uploads/2020/11/kits-mobile.jpg" alt="…" class="w-100" loading="lazy">
                        </picture>
                        <div class="distribution-elements-text d-flex justify-content-center align-items-center">
                            <h5>Kits de Atención Social Institucional</h5>
                        </div>
                    </div>
                </a>    
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container mb-5 pt-5 border-top border-secondary">
        <div class="row d-flex justify-content-between align-items-center">
            <div class="col-2 text-center gray-hover-effect">

                <img src="/wp-content/uploads/2020/08/Logo-farmalogica_1.jpg" alt="" class="img-fluid"  loading="lazy">
            </div>
            <div class="col-2 text-center gray-hover-effect">
                <img src="/wp-content/uploads/2020/08/Logo-stendhal.jpg" alt="" class="img-fluid"  loading="lazy">
            </div>
            <div class="col-2 text-center gray-hover-effect">
                <img src="/wp-content/uploads/2020/08/Logo-gotha-plast.jpg" alt="" class="img-fluid"  loading="lazy">
            </div>
            <div class="col-2 text-center gray-hover-effect">
                <img src="/wp-content/uploads/2020/08/Logo-surgiplast.jpg" alt="" class="img-fluid"  loading="lazy">
            </div>
            <div class="col-2 text-center gray-hover-effect">
                <img src="/wp-content/uploads/2020/08/Logo-icumedical.jpg" alt="" class="img-fluid"  loading="lazy">
            </div>
            <div class="col-2 text-center gray-hover-effect">
                <img src="/wp-content/uploads/2020/08/Logo-blaskov.jpg" alt="" class="img-fluid"  loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- <section class="section-testimonial section-with-background">
    <div class="row ">
        <div data-aos="fade-down" class="col-md-12 text-center">
            <h3>Clientes satisfechos</h3>
        </div>
    </div>
    <div data-aos="fade-up" class="row mt-5">
        <div class="col-md-4 text-center">
            <p><i>"Cumplimiento con los tiempos de entrega y amabilidad en el servicio"</i></p>
            <p><strong>Camilo Perez</strong> </p>
            <p>Hospital San Rafael de Fusa</p>
        </div>
        <div class="col-md-4 text-center">
            <p><i>"Lograron atendernos cuando más lo necesitabamos y con toda disposición"</i></p>
            <p><strong>David Lara</strong> </p>
            <p>Fudación Cardio Infantil</p>
        </div>
        <div class="col-md-4 text-center">
            <p><i>"Son una empresa que comple con precios competitivos y valores agregados"</i></p>
            <p><strong>Mary Wells</strong> </p>
            <p>Hospital San Rafael de Fusa</p>
        </div>
    </div> 
</section> -->



<section class="section-trabaja-con-nosotros pt-5 pb-5 pl-5 pr-5">
    <div class="container">
        <div class="row text-center">
            <div data-aos="fade-right" class="col-md-6">
                <div class="row text-center justify-content-center">
                    <div class="col-md-12">
                        <h3>Únete a nuestro equipo</h3>
                    </div>
                    <p class="text-center">Postula tu hoja de vida y trabaja con nosotros</p>
                </div>
                
            </div>
            
            <div data-aos="fade-down" class="col-md-6 text-center">
                <a href="/trabaja-con-nosotros/">
                    <span class="red-button">Aplicar</span>
                </a>  
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
