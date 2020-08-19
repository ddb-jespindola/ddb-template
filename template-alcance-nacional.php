<?php
/*
*
Template Name: Alcance nacional
*/

get_header();

get_template_part( 'template-parts/section', 'hero' );
?>

<section class="mt-5 mb-5">
    <div class="container">
        <div class="row">
            
            <div class="col-md-8">
                <p >
                Nuestro grupo de asesores comerciales atienden a más de 450 clientes a nivel nacional, garantizando despachos y entregas en tiempos óptimos. 
                </p>
                <h2>Algunos de nuestros clientes</h2>
                <div class="row mt-3">
                    <div class="col-md-6 pr-5">
                    <ul class="list-arrow">
                        <li>Hospital Pablo Tobón Uribe - Medellín</li>
                        <li>Orden Hospitalaria San Juan de Dios</li>
                        <li>Corporación Hospitalaria Juan Ciudad</li>
                        <li>Fundación Cardioinfantil</li>
                        <li>Clinica de Marly - Bogotá/Chia</li>
                        <li>Fundación Hospital San Carlos</li>
                        <li>Clínica Valle del Lili - Cali</li>
                        <li>Christus Sinergia en Salud - Cali</li>
                        <li>Sociedad Cirugía Bogotá - Hospital San José</li>
                        <li>Comunidad Hermanas Hospitalarias del Sagrado Corazón</li>
                        <li>Clínicas Medilaser</li>
                        <li>Clínica Palermo</li>
                    </ul>
                    </div>
                    <div class="col-md-6 pr-5">
                    <ul class="list-arrow">
                        <li>Hospital Universitario San Ignacio</li>
                        <li>Centro Médico Imbanaco - Cali</li>
                        <li>Caja de Compensación Familiar Colsubsidio</li>
                        <li>Caja de Compensación Familiar Compensar</li>
                        <li>Caja de Compensación Familiar Cafam</li>
                        <li>Clínica Universidad de La Sabana</li>
                        <li>Organización Panamericana de la Salud</li>
                        <li>Organización Internacional para las Migraciones</li>
                        <li>Cruz Roja Internacional</li>
                        <li>Los Cobos Medical Center</li>
                    </ul>
                    </div>
                </div>




            </div>
            <div class="col-md-4">
                <img src="<?php echo(get_site_url() . '/wp-content/uploads/2020/07/mapa-colombia.png') ?>;" alt="" class="w-100">
            </div>
            
        </div>
    </div>
</section>


<?php
get_footer();

