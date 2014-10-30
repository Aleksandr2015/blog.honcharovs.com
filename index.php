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
        <!-- Yandex.Metrika counter --><script type="text/javascript">(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter26866323 = new Ya.Metrika({id:26866323, webvisor:true, clickmap:true, trackLinks:true, accurateTrackBounce:true}); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="//mc.yandex.ru/watch/26866323" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->
        <!-- yandex-verification --><meta name='yandex-verification' content='551483b0e34cbea2' /><!-- yandex-verification / end-->
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
                            <article class="-bhc-post">
                                <div class="-bhc-post-img-wrap">
                                    <img class="-bhc-post-img img-responsive" src="http://placehold.it/220x150" alt="">                                    
                                </div>
                                <div class="-bhc-post-title">
                                    <h2><a href="">Заголовок поста</a></h2>
                                    <span class="-bhc-post-timedate">Опубликовано: 1 января 2014</span>
                                </div>
                                <div class="-bhc-post-excerpt">
                                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nibh libero, tempor eget nunc eget, dapibus lacinia augue. Praesent ut feugiat sapien. Mauris facilisis varius urna vel ullamcorper. Donec a ipsum magna. In scelerisque enim dolor, sit amet...</p>
                                </div>
                                <div class="-bhc-post-readmore">
                                    <a class="-bhc-readmore" href="">
                                        Читать полностью →
                                    </a>
                                </div>
                            </article>                            
                        </div>
                        <div class="col-xs-4">
                            <article class="-bhc-post">
                                <div class="-bhc-post-img-wrap">
                                    <img class="-bhc-post-img img-responsive" src="http://placehold.it/220x150" alt="">                                    
                                </div>
                                <div class="-bhc-post-title">
                                    <h2><a href="">Заголовок поста</a></h2>
                                    <span class="-bhc-post-timedate">Опубликовано: 1 января 2014</span>
                                </div>
                                <div class="-bhc-post-excerpt">
                                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nibh libero, tempor eget nunc eget, dapibus lacinia augue. Praesent ut feugiat sapien. Mauris facilisis varius urna vel ullamcorper. Donec a ipsum magna. In scelerisque enim dolor, sit amet...</p>
                                </div>
                                <div class="-bhc-post-readmore">
                                    <a class="-bhc-readmore" href="">
                                        Читать полностью →
                                    </a>
                                </div>
                            </article>                            
                        </div>
                        <div class="col-xs-4">
                            <article class="-bhc-post">
                                <div class="-bhc-post-img-wrap">
                                    <img class="-bhc-post-img img-responsive" src="http://placehold.it/220x150" alt="">                                    
                                </div>
                                <div class="-bhc-post-title">
                                    <h2><a href="">Заголовок поста</a></h2>
                                    <span class="-bhc-post-timedate">Опубликовано: 1 января 2014</span>
                                </div>
                                <div class="-bhc-post-excerpt">
                                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nibh libero, tempor eget nunc eget, dapibus lacinia augue. Praesent ut feugiat sapien. Mauris facilisis varius urna vel ullamcorper. Donec a ipsum magna. In scelerisque enim dolor, sit amet...</p>
                                </div>
                                <div class="-bhc-post-readmore">
                                    <a class="-bhc-readmore" href="">
                                        Читать полностью →
                                    </a>
                                </div>
                            </article>                            
                        </div>
                        <div class="col-xs-4">
                            <article class="-bhc-post">
                                <div class="-bhc-post-img-wrap">
                                    <img class="-bhc-post-img img-responsive" src="http://placehold.it/220x150" alt="">                                    
                                </div>
                                <div class="-bhc-post-title">
                                    <h2><a href="">Заголовок поста</a></h2>
                                    <span class="-bhc-post-timedate">Опубликовано: 1 января 2014</span>
                                </div>
                                <div class="-bhc-post-excerpt">
                                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nibh libero, tempor eget nunc eget, dapibus lacinia augue. Praesent ut feugiat sapien. Mauris facilisis varius urna vel ullamcorper. Donec a ipsum magna. In scelerisque enim dolor, sit amet...</p>
                                </div>
                                <div class="-bhc-post-readmore">
                                    <a class="-bhc-readmore" href="">
                                        Читать полностью →
                                    </a>
                                </div>
                            </article>                            
                        </div>
                        <div class="col-xs-4">
                            <article class="-bhc-post">
                                <div class="-bhc-post-img-wrap">
                                    <img class="-bhc-post-img img-responsive" src="http://placehold.it/220x150" alt="">                                    
                                </div>
                                <div class="-bhc-post-title">
                                    <h2><a href="">Заголовок поста</a></h2>
                                    <span class="-bhc-post-timedate">Опубликовано: 1 января 2014</span>
                                </div>
                                <div class="-bhc-post-excerpt">
                                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nibh libero, tempor eget nunc eget, dapibus lacinia augue. Praesent ut feugiat sapien. Mauris facilisis varius urna vel ullamcorper. Donec a ipsum magna. In scelerisque enim dolor, sit amet...</p>
                                </div>
                                <div class="-bhc-post-readmore">
                                    <a class="-bhc-readmore" href="">
                                        Читать полностью →
                                    </a>
                                </div>
                            </article>                            
                        </div>
                        <div class="col-xs-4">
                            <article class="-bhc-post">
                                <div class="-bhc-post-img-wrap">
                                    <img class="-bhc-post-img img-responsive" src="http://placehold.it/220x150" alt="">                                    
                                </div>
                                <div class="-bhc-post-title">
                                    <h2><a href="">Заголовок поста</a></h2>
                                    <span class="-bhc-post-timedate">Опубликовано: 1 января 2014</span>
                                </div>
                                <div class="-bhc-post-excerpt">
                                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nibh libero, tempor eget nunc eget, dapibus lacinia augue. Praesent ut feugiat sapien. Mauris facilisis varius urna vel ullamcorper. Donec a ipsum magna. In scelerisque enim dolor, sit amet...</p>
                                </div>
                                <div class="-bhc-post-readmore">
                                    <a class="-bhc-readmore" href="">
                                        Читать полностью →
                                    </a>
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
