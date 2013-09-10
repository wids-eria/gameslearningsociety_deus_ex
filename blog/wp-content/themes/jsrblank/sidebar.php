<div id="sidebar">

    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
    
        <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->

    	<?php get_search_form(); ?> <!-- Search Form-->
    
    	<?php wp_list_pages('title_li=<h2>Pages</h2>' ); ?> <!-- Lists all pages-->
    
    	<h2>Archives</h2>
    	<ul>
    		<?php wp_get_archives('type=monthly'); ?> <!-- Lists Archives-->
    	</ul>
        
        <h2>Categories</h2>
        <ul>
    	   <?php wp_list_categories('show_count=1&title_li='); ?> <!-- Lists Post Categories-->
        </ul>
        
    	<!--<?php wp_list_bookmarks(); ?>--> <!-- Displays Wordpress Links -->
    
    	<h2>Meta</h2> <!-- Displays Admin Tools -->
    	<ul>
    		<?php wp_register(); ?>
    		<li><?php wp_loginout(); ?></li>
    		<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
    		<?php wp_meta(); ?>
    	</ul>
    	
    	<h2>Subscribe</h2> <!-- Displays RSS Feed subscription links for posts and comments-->
    	<ul>
    		<li><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a></li>
    		<li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a></li>
    	</ul>
	
	<?php endif; ?>

</div>