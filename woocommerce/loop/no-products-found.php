<?php
/**
 * Displayed when no products are found matching the current query
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/no-products-found.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 2.0.0
 */

defined( 'ABSPATH' ) || exit;

?>
<div class="row">
    <div class="col-md-12 text-center">
        <h2 class="page-section-title">
            No hay resultados
        </h2>
    </div>
</div>
<div class="row text-center">
    <div class="col-md-12">
        <div class='mt-3 mb-3 searchbar-shop'><?php echo do_shortcode('[wcas-search-form]'); ?></div>
    </div>
</div>
<div class="container no-encontrado">
<div class="row">
    <div class="col-md-12 ">
        <div class="row d-flex justify-content-center text-center">
            <h2 class="text-center bold-title">Si no encuentras algún producto</h2>
            <h3 class="grayDdb-text"><span class="bold-title">Nosotros lo buscamos por ti,</span> escríbenos o llámanos</h3>
        </div>
        <div class="row mt-2">
            <div class="col-md-6 contact-info mt-4">
                <div>
                    <div class="">
                        <a href="tel:(+571)7432597">
                            <i class="fas fa-phone-volume"></i>
                            743 25 97
                        </a>
                    </div>
                    <div class="">
                        <a href="https://wa.me/+573007484272" target="_blank">
                            <i class="fa fa-whatsapp my-float"></i>
                            300 748 42 72
                        </a>
                    </div>
                    <!-- <div class="">
                        <a href="https://wa.me/+573125237420" target="_blank">
                            <i class="fa fa-whatsapp my-float"></i>
                            312 523 74 20
                        </a>
                    </div> -->
                </div>                

            </div>
            <div class="col-md-6">
                <?php echo do_shortcode('[contact-form-7 id="2964" title="Consulta_producto"]'); ?>
            </div>
        </div>
    </div>
</div>
</div>
