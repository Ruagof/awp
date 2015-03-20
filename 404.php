                    <?php get_header(); ?>


                        <div id="main">
                            <?php get_sidebar('left'); ?>

                               <div id="content" class="404">

                                    <h2>404: page not found!</h2>        
                                   <img src="<?php bloginfo('template_directory'); ?>/images/relay-baton.png" alt="dropped relay baton" />
                                    <p>oops. Maybe you want to go to the <a href="<?php bloginfo('home');?>"> homepage</a></p>
                        </div>

                    <div id="delimiter"></div>

                <?php get_footer(); ?>
