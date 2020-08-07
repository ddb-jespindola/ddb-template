<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 */

?>
<?php wp_footer(); ?>

<footer>

    <a  class="whats-app d-flex align-items-center justify-content-center" href="https://wa.me/+573125237420" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>Certificaciones</h5>
                <div class="footer-logo">
                        <img src="/wp-content/uploads/2020/06/Bureau-veritas-C0240563.png" alt="" class="footer-logo">
                </div>
            </div>
            
            <div class="col-md-4">
                <h5>Acceso rapido</h5>
                <ul>
                    <li>
                        <a href="">Medicamentos</a>
                    </li>
                    <li>
                        <a href="">Dispositivos médicos</a>
                    </li>
                    <li>
                        <a href="">Kits</a>
                    </li>
                    <li>
                        <a href="/escribenos">Contacto</a>
                    </li>
                    <li>
                        <a href="/trabaja-con-nosotros/">Trabaja con nosotros</a>
                    </li>
                    <li>
                        <a href="/proteccion-de-datos/">Protección de datos</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Contacto</h5>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i><a href="https://www.google.com/maps/place/Parque+Empresarial+Puerta+del+Sol/@4.6861636,-74.1238557,17z/data=!3m1!4b1!4m5!3m4!1s0x8e3f9b451d6a85f3:0x7213b2e152566ddf!8m2!3d4.6861583!4d-74.121667" target="_blank">
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
        <div class="row ">
            <div class="col-md-12 text-center social-footer">
            <a href="https://www.linkedin.com/company/dep%C3%B3sito-de-drogas-boyac%C3%A1/" target="_blank"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
        <div class="row footer-copyright">
            <div class="col-md-12 text-center">
                © Copyright 2020 | DEPÓSITO DE DROGAS BOYACÁ | TODOS LOS DERECHOS RESERVADOS
            </div>
        </div>
    </div>  
    
    <!-- AOS scroll animations -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</footer>

</body>
</html>