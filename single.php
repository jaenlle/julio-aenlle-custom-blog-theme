<?php get_header(); ?>

    <section class="row">
        <div class="eight columns">
            <!-- BEGIN PAGE PHP -->
              <?php
                if ( have_posts() ) {
                  while ( have_posts() ){
                      the_post(); // the_post defines our Data CONTEXT

                      if ( has_post_thumbnail() ){ ?>
                          <h1 class="idv"><?php the_title(); ?></h2>
                          <div class="post-thumbnail"><?php the_post_thumbnail('large'); ?></div>
                      <?php } ?>

                      <?php the_content();
                  }//END WHILE
                } //END IF ?>
                <p style="color:orange;"><?php the_time('F j, Y'); ?>
            <!-- END PAGE PHP -->
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
