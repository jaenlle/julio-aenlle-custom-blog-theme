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
                            <div class="post-thumbnail">
                              <?php $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),’thumbnail’ );
                                echo '<img width="100%" src="' . $image_src[0] . '">'; ?><!--ideal image width is 627; scale accordingly-->
                            </div>
                      <?php } ?>

                      <?php the_content();
                  }//END WHILE
                } //END IF ?>
                <p>Posted on: <span style="color:orange;"><?php the_time('F j, Y'); ?></span></p>
            <!-- END PAGE PHP -->
            <div id="prevnext" >
                <div id="newpost">
                    <?php next_post_link('
                    	<h4>%link</h4>
                    	', 'Newer Post', false);
                    ?>
                </div>
                <div id="oldpost">
                    <?php previous_post_link('
                    <h4>%link</h4>
                    ', 'Older Post', false);
                    ?>
                </div>
            </div>
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
