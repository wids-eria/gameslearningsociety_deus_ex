<?php
/*
 Template Name: Large Header One Medium One Small Under
*/
?>

<!-- This page template has one large container that takes up the entire width
of the #page_wrap, followed by three small containers underneath -->

<?php get_header(); ?>

	<div class="content_container_980">
		<p>
		Large Main Container<br />
		This is where you place your content for the large container.
		</p>
	</div>
	
	
	<div class="medium_container_left">
		<p>
		Medium Container Left<br />
		This is where you place your content for the medium container on the left side.
		</p>
	</div>
	
		
	<div class="small_container_right">
		<p>
		Small Container Right<br />
		This is where you place your content for the small container on the right side.
		</p>		
	</div>

<?php get_footer(); ?>
