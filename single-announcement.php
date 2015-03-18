<?php
/*
    Template name: Single Announcement
    (WordPress would know this anyway because I have used the correct naming convention)
*/
?>
    
<?php get_header(); ?>


<div id="main">
<!-- closes in footer -->    
	    
        <div class="largecontent">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>  <!-- The wordpress loop --!>
           <h1><?php the_title(); ?></h1>
                   <p class="dateofpost"> Posted on <?php the_time('F jS, Y') ?></h3>
                   <p><?php the_content(__('(more...)')); ?></p>
                   <p><?php the_tags( 'Tags: ', ', ', '<br />' ); ?></p>
                   <hr>
                   <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts found.'); ?></p>
            <?php endif; ?>

        </div>
        <!-- end div largecontent -->

        <?php get_sidebar('right'); ?>

    <div id="delimiter"></div>
            
    <?php get_footer(); ?>


