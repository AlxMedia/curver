<?php 
	$sidebar = curver_sidebar_primary();
	$layout = curver_layout_class();
	if ( $layout != 'col-1c'):
?>

	<div class="sidebar s1">
		
		<div class="sidebar-content">
			
			<?php if ( get_theme_mod( 'post-nav', 's1' ) == 's1') { get_template_part('inc/post-nav'); } ?>
			
			<?php if( is_page_template('page-templates/child-menu.php') ): ?>
			<ul class="child-menu group">
				<?php wp_list_pages('title_li=&sort_column=menu_order&depth=3'); ?>
			</ul>
			<?php endif; ?>
			
			<?php dynamic_sidebar($sidebar); ?>
			
		</div><!--/.sidebar-content-->
		
	</div><!--/.sidebar-->
	
<?php endif; ?>