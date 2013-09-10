<?php
/*
 Template Name: Art Page
*/
?>

<!-- This page template has one large container that takes up the entire width
of the #page_wrap, followed by three small containers underneath -->

<?php get_header(); ?>

<div class="content_container">

<div class="page_wrap">

<div class="static_container floatleft">
	<br />
	<h2 class="center_text"> Games and Art Exhibit CFP</h2>
	<h3 class="center_text">Games and Art Exhibition CFP - Madison, WI - June 12-14, 2013</h3>
	
	<br />

	<?php query_posts('category_name=art');?>
	
	<?php if (have_posts()) : ?>

			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>
				

			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h2>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h2>Archive for <?php the_time('F jS, Y'); ?></h2>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h2>Archive for <?php the_time('F, Y'); ?></h2>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>

			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h2 class="pagetitle">Author Archive</h2>

			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h2 class="pagetitle">Blog Archives</h2>
			
			<?php } ?>

			

			<?php while (have_posts()) : the_post(); ?>
			
				<div <?php post_class() ?>>

					<div class="basic_container_art floatleft">
						<?php the_content(); ?>
						<br />
					</div>

				</div>

			<?php endwhile; ?>

			
			
		<?php else : ?>
	
			<h2>Nothing found</h2>
	
		<?php endif; ?>
		
		
		<!-- If you want to display just the excerpt for each post,
		comment out or delete the php above this line-->
		
		<?php /* the_excerpt() */ ;?>

	</div>

</div> <!-- end page wrap -->
	
</div> <!-- end content container -->

<?php get_footer(); ?>
