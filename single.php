<?php get_header(); ?>

    <section class="row">
        <div class="nine columns">
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
            <!-- END PAGE PHP -->
        </div>

        
    </section>

<?php get_footer(); ?>
