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
                    <div class="row">
                        <?php query_posts('category_id=5&showposts=9'); ?>
                        <?php while (have_posts()) : the_post(); ?>
                        <div class="col-xs-4">
                            <article class="-bhc-post">
                                <div class="-bhc-post-img-wrap">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php 
                                            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                                the_post_thumbnail('thumbnail', array('class' => '-bhc-post-img img-responsive'),'full');
                                            } 
                                            //else {
                                            //    echo '<img class="img-responsive" src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/capoeira_logo.jpg" />';										
                                            //}
                                        ?>
                                    </a>
                                </div>
                                <div class="-bhc-post-title">
                                    <h2><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), 3 ); ?></a></h2>
                                    <span class="-bhc-post-timedate">Опубликовано: <?php echo get_the_date('d.m.Y'); ?></span>
                                </div>
                                <div class="-bhc-post-excerpt">
                                    <p><?php do_excerpt(get_the_excerpt(), 15); ?></p>
                                </div>
                                <div class="-bhc-post-readmore">
                                    <a class="-bhc-readmore" href="<?php the_permalink(); ?>">
                                        Читать полностью →
                                    </a>
                                </div>
                            </article>                            
                        </div>
                        <?php endwhile; ?>                        
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
