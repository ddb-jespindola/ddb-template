<?php
/**
 * DDB functions and definitions
 *
 

 /**
  * 1 - LOAD CSS STYLES
  */
function load_css()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() . '/assets/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts', 'load_css');

/**
 *  2 - LOAD JS SCRIPTS
 */
function load_js()
{
    wp_enqueue_script('jquery');
    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrap');

    wp_enqueue_script('my-custom-script', get_template_directory_uri() .'/assets/js/jquery-3.5.1.js', array('jquery'), null, true);


    wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'load_js');

/**
 *  3 - Register Menus
 */
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

// Menus

register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
        'primary' => __( 'Primary Menu', 'THEMENAME' ),
    )
);

// Sidebars

function my_sidebars(){
    register_sidebar(
        array(
            'name' => 'Page Sidebar',
            'id' => 'page-sidebar',
            'before_title' => '<h4 class="widget-title"></h4>',
            'after-title' => '</h4>',
        )
    );
    register_sidebar(
        array(
            'name' => 'Blog Sidebar',
            'id' => 'blog-sidebar',
            'before_title' => '<h4 class="widget-title"></h4>',
            'after-title' => '</h4>',
        )
    );
}
add_action('widgets_init', 'my_sidebars');

// Register Custom Navigation Walker (Bootstrap nav)

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


/////////////////////////////////////////////////////////////////////////
/**
 *  4- Woocommerce support
 */
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
function mytheme_add_woocommerce_support() {
  add_theme_support( 'woocommerce' );
}

/**
 * Change number or products per row
 */
add_filter('loop_shop_columns', 'loop_columns', 999);
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 1; // products per row
	}
}

add_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 9 );
//add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 10 );

/**
 *  5- Remove options from woocommerce sort list
 */

add_filter( 'woocommerce_catalog_orderby', 'misha_remove_default_sorting_options' );

function misha_remove_default_sorting_options( $options ){

	unset( $options[ 'popularity' ] );
	//unset( $options[ 'menu_order' ] );
	unset( $options[ 'rating' ] );
	//unset( $options[ 'date' ] );
	unset( $options[ 'price' ] );
	unset( $options[ 'price-desc' ] );

	return $options;

}

/**
 *  6- Add order alphabetically to woocommerce sort list
 */

add_filter( 'woocommerce_get_catalog_ordering_args', 'custom_woocommerce_get_catalog_ordering_args' );

function custom_woocommerce_get_catalog_ordering_args( $args ) {
    $orderby_value = isset( $_GET['orderby'] ) ? woocommerce_clean( $_GET['orderby'] ) : apply_filters( 'woocommerce_default_catalog_orderby', get_option( 'woocommerce_default_catalog_orderby' ) );

    if ( 'alphabetical' == $orderby_value ) {
        $args['orderby'] = 'title';
        $args['order'] = 'ASC';
    }
    return $args;
}
add_filter( 'woocommerce_default_catalog_orderby_options', 'custom_woocommerce_catalog_orderby' );
add_filter( 'woocommerce_catalog_orderby', 'custom_woocommerce_catalog_orderby' );

function custom_woocommerce_catalog_orderby( $sortby ) {
    $sortby['alphabetical'] = __( 'Orden alfabético' );
    return $sortby;
}

/**
 * Change position price on single-product
 */
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 20 );

/**
 * Change the breadcrumb separator
 */
add_filter( 'woocommerce_breadcrumb_defaults', 'wcc_change_breadcrumb_delimiter' );
function wcc_change_breadcrumb_delimiter( $defaults ) {
	// Change the breadcrumb delimeter from '/' to '>'
	$defaults['delimiter'] = ' &gt; ';
	return $defaults;
}

/*
* HABILITAR CANTIDAD MÍNIMA DE PEDIDO
*/
function woo_minimum_order_amount() {
    $minimum = 30000;  // Modificar 10 por el importe mínimo de compra
    if ( WC()->cart->total < $minimum ) {
      if( is_cart() ) {
        wc_print_notice(
        sprintf( 'Debes realizar un pedido m&iacute;nimo de %s para finalizar tu compra.' , // Personalizar texto
          wc_price( $minimum ),
          wc_price( WC()->cart->total )
        ), 'error'
        );
      } else {
        wc_add_notice(
        sprintf( 'Debes realizar un pedido m&iacute;nimo de %s para finalizar tu compra.' , // Personalizar texto
          wc_price( $minimum ),
          wc_price( WC()->cart->total )
        ), 'error'
        );
      }
    }
  }
  add_action( 'woocommerce_checkout_process', 'woo_minimum_order_amount' );
  add_action( 'woocommerce_before_cart' , 'woo_minimum_order_amount' );

/**
 * Change the placeholder image
 */
add_filter('woocommerce_placeholder_img_src', 'custom_woocommerce_placeholder_img_src');

function custom_woocommerce_placeholder_img_src( $src ) {
	$upload_dir = wp_upload_dir();
	$uploads = untrailingslashit( $upload_dir['baseurl'] );
	// replace with path to your image
	$src = $uploads . '/2020/07/ddb-placeholder.jpg';

	return $src;
}

/**
 * Remove Images from single product and product List
 */
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );
remove_action( 'woocommerce_product_thumbnails', 'woocommerce_show_product_thumbnails', 20 );
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );

/**
 * Display Simple Product SKU, in WooCommerce loop pages, before item name
 *
 * @return 	void
 */
add_action('woocommerce_shop_loop_item_title', 'simple_product_sku_before_loop_item_title', 15);
function simple_product_sku_before_loop_item_title(){
	global $product;
	$type = $product->product_type;
	$sku = $type == 'simple' ? "<div class='sku'> SKU - " . $product->get_sku() . '</div>' : '';
	echo $sku;
}


/**
 * Add search box to products page
 */
add_action( 'woocommerce_before_shop_loop', 'test_loop_start', 5 );
function test_loop_start(){
    echo "<div class='mt-3 mb-3 searchbar-shop'>". do_shortcode('[wcas-search-form]') ."</div>";
}


/**
 * Change number of products that are displayed per page (shop page)
 */
add_filter( 'loop_shop_per_page', function ( $cols ) {
  // $cols contains the current number of products per page based on the value stored on Options -> Reading
  // Return the number of products you wanna show per page.
  return 10;
}, 20 );


/**
 * Remove generic message of Woocommerce
 */
add_filter('woocommerce_register_post_type_product', 'remove_shop_default_description');
function remove_shop_default_description($args){
$args['description'] = '';
  return $args;
}
add_filter('woocommerce_show_page_title', '__return_false');

/**
 * ADD button "¿Deseas cotizar el producto?"
 */
function contact_button() { 
  get_template_part( 'template-parts/woocommerce/section', 'contact-button' );
};   
// add the action 
add_action( 'woocommerce_product_meta_end', 'contact_button', 10 ); 


//===================================================
//              SEO SETTINGS
//===================================================
/**
 * Register SEO yoast_variables 
 */
function get_short_desc() {
  global $product;
  $short_desc = $product->get_short_description();
  $short_desc = substr($short_desc, 0, 80);
  return $short_desc;
}
function get_attr_presentacion(){
  global $product;
  $attribute = $product->get_attribute('presentacion');
  $attribute = substr($attribute, 0, 50);
  return  $attribute;
}
function get_attr_invima(){
  global $product;
  $attribute = 'INVIMA ' . $product->get_attribute('invima');
  return  $attribute;
}
function register_custom_yoast_variables() {
  wpseo_register_var_replacement( '%%shortdesc%%', 'get_short_desc', 'advanced', 'woocommerce short description' );
  wpseo_register_var_replacement( '%%presentacion%%', 'get_attr_presentacion', 'advanced', 'woocommerce attribute presentacion' );
  wpseo_register_var_replacement( '%%invima%%', 'get_attr_invima', 'advanced', 'woocommerce attribute invima' );
}
add_action('wpseo_register_extra_replacements', 'register_custom_yoast_variables');

/**-----------------
* ADD SEO SCHEMA INFO
*-------------------
*/

// Add SEO Schema info of products
add_action('woocommerce_before_single_product', 'schema_info_product', 10);

function schema_info_product() {
  global $product;
  $name = $product->get_name();
  $sku = $product->get_sku();
  $short_desc = $product->get_short_description();
  $description = $product->get_description();
  $image = 'https://ddb.com.co/wp-content/uploads/2020/08/placeholder_ddb.jpg';

  $presentacion = $product->get_attribute('presentacion');
  $via_administracion = $product->get_attribute('via-administracion');
  $forma_farmac = $product->get_attribute('forma-farmaceutica');
  $invima = $product->get_attribute('invima');
  $fabricante = $product->get_attribute('fabricante');
  $titular_marca = $product->get_attribute('titular');
  $ean = $product->get_attribute('ean');
  $url = get_permalink( $product->get_id() );

  $nterms = get_the_terms( $post->ID, 'product_tag'  );
  $terms = get_the_terms( $product->ID, 'product_cat' );
  foreach ($terms  as $term  ) {
      $product_cat_name = $term->name;
      break;
  }
  foreach ($nterms  as $term  ) {
    $product_tag_name = $term->name;
    break;
}
  $tag = $product_tag_name = $term->name;
  $category = $product_cat_name;
  $price = $product->get_price();
  
  // Add Drug Schema tag only for Medicamentos Tag
  if ($category == "Medicamento") {

    echo '<script type="application/ld+json">
    {
        "@context": "http://schema.org/",
        "@type": "Drug",
        "activeIngredient": " ' . $short_desc . ' ",
        "administrationRoute": " ' . $via_administracion . ' ",
        "dosageForm": " ' . $forma_farmac . ' ",
        "foodWarning": " ' . $description . ' ",/*Contraindicaciones*/
        "manufacturer": {
            "@type": "Organization",
            "name": "' . $fabricante . '"
        },
        "nonProprietaryName": " '. $short_desc .' ", /*Nombre generico*/
        "proprietaryName": " ' . $name . ' ",
        "description": "' . $name . ' - ' . $presentacion . '",
        "identifier": " ' . $invima . ' ",/*Invima*/
        "image": " ' . $image . ' ",
        "name": " ' . $name . ' ",
        "medicineSystem": "https://schema.org/WesternConventional"
    }
    </script>';
  }

  echo '<script type="application/ld+json">
    {
        "@context": "http://schema.org/",
        "@type": "Product",
        "name": "' . $name . '",
        "description": "' . $name . ' - ' . $presentacion . '",
        "image": "' . $image . '",
        "brand": {
           "@type": "Organization",
            "name": "' . $tag . '"
        },  
        "category": "' . $category . '", 
        "gtin13": "' . $ean . '", 
        "manufacturer": {
            "@type": "Organization",
            "name": "' . $fabricante . '"
        },
        "sku": "' . $sku . '",
        "alternateName": "'. $short_desc .'",
        "productID": "' . $invima . '",
        "offers": {
          "@type": "Offer",
          "url": " ' . $url . ' ",
          "priceCurrency": "COP",
          "price": "",
          "availability": "https://schema.org/InStoreOnly",
          "itemCondition": "https://schema.org/NewCondition"
        }
    }
    </script>';
}