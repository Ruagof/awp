<!DOCTYPE html>

        <head>
            <title><?php bloginfo('name');?></title>
            <?php wp_head(); ?>  
            <link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>        </head>

    <body>
    <!-- ends in footer -->   

    <div id="wrapper"/>
    <!-- wraps entire body, ending in footer -->
        
        <div id="header">
            <h1 class="header">Cushinstown AC</h1> 
        </div>
        
    
        
        <?php

            wp_nav_menu('$defaults');
                 
        ?>   
        
        <div id="searchform">
        <?php get_search_form(); ?>
        </div>
