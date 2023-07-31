<?php get_header();
get_template_part( 'template-parts/section', 'hero' );
?>




<div class="container">
    <div class="row">
        <?php woocommerce_breadcrumb(); ?>
    </div>
</div>

<section class="page-wrap">
    <div class="container">
        <div class="row">
        
        <div class="col-md-9">
            <div class="woocommerce">
                <?php woocommerce_content(); ?>
            </div>  
        </div>
        <div class="col-md-3">
            <?php if( is_active_sidebar('blog-sidebar')): ?>
                <?php dynamic_sidebar('blog-sidebar'); ?>
            <?php endif; ?>
        </div>  

        </div>
    </div>
</section>



<?php get_footer();?>