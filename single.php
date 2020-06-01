<?php get_header(); ?>

<div class="container">
    <?php get_sidebar(); ?>

    <div class="content main-content">

    
    <div class="post-content">
        <?php
            while ( have_posts() ) : the_post();
                get_template_part( 'content', 'single' );
            endwhile;
        ?>
    </div>


    </div><!--  End content -->

</div> <!-- End container -->
    
</body>
</html>