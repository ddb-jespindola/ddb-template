<?php
/**
 * Muestra el PopUp que se abre al presionar el boton de cotizar producto, en las paginas de cada producto
 */

?>

<div class="wc-product-contact-info d-flex justify-content-start" id="wc-sing-lecontact-info-screen" data-toggle="modal" data-target="#exampleModal"> 
    <div class="btn-img-call">
        <i class="fas fa-headset"></i>
    </div>
    <div class="txt-call-btn">
        <span class="gray-txt">¿Deseas cotizar el producto?</span>
        <span class="green-txt">Contáctanos</span>
        <span class="green-txt"><i class="fas fa-plus"></i></span>
        
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
            <div class="col-md-5 col-5">
                <img src="/wp-content/uploads/2020/09/contact-product.jpg" alt="">
            </div>
            <div class="col-md-7 col-7">
                <div class="ddb-modal-box">
                    <h4 class="text-center pt-2">Atención y ventas en Bogotá</h4>
                </div>
                <div>
                    <ul class="ddb-list-modal">
                        <li><i class="fas fa-phone"></i><a href="tel:(+571)7432597">(1) 743 25 97</a></li>
                        <li><i class="fas fa-phone"></i><a href="tel:(+57)3007484272">(+57) 300 748 42 72</a></li>
                        <li><a  href="https://wa.me/+573125237420" target="_blank"><i class="fa fa-whatsapp my-float text-success"></i>(+57) 312 523 74 20</a></li>
                        <li><a  href="https://wa.me/+573007484272" target="_blank"><i class="fa fa-whatsapp my-float text-success"></i>(+57) 300 748 42 72</a></li>
                        <li><i class="far fa-envelope"></i><a href="mailto:info@ddb.com.co">info@ddb.com.co</a></li>
                    </ul>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>