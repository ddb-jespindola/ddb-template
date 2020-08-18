<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Screenr
 */

get_header(); 
get_template_part( 'template-parts/section', 'hero' ); ?>


    <div class="mt-5">
	<div id="content" class="site-content">

		<div id="content-inside" class="container right-sidebar">
			<section id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
                
				<?php if ( have_posts() ) : ?>

					<!--><?php /* Start the Loop */ ?><!-->
					<?php while ( have_posts() ) : the_post(); ?>
					
                    <?php do_action( 'woocommerce_before_shop_loop' ); ?>  
                    
                    <div class="woocommerce">
                    
                    <?php woocommerce_product_loop_start();?>
                    
                    <?php do_action( 'woocommerce_shop_loop' );?>

                    <?php
                    global $product;
                    // Ensure visibility.
                    if ( empty( $product ) || ! $product->is_visible() ) {
                        return;
                    }
                    ?>
                    <div <?php wc_product_class( '', $product ); ?>>
                        <?php
                        /**
                         * Hook: woocommerce_before_shop_loop_item.
                         *
                         * @hooked woocommerce_template_loop_product_link_open - 10
                         */
                        do_action( 'woocommerce_before_shop_loop_item' );

                        /**
                         * Hook: woocommerce_before_shop_loop_item_title.
                         *
                         * @hooked woocommerce_show_product_loop_sale_flash - 10
                         * @hooked woocommerce_template_loop_product_thumbnail - 10
                         */
                        do_action( 'woocommerce_before_shop_loop_item_title' );

                        /**
                         * Hook: woocommerce_shop_loop_item_title.
                         *
                         * @hooked woocommerce_template_loop_product_title - 10
                         */
                        do_action( 'woocommerce_shop_loop_item_title' );

                        /**
                         * Hook: woocommerce_after_shop_loop_item_title.
                         *
                         * @hooked woocommerce_template_loop_rating - 5
                         * @hooked woocommerce_template_loop_price - 10
                         */
                        do_action( 'woocommerce_after_shop_loop_item_title' );

                        /**
                         * Hook: woocommerce_after_shop_loop_item.
                         *
                         * @hooked woocommerce_template_loop_product_link_close - 5
                         * @hooked woocommerce_template_loop_add_to_cart - 10
                         */
                        do_action( 'woocommerce_after_shop_loop_item' );
                        ?>
                    </div>



                    <?php endwhile; ?>
                    
                    <?php 
                    woocommerce_product_loop_end();

                    /**
                    * Hook: woocommerce_after_shop_loop.
                    *
                    * @hooked woocommerce_pagination - 10
                    */
                    do_action( 'woocommerce_after_shop_loop' );
                    ?>


					<?php the_posts_navigation(); ?>

				<?php else : ?>

					<div class="container mt-5 mb-5">
                        <div class="row justify-content-center">
                            <div>
                                <h2>No hay resultados :(</h2>
                            </div>
                        </div>
                    </div>

				<?php endif; ?>

				</main><!-- #main -->
			</section><!-- #primary -->


		</div><!--#content-inside -->
	</div><!-- #content -->
    </div>
<?php get_footer(); ?>
