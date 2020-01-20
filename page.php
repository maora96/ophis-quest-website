<?php

get_header();

while(have_posts()) {
    the_post(); ?>

    <section class="content">
            <div class="post-area">
                <div class="post">
                    <h1><?php the_title(); ?></h1>
                    <div class="post-text">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>

<?php 
}
?>

<?php get_sidebar('main'); ?>
        </section>

<?php 
get_footer();

?>