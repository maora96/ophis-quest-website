<?php /* Template Name: Homepage */ ?>


<?php get_header(); ?>

<section class="archive-box">
            <div class="archive-menu">
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
                    <li><a href="<?php the_permalink() ?>">FIRST</a></li>
                    <li class="archive-title">
                        <button id="archivebtn">ARCHIVE</button>
                    </li>

                    <?php 
                    $lastpost = new WP_Query(array(
                        'posts_per_page' => 1,
                        'order' => 'DESC'
                    ));

                    while ($lastpost->have_posts()) {
                        $lastpost->the_post();
                    }

                    ?>

                    <li><a href="<?php the_permalink() ?>">LATEST</a></li>
                </ul>
            </div>
            <div class="archive-posts" id="colldiv">

                <?php 
                    $homepageArchive = new WP_Query(array(
                        'posts_per_page' => 5,
                        'category_name' => 'archive'
                    ));

                    while ($homepageArchive->have_posts()) {
                        $homepageArchive->the_post(); ?>

                        <div class="archive-single-post">
                        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('homepage-archive'); ?></a>
                </div>   

                    <?php }
                    ?>

            </div>
        </section>

        <section class="content">
            <div class="post-area">
            <?php 
                while(have_posts()) {
                    the_post(); ?>
                
                <div class="post">
                    <h1><?php the_title(); ?></h1>
                    <div class="post-text">
                        <?php the_content(); ?>
                    
                    </div>
                </div>
                <?php } 
                
            
                ?>

            </div>
            
                
                <?php get_sidebar('main'); ?>

               
            
        </section>

<?php get_footer(); ?>
