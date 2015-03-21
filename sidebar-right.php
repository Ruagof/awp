<div id="sidebar-right">
    
    <h2 ><?php _e('Categories'); ?></h2>

    <?php
$args = array(
  'orderby' => 'name',
  'parent' => 0
  );
$categories = get_categories( $args );
foreach ( $categories as $category ) {
	echo '<a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a><br/>';
}
?>
    
    

</div>
