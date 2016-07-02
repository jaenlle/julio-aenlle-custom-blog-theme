<?php
/*
Template Name: Contact Form Page
*/
?>

    <?php get_header(); ?>

        <section class="row">
            <div class="nine columns">
                <div id="contactpage">
                  <!-- BEGIN LOOP -->
                    <?php if ( have_posts() ) {
                        while ( have_posts() ){
                            the_post(); // the_post defines our Data CONTEXT ?>

                            <h2><?php the_title(); ?></h2>
                            <p>You can reach me by phone at: <span style="color:orange;letter-spacing:1.5px;">305.903.9810</span></p>
                            <p>or by Email at: <a href="mailto:julioaenlle@gmail.com">JULIOAENLLE@GMAIL.COM</a></p>
                            <p>or feel free to fill out the form below:</p>
                            <?php the_content();

                        } //end while statment
                    } //end if statement ?>
                  <!-- END LOOP -->
                </div>
            </div>

        <!-- ADDING SIDEBAR -->
            <div class="three columns">
                <div id="social">
                    <ul>
                        <li><a href="#"><img src="http://julioaenlle.net/jaenllewordpress/wp-content/uploads/2016/07/github.png" alt="" /></a></li>
                        <li><a href="#"><img src="http://julioaenlle.net/jaenllewordpress/wp-content/uploads/2016/07/codepen.png" alt="" /></a></li>
                        <li><a href="#"><img src="http://julioaenlle.net/jaenllewordpress/wp-content/uploads/2016/07/linkedin.png" alt="" /></a></li>
                        <li><a href="#"><img src="http://julioaenlle.net/jaenllewordpress/wp-content/uploads/2016/07/twitter.png" alt="" /></a></li>
                    </ul>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </section> <!-- End Body Content Section -->

    <?php get_footer(); ?>
