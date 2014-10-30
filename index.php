<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset');?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php bloginfo('description');?>">    
        <title><?php the_title(); ?> | <?php bloginfo('name');?></title>
        <link rel="shortcut icon" href="">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">

        <!--[if IE]>
            <script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php if ( is_user_logged_in() ) {echo '<style>.navbar.navbar-inverse.navbar-fixed-top {margin-top:32px;}</style>';} ?>
        <?php wp_head(); ?>  
    </head>

    <body>
            
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
                        <div class="col-xs-4">
                            <article>
                                <img class="" src="http://placehold.it/100x100" alt="">
                                <div class="-bhc-post-title">
                                    <h2>Заголовок поста</h2>
                                </div>
                            </article>                            
                        </div>
                    </div>
                </div>
                <!-- Aside content -->
                <div class="col-xs-4">
                    Sidebar content here
                </div>
            </div>
            
        </section><!-- .blog-main / end -->
        
        <footer class="blog-footer">
            
        </footer><!-- .blog-footer / end -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/bootstrap.js"></script>        
        <?php wp_footer(); ?>
    </body>
</html>
