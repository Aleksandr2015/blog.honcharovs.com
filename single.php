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
                <div class="col-xs-4">
                    <aside>
                        <section>
                            <div class="right-menu">
                                <h2 class="title">Рубрики</h2>
                                <ul>
                                    <li><a href="">WordPress</a></li>
                                </ul>
                            </div>
                        </section>                        
                    </aside>                    
                </div>
            </div>
            
        </section><!-- .blog-main / end -->
        
        <?php get_footer(); ?>
