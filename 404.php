<?php
//Template Name: 404 Page (Page Not Found)

get_header(); ?>

    <div class="row">
        <div class="nine columns" class="404">
            <h1>404</h1>
            <img class="sadpanda" src="http://julioaenlle.net/jaenllewordpress/wp-content/uploads/2016/06/scale.jpg" alt="sad panda" />
            <p>The page you're looking does't exist. Please use your back button, the menu, or the search feature to navigate away from this page.</p>
        </div>
    </div>

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

<?php get_footer(); ?>
