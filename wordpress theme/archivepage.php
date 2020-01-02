<?php /* Template Name: Archive Page */ ?>
<?php get_header(); ?>


<section class="content-single">
    <div class="single-post">
        <div class="archive-nav">
            <ul>
                    <?php 
                    $firstpost = new WP_Query(array(
                        'posts_per_page' => 1,
                        'order' => 'ASC'
                    ));

                    while ($firstpost->have_posts()) {
                        $firstpost->the_post();
                    }

                    ?>
                <li><a href="<?php the_permalink() ?>">leia do início</a></li>
                <li class="archive-title">arquivo</li>

                <?php 
                    $lastpost = new WP_Query(array(
                        'posts_per_page' => 1,
                        'order' => 'DESC'
                    ));

                    while ($lastpost->have_posts()) {
                        $lastpost->the_post();
                    }

                    ?>

                <li><a href="<?php the_permalink() ?>">veja última postagem</a></li>
            </ul>
        </div>

        <div class="archive-general">
            <div class="archive-page-box">

            <?php 
                    $archive = new WP_Query(array(
                        'category_name' => 'archive',
                        
                    ));

                    while ($archive->have_posts()) {
                        $archive->the_post(); ?>

                    <div class="archive-single">
                    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('receive-follower-archive'); ?></a>
                </div>
                    <?php }
                    ?>


                

            
            </div>

           
        </div>
    </div>
</section>

<?php get_footer(); ?>

