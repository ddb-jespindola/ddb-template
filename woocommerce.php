<?php get_header();
get_template_part( 'template-parts/section', 'hero' );
?>




<div class="container">
    <div class="row">
        <?php woocommerce_breadcrumb(); ?>
    </div>
</div>

<section class="pb-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>¿Deseas cotizar alguno de nuestros productos?</h2>
                <h3>Contáctanos</h3>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Atención y ventas en Bogotá</h5>
                        <ul class="list-unstyled">
                            <!-- <li class=" pb-3"><i class="fas fa-phone"></i><a class="text-decoration-none text-black"
                                    href="tel:+573125237420">(+57)3125237420</a></li> -->
                            <li class=" pb-3"><span>Whatsapp: </span> <a class="text-decoration-none text-black"
                                    href="https://wa.me/+3125237420" target="_blank"><i
                                        class="fa fa-whatsapp my-float text-success"></i>(+57) 3125237420</a>
                            </li>
                            <li class=" pb-3"><span>Correo electrónico: </span> <i class="far fa-envelope"></i><a
                                    class="text-decoration-none text-black"
                                    href="mailto:info@ddb.com.co">info@ddb.com.co</a></li>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php get_footer();?>