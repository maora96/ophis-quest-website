<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    

    <!-- page name -->
    <title>landing page</title>
</head>
<body>

<header>
    <div class="nav-wrapper">
        <nav>

            <div class="logo">
                <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_theme_file_uri('/images/logo.png'); ?>" alt=""></a>
            </div>

            <div class="mobile-nav">
                <label for="toggle">&#9776</label>
                <input type="checkbox" id="toggle">
                <ul class="hamburger-menu">
                    <?php 
                        wp_nav_menu(array(
                            'theme_location' => 'headerMenuLocation'
                        ));
                    ?>
                    <!--<li><a href="index.html">index</a></li>
                    <li><a href="blogpost.html">blogpost</a></li>
                    <li><a href="researchpage.html">research page</a></li>
                    <li><a href="chooserace.html">choose race</a></li>
                    <li><a href="archivepage.html">archive</a></li>
                    <li><a href="followerlist.html">followers</a></li>
                    <li><a href="receivefollower.html">receive follower</a></li>
                    <li><a href="compendium.html">compendium</a></li> -->
                </ul>
            </div>


            <div class="account-info">
                <a href="" class="login">login</a> | <i class="fas fa-bell"></i>
            </div>
        </nav>
    </div>


    <section class="banner">
        <img src="<?php echo get_theme_file_uri('/images/banner.jpg'); ?>" alt="">
    </section>

</header>