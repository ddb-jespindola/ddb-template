<?php
/**
 * The template for displaying all single posts
 *
 */
get_header();
get_template_part( 'template-parts/section', 'hero' );
?>


<div class="container">
    <div class="row">
        <?php woocommerce_breadcrumb(); ?>
    </div>
</div>


<div class="container">
    <div class="row">
    
        <div class="col-md-10">
            <?php get_template_part('includes/section', 'content') ?>
        </div>
        <div class="col-md-2">
            <?php if( is_active_sidebar('blog-sidebar')): ?>
                <?php dynamic_sidebar('blog-sidebar'); ?>
            <?php endif; ?>
        </div>  
    </div>
</div>


<?php get_footer(); ?>
