<?php /* Template Name: Archive Page */ ?>
<?php get_header(); ?>


<section class="content-single">
    <div class="single-post">
        <div class="archive-nav">
            <ul>
                <li><a href="#">leia do início</a></li>
                <li class="archive-title">arquivo</li>
                <li><a href="#">veja última postagem</a></li>
            </ul>
        </div>

        <div class="archive-general">
            <div class="archive-page-box">

            <?php 
                    $archive = new WP_Query(array(
                        'posts_per_page' => 9,
                        'category_name' => 'archive',
                        
                    ));

                    while ($archive->have_posts()) {
                        $archive->the_post(); ?>

                    <div class="archive-single">
                    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('receive-follower-archive'); ?></a>
                </div>
                    <?php }
                    ?>

<div class="pagination">
                <?php echo paginate_links();
                ?>
                </div>
                

            
            </div>

            <div class="archive-pagination">
                << | >>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

