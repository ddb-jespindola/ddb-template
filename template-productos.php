<?php
/*
*
Template Name: Productos
*/

get_header();
get_template_part( 'template-parts/section', 'hero' );
?>


<section>
    <div class="container">
        <div class="row" id="medicamentos">
            <div class="col-md-12">
                <h1 class="text-center mt-5 mb-4">Medicamentos</h1>
                <p>
                Productos farmacéuticos éticos y genéricos
                </p>
            </div>
        </div>
        <div class="row d-flex justify-content-between align-items-center">
            <div class="col-2 text-center gray-hover-effect">
                <img src="<?php echo(get_site_url() . '/wp-content/uploads/2020/05/ABBOTT.jpg');?>" alt="" class="img-fluid">
            </div>
            <div class="col-2 text-center gray-hover-effect">
                <img src="<?php echo(get_site_url() . '/wp-content/uploads/2020/05/BAXTER.png');?>" alt="" class="img-fluid">
            </div>
            <div class="col-2 text-center gray-hover-effect">
                <img src="<?php echo(get_site_url() . '/wp-content/uploads/2020/05/BAYER.png');?>" alt="" class="img-fluid">
            </div>
            <div class="col-2 text-center gray-hover-effect">
                <img src="<?php echo(get_site_url() . '/wp-content/uploads/2020/05/B-BRAUN.jpg');?>" alt="" class="img-fluid">
            </div>
            <div class="col-2 text-center gray-hover-effect">
                <img src="<?php echo(get_site_url() . '/wp-content/uploads/2020/05/CHALVER.png');?>" alt="" class="img-fluid">
            </div>
            <div class="col-2 text-center gray-hover-effect">
                <img src="<?php echo(get_site_url() . '/wp-content/uploads/2020/05/BIOGEN.png');?>" alt="" class="img-fluid">
            </div>
        </div>
        <hr>

        <div class="row" id="kits">
            <div class="col-md-12">
                <h1 class="text-center mt-5 mb-4">Kits de Toma de Muestras</h1>
                <p>
                El proceso de abordaje integral forense de la víctima en la investigación del delito sexual hace parte de un modelo de atención integral, interinstitucional e intersectorial, para garantizar la atención efectiva de sus necesidades de salud, protección y justicia.
                </p>
            </div>
        </div>
        <hr>
        
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center mt-5 mb-4">Kits Violencia Sexual Menores y Adultos</h1>
                <h3 class="text-center">Menores de edad</h3>
                <p>
                Según LEY 1146 DE 2007 del CONGRESO DE LA REPÚBLICA, se expiden normas para la prevención de la violencia sexual y atención integral de los niños, niñas y adolescentes abusados sexualmente. Atención integral en salud, En caso de abuso sexual a niños, niñas y adolescentes, el Sistema General en Salud tanto público como privado, así como los hospitales y centros de salud de carácter público, están en la obligación de prestar atención médica de urgencia e integral en salud a través de profesionales y servicios especializados.
                </p>
                <h3 class="text-center">Mayores de edad</h3>
                <p>
                Según LEY 1146 DE 2007 del CONGRESO DE LA REPÚBLICA, se expiden normas para la prevención de la violencia sexual y atención integral de los niños, niñas y adolescentes abusados sexualmente. Atención integral en salud, En caso de abuso sexual a niños, niñas y adolescentes, el Sistema General en Salud tanto público como privado, así como los hospitales y centros de salud de carácter público, están en la obligación de prestar atención médica de urgencia e integral en salud a través de profesionales y servicios especializados.
                </p>
            </div>
        </div>
        

    </div>
    <hr>
</section>

<?php
get_footer();
?>


