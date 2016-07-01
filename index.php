<?php get_header(); ?> <!-- Gets information from header.php to display on page -->

    <!-- Begin Body Content Section -->
    <section class="row">
        <div class="nine columns">
            <!-- Begin Loop -->
            <?php
                if ( have_posts() ){
                    while ( have_posts() ){
                        the_post(); ?>
                            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); //this php calls up each post title ?></a></h1>
                            <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail('thumbnail');
                            }
                            the_excerpt(); //this pulls a paragraph of content from each post ?>
                        <p><a href="<?php the_permalink(); ?>">Read More</a></p>
                    <?php } //end while statement
                } //end if statement
              ?>
        </div>
        <!-- End Loop -->

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

<?php get_footer(); ?> <!-- Gets information from footer.php to display on page -->
