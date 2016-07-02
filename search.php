<?php
/* Template Name: Search Page */
get_header(); ?>

    <section class="row">
        <div class="eight columns">
          <?php if( have_posts() ) :?>
            <h1>
                <?php printf(
                    __('Search Results for: %s'),
                    '<span>' . get_search_query() . '</span>' );
                ?>
            </h1>
            <?php
            while (have_posts() ) : the_post(); ?>
                <h2><?php the_title(); ?></h2>
                <?php the_content();
            endwhile;//End While
           else : ?>
            <h1>Nothing Found</h1>
            <p>Sorry, but nothing matched your search criteria. Please try again with different search terms.</p>
          <?php endif; ?><!-- End If -->
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
            <?php get_sidebar(); ?>
        </div>

    </section>

<?php get_footer(); ?>
