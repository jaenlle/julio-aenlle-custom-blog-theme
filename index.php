<?php get_header(); ?> <!-- Gets information from header.php to display on page -->

    <!-- Begin Body Content Section -->
      <section class="row">
        <div class="twelve columns">

          <!-- Begin Loop -->

          <?php
              if ( have_posts() ){
                  while ( have_posts() ){
                      the_post(); ?>
                          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); //this php calls up each post title ?></a></h3>
                          <?php
                          if ( has_post_thumbnail() ) {
                              the_post_thumbnail('thumbnail');
                          }
                          the_excerpt(); //this pulls a paragraph of content from each post ?>
                      <p><a href="<?php the_permalink(); ?>">Read More</a></p>
                  <?php } //end while statement
              } //end if statement
            ?>

          <!-- End Loop -->
        </div>
      </section> <!-- End Body Content Section -->

<?php get_footer(); ?> <!-- Gets information from footer.php to display on page -->
