<?php get_header(); ?>

<div class="container">
    <?php get_sidebar(); ?>

    <div class="content">
        <h2 class="latest-posts">Latest posts</h2>
        <hr />

        <?php while ( have_posts() ) : the_post(); ?>

        <article>
            <h3 class="post-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p class="metadata"><span ></span> 23 Sep 2019 -  <span class="icon-user"> </span>  John</p>
            <?php the_content(); ?>
        </article>
        
        <hr class ="separator" />
        <?php endwhile; ?>


    </div><!--  End content -->

</div> <!-- End container -->
    
</body>
</html>