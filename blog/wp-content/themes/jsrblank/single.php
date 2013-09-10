<?php get_header(); ?>

<div class="content_container">

<div class="page_wrap">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				
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

<?php get_footer(); ?>

