<?php get_header(); ?>

<<<<<<< HEAD
<div class="header_image_wrap">
	<img src="<?php header_image(); ?>" width="<?php echo 960; ?>" height="<?php echo 250; ?>" alt="" />
</div>
=======
<div class="content_container">

<div class="page_wrap">
>>>>>>> Add blog files

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				
<<<<<<< HEAD
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
=======
				<br />
				
				<h2><?php the_title(); ?></h2>

					<div class="basic_container_art floatleft">
						<?php the_content(); ?>
						<br />
						<?php comments_template(); ?> 
					</div>
				
			</div>
	
		<?php endwhile; endif; ?>
	
	</div>
	
</div> <!-- end page wrap -->
	
</div> <!-- end content container -->
>>>>>>> Add blog files

<?php get_footer(); ?>

