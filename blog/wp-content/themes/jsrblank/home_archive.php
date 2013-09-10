<?php
/*
 Template Name: Home Archive Page
*/
?>

<?php get_header(); ?> 

<div id="content">  
  
<?php global $more;  
$more = 0; ?>  
  
<?php  
  
/* ID of your 'Breaking News' Category */  
$breaking_cat = "9";   
  
/* How many posts from above category to display? Default = 3 */  
$breaking_num = "1";   
  
/* Number of recent posts to display under the Breaking News */  
$latest_num = "10";  
   
/* IDs of any cats you dont want to include in Recent posts. 
Start each ID with a 'minus' symbol Seperate by a comma. 
EG: $latest_ignore = "7,-6,-8,-1"; 
Posts from the 'Breaking' category are automatically excluded. */  
$latest_ignore = "-1";

$recent_num = "2";
$recent_ignore= "-1";
?>

<?php try { ?>
  
    <!-- Show x Posts from Breaking News -->  
    <?php query_posts('showposts='.$breaking_num.'&cat='.$breaking_cat.'');   
      while (have_posts()) : the_post();  
    ?>
    
    
<h2 class="featured_header floatleft">Featured story</h2>
  
    <div class="breaking">
	<?php
		$ids = array();
		array_push($ids,$post->ID)
	?>
	<img src="<?php echo get_post_meta($post->ID, 'thumbnail',true) ?>" alt="Post Image" class="postimg" />

	<div class="main_post_content">
	
		<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
		
		<div class="main_blog_excerpt"><?php the_excerpt('Continue...'); ?></div>
		
		<div class="postmeta"></div><!--/postmeta-->
		
	</div>
	
    </div><!--/breaking-->

    <?php endwhile; ?>
    
    
<!-- Show x Recent Posts --> 
<div class="fh_container">
	<h3 class="featured_header_sub">Most Recent</h3>
</div>
 
<?php
	$query['showposts'] = $recent_num;
	$query['cat'] = $breaking_cat.','.$latest_ignore;
	$query['post__not_in'] = $ids;
	
	query_posts($query);
?>  
<?php while (have_posts()) : the_post(); ?>
	
	<div class="recent_large">
	
	<img src="<?php echo get_post_meta($post->ID, 'thumbnail',true) ?>" alt="Post Image" class="postimg" />
	  
	    <h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>  
	    <p class="datetime"><?php the_time('l, F j, Y'); ?></p>   
	  
	</div>
	
	<?php array_push($ids,$post->ID); ?>
	
<?php endwhile; ?>

 
 
<!-- Show x Latest Posts --> 
<div class="fh_container"> 
	<h4 class="featured_header_sub floatleft">Backlog</h4>
</div>

<?php	$query = array();
	$query['showposts'] = $latest_num;
	$query['cat'] = $breaking_cat.','.$latest_ignore;
	$query['post__not_in'] = $ids;
	
	query_posts($query);
?>
	

<?php while (have_posts()) : the_post(); ?>
	
	<div class="recent">  
	  
	    <h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>  
	    <p class="datetime"><?php the_time('l, F j, Y'); ?></p>   
	  
	</div>

<?php get_sidebar(); ?> 
<?php endwhile; ?>


</div><!--/content-->


<?php get_footer(); ?> 

<?php } catch (Exception $ex) { echo $ex; } ?>
