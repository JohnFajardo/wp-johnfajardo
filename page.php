<?php get_header(); ?>

<div class="container">
    <?php get_sidebar(); ?>

    <div class="content">
        
        <?php while ( have_posts() ) : the_post(); ?>

        <article>
            <?php the_content(); ?>
        </article>
        
        <hr class ="separator" />
        <?php endwhile; ?>
        
        <?php get_footer(); ?>


    </div><!--  End content -->

</div> <!-- End container -->
    
</body>
</html>