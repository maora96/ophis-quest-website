<?php /* Template Name: Research Page */ ?>

<?php get_header(); ?>


<section class="content">
    <div class="post-area">
        <div class="post-research">
            <div class="research-list">
                <!-- PAGE TITLE -->
                <h1>PAGE TITLE</h1>

                <div class="post-text">



                    <!-- LIST OF RESEARCH ITEMS. 
                        TO ADD A NEW ITEM PASTE THE CODE BELOW BETWEEN <UL ID ="RESEARCH-ITEMS"> and </UL>:
                        <li><a href="#ID">ITEM TITLE</a></li>
                    
                    -->
                   <ul id="research-items">
                        <li class="active"><a href="#research-01">Research 01</a></li>
                        <li><a href="#research-02">Research 02</a></li>
                        <li><a href="#research-03">Research 03</a></li>
                        <li><a href="#research-04">Research 04</a></li>
                        <li><a href="#research-05">Research 05</a></li>
                        <li><a href="#research-06">Research 06</a></li>
                   </ul>
                </div>

            </div>
            


            <!-- RESEARCH CONTENT: IMAGE, TITLE, DESCRIPTION, ETC. TO ADD A NEW RESEARCH PASTE THE CODE BELOW AFTER THE TWO ALREADY FILLED RESEARCH BLOCKS:


                WHAT TO FILL: ID, IMAGE URL/DIRECTORY, RESEARCH TITLE, RESEARCH DESCRIPTION.

                <div class="research-image-description" id="#ID">
                <div class="research-img">
                    <img src="IMAGE URL/DIRECTORY" alt="">
                </div>

                <div class="research-description">

                    <div class="research-info">
                        <h1 class="research-title">RESEARCH TITLE</h1>
                        <div class="icons">
                            <img src="images/icon.png" alt="">
                            <img src="images/icon.png" alt="">
                        </div>
                    </div>
                    <div class="research-text">
                        RESEARCH DESCRIPTION 
                    </div>
                </div>
            </div>

        
            --> 


            <!-- RESEARCH 01 -->
            <div class="research-image-description active" id="research-01">
                <div class="research-img">
                    <img src="images/research-image.png" alt="">
                </div>

                <div class="research-description">

                    <div class="research-info">
                        <h1 class="research-title">research 01</h1>
                        <div class="icons">
                            <img src="images/icon.png" alt="">
                            <img src="images/icon.png" alt="">
                        </div>
                    </div>
                    <div class="research-text">
                        <p>im a research description 01</p>
                    </div>
                </div>
            </div>


            <!-- RESEARCH 02 --> 
            <div class="research-image-description" id="research-02">
                <div class="research-img">
                    <img src="images/research-image.png" alt="">
                </div>

                <div class="research-description">

                    <div class="research-info">
                        <h1 class="research-title">research 02</h1>
                        <div class="icons">
                            <img src="images/icon.png" alt="">
                            <img src="images/icon.png" alt="">
                        </div>
                    </div>
                    <div class="research-text">
                        <p>im a research description 02</p>
                    </div>
                </div>
            </div>


            <!-- ADD NEW CONTENT HERE --> 

        </div>

    </div>
    <div class="character">
        <img src="images/character.png" alt="" class="character">
    </div>
</section>


<?php get_footer(); ?>

