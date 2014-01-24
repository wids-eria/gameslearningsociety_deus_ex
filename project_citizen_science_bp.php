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

    
		
		 <!-- Run Flash Player -->
        <script language="JavasScript" type="text/javascript" src="cs_build/AC_RunActiveContent.js"></script>
        <script type="text/javascript" src="http://www.brainpop.com/js/swfobject.js"></script>
        <script src="http://www.brainpop.com/games/assets/js/cameraProxy.js" type="text/javascript"></script>
        <script type="text/javascript">
                       //Your values here:
                       var gameFile="cs_build/Main.swf";
                       var gameWidth="881";
                       var gameHeight="600";
                       //-----------------------------------
           var swfVersionStr = "10.2.0";
           var xiSwfUrlStr = "playerProductInstall.swf";
           var flashvars = {};
           var params = {};
                       params.wmode = "opaque";
           params.quality = "high";
           params.bgcolor = "#ffffff";
           params.allowscriptaccess = "always";
           params.allowfullscreen = "true";
           var attributes = {};
           attributes.id = "game";
           attributes.name = "game";
           attributes.align = "middle";
           swfobject.embedSWF(
               gameFile, "flashContent",gameWidth, gameHeight, 
               swfVersionStr, xiSwfUrlStr, 
               flashvars, params, attributes);
                       swfobject.createCSS("#flashContent", "display:block;text-align:left;");
                       
       </script> 
</head>

<body id="game_page">

            <OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
                codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"
                WIDTH="800"
                HEIGHT="600"
                MARGIN-LEFT="50"
                id="Main" ALIGN="">

                <PARAM NAME=movie
                VALUE="Main">
                <PARAM NAME=quality VALUE=high>
                <PARAM NAME=bgcolor VALUE=#000000>
                
                <EMBED src="cs_build/Main.swf"
                quality=high bgcolor=#000000
                WIDTH="881" HEIGHT="600"
                NAME="Main"
                ALIGN=""
                TYPE="application/x-shockwave-flash"
                PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer">
                        
                </EMBED>
        </OBJECT>

 
</body>



</html>
