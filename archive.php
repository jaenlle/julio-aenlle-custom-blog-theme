<?php

/* Template Name: Archive Page */

    get_header(); ?>

        <section class="row">
            <div class="eight columns">
                <?php if ( have_posts() ): ?>
                    <h1>ARCHIVE</h1>
                <?php
                //The Loop
                while ( have_posts() ): the_post(); ?>
                 <!-- data context -->
                    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    <?php
                    if ( has_post_thumbnail() ) {
                        $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),’thumbnail’ );
                        echo '<img width="100%" src="' . $image_src[0] . '">'; //ideal image width is 627; scale accordingly
                    } ?>
                    <?php the_excerpt(); ?>
                    <p class="readmore"><a href="<?php the_permalink(); ?>">Read More</a></p>
                <?php endwhile; ?> <!-- End Loop -->
                <?php else: ?>
                    <p>Sorry, no posts matched your criteria.</p>
                <?php endif; ?>
            </div>

            <div class="one column" id="blank">blank</div>

            <div class="three columns">
                <div id="social">
                    <ul>
                        <li><a href="https://github.com/jaenlle" target="_blank"><img src="http://julioaenlle.net/jaenllewordpress/wp-content/uploads/2016/07/github.png" alt="Find Me On GitHub" /></a></li>
                        <li><a href="http://codepen.io/julioa/" target="_blank"><img src="http://julioaenlle.net/jaenllewordpress/wp-content/uploads/2016/07/codepen.png" alt="Find Me On Codepen"  /></a></li>
                        <li><a href="https://www.linkedin.com/in/julioaenlle" target="_blank"><img src="http://julioaenlle.net/jaenllewordpress/wp-content/uploads/2016/07/linkedin.png" alt="Connect With Me On Linkedin"  /></a></li>
                        <li><a href="https://www.twitter.com/heyheyitsjulio" target="_blank"><img src="http://julioaenlle.net/jaenllewordpress/wp-content/uploads/2016/07/twitter.png" alt="Follow Me On Twitter" /></a></li>
                    </ul>
                </div>
                    <h3>By Month:</h3>
                        <ul>
                            <?php wp_get_archives( 'type=monthly'); ?>
                        </ul>
                    <h3>By Category:</h3>
                        <ul>
                            <?php wp_list_categories(); ?>
                        </ul>
                </div>
            </div>
        </section>

    <?php get_footer();

 ?>
