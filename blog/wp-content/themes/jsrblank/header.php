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
	
<<<<<<< HEAD
	<!-- Typekit -->
	<script type="text/javascript" src="//use.typekit.net/mpl0sio.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	
</head>

<body <?php body_class(); ?>>
	
	

<div class="navigation_wrap large_navigation">
    
    <div class="navigation_container">
        
        <a href="http://www.gameslearningsociety.org" class="navigation_logo_link_box"></a>
        
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
    
=======
	
	<!-- favicon -->
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />

	<!-- Typekit -->
	<script type="text/javascript" src="//use.typekit.net/hwr0tsw.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	
	
	<!-- Full Width Slider-->
	<meta charset="utf-8">
	<meta name="HandheldFriendly" content="True">
    
	<link rel="stylesheet" href="wp-content/themes/jsrblank/fwslider2/css/fwslider.css" media="all">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
	<script src="wp-content/themes/jsrblank/fwslider2/js/css3-mediaqueries.js"></script>
	<script src="wp-content/themes/jsrblank/fwslider2/js/fwslider.js"></script>
	<script type="text/javascript">
	    $(window).load(function(){
		new fwslider().init({
		    duration: "1000", /* Fade Speed (miliseconds) */
		    pause:    "6000"  /* Autoslide pause between slides (miliseconds)*/
		});
	    });
	</script>
	
</head>

<body <?php body_class(); ?>>


<div class="navigation_container">
    
    <ul class="navigation">
        <a href="http://localhost/glsc_wp/"> <li class="nav_logo floatleft"></li> </a>
        <a href="http://localhost/glsc_wp/?p=180"> <li class="nav_button floatleft">Register</li> </a>
        <a href="http://localhost/glsc_wp/?page_id=91"> <li class="nav_program_page nav_button floatleft">Program</li> </a>
        <a href="http://localhost/glsc_wp/?page_id=94"> <li class="nav_speakers_page nav_button floatleft">Speakers</li> </a>
        <a href="http://localhost/glsc_wp/?page_id=89"> <li class="nav_location_page nav_button floatleft">Location</li> </a>
        <a href="http://localhost/glsc_wp/?page_id=7"> <li class="nav_organizers_page nav_button floatleft">Organizers</li> </a>
        <a href="http://localhost/glsc_wp/?page_id=111"> <li class="nav_art_page nav_button floatleft">Art</li> </a>
        <a href="http://www.gameslearningsociety.org/"> <li class="nav_button last_nav floatleft">GLS</li> </a>
    </ul>
    
</div>
>>>>>>> Add blog files





