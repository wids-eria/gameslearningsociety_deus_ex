<?php get_header(); ?>

<div class="header_image_wrap">
	<img src="<?php header_image(); ?>" width="<?php echo 960; ?>" height="<?php echo 250; ?>" alt="" />
</div>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				
				<h2><?php the_title(); ?></h2>
				
				<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
	
				<div class="entry">
					
					<?php the_content(); ?>
	
					<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
					
					<?php the_tags( 'Tags: ', ', ', ''); ?>
	
				</div>
				
				<p class="edit_post_link"><?php edit_post_link('Edit this entry',''); ?></p>
				
			</div>
	
		<?php endwhile; endif; ?>

<?php get_footer(); ?>

