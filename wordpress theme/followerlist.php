<?php /* Template Name: Follower List */ ?>

<?php get_header(); ?>

<section class="content-follower-list">
    <div class="post-area">
        <div class="followerlist">
             <?php
                $followers = new WP_Query(array(
                    'post_type' => 'followers'
                ));

                while($followers->have_posts()) {
                    $followers->the_post(); ?>
                    <div class="follower">
                        <h2><?php the_title(); ?></h2>
                        <div class="icons">
                            <img src="<?php the_field('icon'); ?>">
                            <img src="<?php the_field('icon_2'); ?>">
                            <img src="<?php the_field('icon_3'); ?>">
                            <img src="<?php the_field('icon_4'); ?>">
                            
                        </div>
                    </div>
                   
                <?php    }
                ?>          
                    
           



    

        </div>

    </div>
    <?php get_sidebar('main'); ?>
</section>

<?php get_footer(); ?>

