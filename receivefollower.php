<?php /* Template Name: Receive Follower */ ?>

<?php get_header(); ?>

<section class="content-single">
            <div class="single-post">
                <h1>receive a follower!</h1>

                <div class="followerbox">

                    <?php
                    $receivefollower = new WP_Query(array(
                        'post_type' => 'receivefollower'
                    ));

                    while($receivefollower->have_posts()) {
                        $receivefollower->the_post(); ?>

                    <div class="follower-single">
                        <?php the_post_thumbnail('receive-follower-archive'); ?>
                    </div>

                    <?php    }
                    ?>          
                    

                    
                    
                </div>
            </div>
        </section>

<?php get_footer(); ?>

