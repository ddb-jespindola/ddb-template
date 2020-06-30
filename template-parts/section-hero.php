<!-- Hero section -->
<div class="hero-image-header">
    <div class="d-flex justify-content-center page-hero-text">
        <div class="row">
            <div class="col-md-12">
                
                <?php if (is_woocommerce()) : ?>
                    <h1><?php woocommerce_page_title(); ?>
                        <?php the_archive_description( '<h1>', '</h1>' ); ?></h1>
                    </div>
                <?php else : ?>
                    <h1><?php the_title(); ?></h1>
                <?php endif; ?>
            </div>    
        </div>
    </div>
</div>
<!-- End Hero section -->