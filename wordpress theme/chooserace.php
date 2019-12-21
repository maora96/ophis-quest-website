<?php /* Template Name: Choose Race */ ?>
<?php get_header(); ?>


<section class="content-single">
    <div class="single-post">
        <h1>choose a race!</h1>

                <?php
                    $race = new WP_Query(array(
                        'post_type' => 'race'
                    ));

                    while($race->have_posts()) {
                        $race->the_post(); ?>
                        
                        <div class="race-card-box">
                            <div class="race-card">
                                <div class="race-img">
                                    <?php the_post_thumbnail('race'); ?>
                                </div>
                            <div class="race-description">
                                <h2><?php the_title(); ?></h2>
                                <?php the_content(); ?>
                            </div>
                        </div>
                   

                    <?php    }
                    ?>          
                    

       

        
        </div>
    </div>
</section>


<?php get_footer(); ?>

