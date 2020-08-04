<?php
/*
*
Template Name: prueba
*/

get_header();

get_template_part( 'template-parts/section', 'hero' );
?>

<section class="mt-5 mb-5">


<ul class="products">
	<?php
		$args = array(
			'post_type' => 'product',
			'posts_per_page' => 12
			);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) {
			while ( $loop->have_posts() ) : $loop->the_post();
				wc_get_template_part( 'content', 'product' );
			endwhile;
		} else {
			echo __( 'No products found' );
		}
		wp_reset_postdata();
	?>
</ul><!--/.products-->



</section>


<?php
get_footer();

