                    <?php get_header(); ?>


                        <div id="main">
                            <?php get_sidebar('left'); ?>

                               <div id="content">

                                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>  <!-- The wordpress loop --!>
                                       <h1><?php the_title(); ?></h1>
                                       <p class="dateofpost">Posted on <?php the_time('F jS, Y') ?> by <?php the_author(); ?> <p>
                                            <p>Based on index.php</p>
                                       <p><?php the_content(__('(more...)')); ?></p>
                                       <p><?php the_tags( 'Related articles: ', ', ', '<br />' ); ?></p>
                                          <?php get_comments( $args ); ?>
                                    <hr/> 
                                    <?php endwhile; else: ?>

                                        <p><?php _e('Sorry, no posts found 404.'); ?></p>

                                    <?php endif; ?>
                                  
                                </div>

                            <?php get_sidebar('right'); ?>

                        </div>

                    <div id="delimiter"></div>

                <?php get_footer(); ?>
