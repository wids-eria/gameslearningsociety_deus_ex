<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>
	
	<!-- Typekit -->
	<script type="text/javascript" src="//use.typekit.net/mpl0sio.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	
</head>

<body <?php body_class(); ?>>
	
	

<div class="navigation_wrap large_navigation">
    
    <div class="navigation_container">
        
        <a href="index.php" class="navigation_logo_link_box"></a>
        
        <ul class="navigation">
            <a href="http://www.gameslearningsociety.org/about.php"> <li class="box floatleft about_page_link">About</li> </a>
            <a href="http://www.gameslearningsociety.org/games.php"> <li class="box floatleft game_page_link">Games</li> </a>
            <a href="http://www.gameslearningsociety.org/research.php"> <li class="box floatleft research_page_link">Research</li> </a>
            <a href="http://www.gameslearningsociety.org/people.php"> <li class="box floatleft people_page_link">People</li> </a>
            <a href="http://www.gameslearningsociety.org/courses.php"> <li class="box floatleft courses_page_link">Courses</li> </a>
            <a href="http://glsconference.org/" target="_blank"> <li class="box floatleft">Conference</li> </a>
            <!--<a href=""> <li class="box floatleft">Blog</li> </a>-->
            <a href="http://www.gameslearningsociety.org/contact.php"> <li class="box floatleft contact_page_link">Contact</li> </a>
            <a href="http://www.gameslearningsociety.org/jobs.php"> <li class="box floatleft jobs_page_link">Jobs</li> </a>
			<a href="http://www.gameslearningsociety.org/blog/"> <li class="box floatleft jobs_page_link">Blog</li> </a>
            
            <!-- Social Media Nav Links -->
            <a href="https://secure.flickr.com/photos/gls-conference" target="_blank">
                <li class="box floatright">
                    <img src="wp-content/themes/jsrblank/images/navigation_flickr.png"/>
                </li>
            </a>
            
            <a href="https://twitter.com/glscenter" target="_blank">
                <li class="box floatright">
                    <img src="wp-content/themes/jsrblank/images/navigation_twitter.png"/>
                </li>
            </a>

            <a href="https://www.facebook.com/glsconference" target="_blank">
                <li class="box floatright">
                    <img src="wp-content/themes/jsrblank/images/navigation_facebook.png"/>
                </li>
            </a>
        </ul>
        
    </div>

</div>  <!-- end nav wrap -->


<div class="body_content_container">
    
    <div class="body_content">
    





