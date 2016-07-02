<?php
/*
Template Name: Portfolio Page
*/
?>

    <?php get_header(); ?>

        <section class="row">
            <div class="twelve columns">
                <div id="portfoliopage">
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
