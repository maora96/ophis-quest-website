<?php /* Template Name: Compendium */ ?>

<?php get_header(); ?>


<section class="content-single">
    <div class="single-post">
        <h1>equipament</h1>

        <div class="archive-general">
            <div class="archive-page-box">
            <?php
                $equipaments = new WP_Query(array(
                    'post_type' => 'equipament'
                ));

                while($equipaments->have_posts()) {
                    $equipaments->the_post(); ?>

                <div class="compendium-single">
                    <?php the_post_thumbnail('compendium'); ?>
                </div>

            <?php    }
            ?>                

               
            </div>
        </div>
    </div>


    <div class="single-post">
        <h1>skills</h1>

        <div class="archive-general">
            <div class="archive-page-box">
            <?php
                $skills = new WP_Query(array(
                    'post_type' => 'skills'
                ));

                while($skills->have_posts()) {
                    $skills->the_post(); ?>

                <div class="compendium-single">
                    <?php the_post_thumbnail('compendium'); ?>
                </div>

            <?php    }
            ?>                
            </div>
        </div>
    </div>


</section>


<?php get_footer(); ?>

