<?php get_header(); ?>

    <section class="row">

      <div class="nine columns">

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

      <!-- ADDING SIDEBAR -->
      <div class="three columns">
          <div id="social">
              <ul>
                  <li><a href="https://github.com/jaenlle"><img src="http://julioaenlle.net/jaenllewordpress/wp-content/uploads/2016/07/github.png" alt="" /></a></li>
                  <li><a href="http://codepen.io/julioa/"><img src="http://julioaenlle.net/jaenllewordpress/wp-content/uploads/2016/07/codepen.png" alt="" /></a></li>
                  <li><a href="https://www.linkedin.com/in/julioaenlle"><img src="http://julioaenlle.net/jaenllewordpress/wp-content/uploads/2016/07/linkedin.png" alt="" /></a></li>
                  <li><a href="https://www.twitter.com/heyheyitsjulio"><img src="http://julioaenlle.net/jaenllewordpress/wp-content/uploads/2016/07/twitter.png" alt="" /></a></li>
              </ul>
          </div>
          <?php get_sidebar(); ?>
      </div>

     </section>

<?php get_footer(); ?>
