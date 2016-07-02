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
                            <?php the_content();

                        } //end while statment
                    } //end if statement ?>
                  <!-- END LOOP -->
                </div>
            </div>
        </section>

    <?php get_footer(); ?>
