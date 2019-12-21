<?php get_header(); ?>

        <section class="content">
            <div class="post-area">

            <?php 
                while(have_posts()) {
                    the_post(); ?>
                
                <div class="post">
                    <a href="<?php the_permalink(); ?> "><h1><?php the_title(); ?></h1></a>
                    <div class="post-text">
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>">Read more</a>
                    </div>
                </div>
            
                <?php } ?>

                <div class="pagination">
                <?php echo paginate_links();
                ?>
                </div>
                

                
            </div>
            <?php get_sidebar('main'); ?>
        </section>

<?php get_footer(); ?>
