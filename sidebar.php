                <div class="col-xs-4">                    
                    <aside>
                        <section>
                            <div class="right-menu">
                                <h2 class="title">Рубрики</h2>
                                <?php $second = array(
                                        'theme_location'  => 'sidebar-rubrics',
                                        'menu'            => 'sidebar-rubrics',
                                        'container'       => 'nav',
                                        'container_class' => 'navbar-second',
                                        'container_id'    => 'second_navbar',
                                        'menu_class'      => 'menu',
                                        'menu_id'         => '',
                                        'echo'            => true,
                                        'fallback_cb'     => 'wp_page_menu',
                                        'before'          => '',
                                        'after'           => '',
                                        'link_before'     => '',
                                        'link_after'      => '',
                                        'items_wrap'      => '<ul class="aside-menu">%3$s</ul>',
                                        'depth'           => 0,
                                        'walker'          => ''
                                    );
                                    wp_nav_menu( $second );
                                ?>   
                                <?php
                                //    wp_nav_menu( array(
                                //        'menu'              => 'sidebar-rubrics',
                                //        'theme_location'    => 'sidebar-rubrics',
                                //        'depth'             => 2,
                                //        'container'         => 'div',
                                //        'container_class'   => 'collapse navbar-collapse -header-with-menu-block',
                                //        'container_id'      => 'bhc-navbar-collapse',
                                //        'menu_class'        => 'nav navbar-nav -primary-navigation',
                                //        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                //        'walker'            => new wp_bootstrap_navwalker())
                                //    );
                                ?>                             
                            </div>
                        </section>                        
                    </aside>                    
                </div>