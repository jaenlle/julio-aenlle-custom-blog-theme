<?php get_header(); ?>

    <section class="row">

      <div class="eight columns">

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

      <div class="one column" id="blank">blank</div>

      <!-- ADDING SIDEBAR -->
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
