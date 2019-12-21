<?php get_header(); ?>


<section class="content">
    <div class="post-area">
    <div class="pagination-single">
            <?php previous_post_link('%link', 'Previous'); ?>
            <div class="title-pag"><?php the_title(); ?></div>
            <?php next_post_link('%link', 'Next'); ?>
        </div>

    <?php while(have_posts()) {
        the_post(); ?>

            <div class="post">
            
            
            <h1 class="square-border"><?php the_title(); ?></h1>
            <div class="post-text">
                <?php the_content(); ?>
            </div>
        </div>

        <div class="interaction-box">
            <div class="interaction-box-content">

            </div>
            <div class="interaction-box-pagination">
            <div class="pagination-single">
            <?php previous_post_link('%link', 'Previous'); ?>
            <div class="title-pag-white"><?php the_title(); ?></div>
            <?php next_post_link('%link', 'Next'); ?>
        </div>
            </div>
        </div>

    <?php } ?>
        
    </div>
    <?php get_sidebar('main'); ?>

</section>

<?php get_footer(); ?>
