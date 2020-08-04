<?php get_header();
get_template_part( 'template-parts/section', 'hero' );
?>


<section class="page-wrap">
    <div class="container">
        <div class="woocommerce">
            <?php woocommerce_content(); ?>
        </div>        
    </div>
</section>

<?php get_footer();?>