<?php get_header(); ?>

<div class="container">
    <?php get_sidebar(); ?>

    <div class="content">
        <h2 class="latest-posts">Latest posts</h2>
        <hr class="main-separator" />

        <?php while ( have_posts() ) : the_post(); ?>

        <article>
            <h3 class="post-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p class="metadata"><span class="icon-calendar"></span> <?php the_date();?> -  <span class="icon-user"> </span>  <?php the_author();?></p>
            <?php the_content(); ?>
        </article>
        
        <hr class ="separator" />
        <?php endwhile; ?>
        
        <?php get_footer(); ?>


    </div><!--  End content -->

</div> <!-- End container -->
    
</body>
</html>