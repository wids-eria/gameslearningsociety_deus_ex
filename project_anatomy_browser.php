<!DOCTYPE HTML >
<html lang="en">
<head>
    
    <title>Games Learning Society</title>
    <meta name="description"
          content="">
    
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    
    <!-- Typekit -->
    <script type="text/javascript" src="//use.typekit.net/mpl0sio.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    
    <!-- FancyBox -->
        <!-- Add jQuery library -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
        
        <!-- Add mousewheel plugin (this is optional) -->
        <script type="text/javascript" src="/GLS/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
        
        <!-- Add fancyBox -->
        <link rel="stylesheet" href="/GLS/fancybox/source/jquery.fancybox.css?v=2.1.3" type="text/css" media="screen" />
        <script type="text/javascript" src="/GLS/fancybox/source/jquery.fancybox.pack.js?v=2.1.3"></script>
        
        <!-- Optionally add helpers - button, thumbnail and/or media -->
        <link rel="stylesheet" href="/GLS/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
        <script type="text/javascript" src="/GLS/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
        <script type="text/javascript" src="/GLS/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.5"></script>
        
        <link rel="stylesheet" href="/GLS/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
        <script type="text/javascript" src="/GLS/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
    
    <!-- unity stff -->
        <script type="text/javascript">
		<!--
		var unityObjectUrl = "http://webplayer.unity3d.com/download_webplayer-3.x/3.0/uo/UnityObject2.js";
		if (document.location.protocol == 'https:')
			unityObjectUrl = unityObjectUrl.replace("http://", "https://ssl-");
		document.write('<script type="text\/javascript" src="' + unityObjectUrl + '"><\/script>');
		-->
	</script>
        <script type="text/javascript">
		var params = {
			backgroundcolor: "000000",
			bordercolor: "000000",
			textcolor: "FFFFFF",
			logoimage: "images/loading_screens/anatomy_browser_loading_screen.png",
		};
		var u = new UnityObject2({ params: params });
		u.observeProgress(function (progress) {
			var $missingScreen = jQuery(progress.targetEl).find(".missing");
			switch(progress.pluginStatus) {
				case "unsupported":
					showUnsupported();
				break;
				case "broken":
					alert("You will need to restart your browser after installation.");
				break;
				case "missing":
					$missingScreen.find("a").click(function (e) {
						e.stopPropagation();
						e.preventDefault();
						u.installPlugin();
						return false;
					});
					$missingScreen.show();
				break;
				case "installed":
					$missingScreen.remove();
				break;
				case "first":
				break;
			}
		});
		jQuery(function(){
			u.initPlugin(jQuery("#unityPlayer")[0], "builds/anatomy_browser/05-01-3WebBuild.unity3d");
		});
        </script>
		<style type="text/css">
		<!--

		div.missing {
			margin: auto;
			position: relative;
			top: 50%;
			width: 193px;
		}
		div.missing a {
			height: 63px;
			position: relative;
			top: -31px;
		}
		div.missing img {
			border-width: 0px;
		}
		div#unityPlayer {
			cursor: default;
			height: 768px;
			width: 1024px;
		}
		-->
		</style>
    
</head>

<body id="game_page">
    
    
    
<?php require "navigation.php";?>


<div class="banner_project_anatomy_browser">
    <div class="banner_text_container">

    </div>
</div>

<div class="body_content_container">
    
    <div class="body_content">
        
        <div class="unity_embed_container_ipad">
            <div id="unityPlayer">
            <div class="missing">
                    <a href="http://unity3d.com/webplayer/" title="Unity Web Player. Install now!">
                        <img alt="Unity Web Player. Install now!" src="http://webplayer.unity3d.com/installation/getunity.png" width="193" height="63" />
                    </a>
            </div>
        </div>   
        </div>
        
        <!-- Anatomy Browser -->
        <div class="project_container">
        
            <div class="project_image">
                <div class="project_anatomy_browser"></div>
            </div>
            
            <div class="project_description">
                
                <div class="project_description_header">
                    <p>Anatomy Browser</p>
                </div>
                
                <div class="project_description_paragraph">
                    <p>
                        Anatomy Browser is a human anatomy catalog which allows you to peel
                        away layers of the body and identify muscles, organs, and systems of
                        the body in full 3D. With the ability to adjust the transparency of
                        each layer, you'll be able to easily identify the relationship of
                        organs to each other as well as their names!
                    </p>
                </div>
                
            </div>
            
        </div>
        
    </div>
    
</div>


<?php require "footer.php";?>
 
</body>



</html>
