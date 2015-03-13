<!doctype html>

        <head>

            <title><?php bloginfo('name');?></title>
            <?php wp_head(); ?>
        </head>
    <body>
    
    
        
<!-- comment here about what is going on -->

    <div id="wrapper"/>
    <!-- wraps entire body, ending in footer -->
        
        <div id="header">
            
                <h1>WordPress Theme</h1>


                <h2><?php if (is_category('sport')) 
                        { ?><img id="icon" src="<?php bloginfo('template_directory');?>/images/football.png" alt="Category Icon"/><?php } ?></h2>
        </div>