<div class="navigation">
        <a href="<?php echo get_bloginfo('wpurl'); ?>" class="home-link"><img class="profile" src="<?php echo get_template_directory_uri(); ?>/images/profile.png" alt=""></a>
        <h1 class="title"><a href="<?php echo get_bloginfo('wpurl'); ?>">John Fajardo</a></h1>
        <p class="tagline">Software engineer</p>
        <nav>
            <!-- Walker -->
            <?php
                wp_nav_menu(array(
                    'container' => false,
                    'container_class' => false,
                    'container_id' => false,
                    'menu_class' => false,
                    'menu_id' => false,
                    'before' => '',
                    'after' => '',
                    'link_before' => '',
                    'link_after' => '',
                    'items_wrap' => '<ul class="nav-list">%3$s</ul>',
                    'walker'  => new Walker_Sidebar_Menu()
                ));
            ?>
            <!-- Walker -->
        </nav>
    </div><!--  End navigation -->

    
                