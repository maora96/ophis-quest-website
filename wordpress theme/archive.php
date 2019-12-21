<?php get_header(); ?>

<section class="content">
    <div class="post-area">

    <h1><?php the_archive_title(); ?> </h1>

    <?php 
        while(have_posts()) {
            the_post(); ?>
        
        <div class="post">
            <h1><?php the_title(); ?></h1>
            <div class="post-text">
                <?php the_excerpt(); ?>
                <p><a href="<?php the_permalink(); ?>">Read more</a></p>
            </div>
        </div>
        <?php } 
        
        echo paginate_links();
        ?>

        
    </div>
    <?php get_sidebar('main'); ?>
</section>

<?php get_footer(); ?>
