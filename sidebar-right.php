<div id="sidebar-right">
    
    <h2 class="categories-heading"><?php _e('Categories'); ?></h2>
    <ul class="categories">
        <?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
    </ul>
    <h2 class="archive-heading"><?php _e('Archives'); ?></h2>
    
    <ul>
        <?php wp_get_archives('type=monthly'); ?>
    </ul>

</div>
