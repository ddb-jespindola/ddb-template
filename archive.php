<?php get_header();


?>

<h1>Blog</h1>

<section class="page-wrap mt-10">
    <div class="container fluid">

        <?php get_template_part('includes/section', 'archive'); ?>
        <?php previous_posts_link(); ?>

    </div>
</section>

<?php get_footer();?>