      <footer class="row">
            <div class="twelve columns">
                <div class="row"> <!-- this div houses the menu -->
                    <div class="twelve columns">
                        <?php wp_nav_menu( array(
                                'sort_column'     =>  'menu_order',
                                'container_class' =>  'blank-menu-header'
                            )); ?>
                    </div>
                </div>

                <p class="copyright">
                    &copy; Julio Aenlle. All Rights Reserved.
                </p>
            </div>
      </footer>

  </div><!-- this is the end of the container div -->

  <?php wp_footer(); ?> <!-- last thing you put before the body end tag -->

  </body>
</html>
