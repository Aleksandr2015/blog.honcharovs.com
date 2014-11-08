<?php get_header(); ?>    
            
        <header class="blog-header">                        
            <!-- Navigation primary / Start -->
            <?php include(TEMPLATEPATH . '/navigation-primary.php'); ?>
            <!-- Navigation primary / End -->            
        </header><!-- .blog-header / end -->
    
        <section class="[ container ] -blog-content">
            <div class="row">
                <!-- Main content -->
                <div class="col-xs-8">
                    <div class="content">
                        <h2 class=""><?php the_title(); ?></h2>
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content(); endwhile; endif; ?>
                    </div>                                       
                </div>
                <!-- Aside content -->
                <?php get_sidebar();?>
            </div>
            
        </section><!-- .blog-main / end -->
        
        <?php get_footer(); ?>
