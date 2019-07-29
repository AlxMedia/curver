<?php $format = get_post_format(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('group post-list'); ?>>

	<div class="post-inner post-hover <?php if ( !has_post_thumbnail() ) { ?>no-thumbnail<?php } ?>">
		
		<?php if ( has_post_thumbnail() ): ?>
			<div class="post-thumbnail">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('curver-list'); ?>
					<?php if ( has_post_format('video') && !is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-play"></i></span>'; ?>
					<?php if ( has_post_format('audio') && !is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-volume-up"></i></span>'; ?>
					<?php if ( is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-star"></i></span>'; ?>
				</a>
			</div><!--/.post-thumbnail-->
		<?php else: ?>
		
		<?php endif; ?>
		
		<div class="post-content">

			<div class="post-category">
				<?php the_category(' / '); ?>
			</div><!--/.post-category-->
			
			<h2 class="post-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h2><!--/.post-title-->

			<?php if (get_theme_mod('excerpt-length','26') != '0'): ?>
			<div class="entry excerpt">				
				<?php the_excerpt(); ?>
			</div><!--/.entry-->
			<?php endif; ?>

		</div><!--/.post-content-->
		
	</div><!--/.post-inner-->
	
	<?php if ( get_theme_mod( 'format-icon', 'on' ) =='on' ): ?>
		<div class="format-circle"><a href="<?php echo get_post_format_link($format); ?>"><i class="fa"></i></a></div>
	<?php endif; ?>
	
	<?php if ( comments_open() && ( get_theme_mod( 'comment-count', 'on' ) =='on' ) ): ?>
		<a class="post-comments" href="<?php comments_link(); ?>"><i class="fas fa-comment"></i><span><?php comments_number( '0', '1', '%' ); ?></span></a>
	<?php endif; ?>
	
	<div class="post-date">
		<?php the_time( get_option('date_format') ); ?>
	</div><!--/.post-date-->
	
</article><!--/.post-->	