<!doctype html>

        <head>
            <title><?php bloginfo('name');?></title>
            <?php wp_head(); ?>  
        </head>

    <body>
    <!-- ends in footer -->   

    <div id="wrapper"/>
    <!-- wraps entire body, ending in footer -->
        
        <div id="header">
            
            <h1>Cushinstown AC</h1>
            <h2><?php if (is_category('sport')) 
                    { ?><img id="icon" src="<?php bloginfo('template_directory');?>/images/football.png" alt="Category Icon"/><?php } ?></h2>
        </div>
        
    
          
        <?php
             $defaults = array(
                'container' => false,
                'theme_location' => 'primary-menu',
                'menu_class' => 'no-bullet'
             );
            wp_nav_menu('$defaults');
                 
        ?>   
              
         
            
        