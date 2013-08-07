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
    
     <!-- Full Width Slider-->
    <meta charset="utf-8">
    <meta name="HandheldFriendly" content="True">

    <link rel="stylesheet" href="fwslider2/css/fwslider.css" media="all">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>


    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
    <script src="fwslider2/js/css3-mediaqueries.js"></script>
    <script src="fwslider2/js/fwslider.js"></script>
    <script type="text/javascript">
        $(window).load(function(){
            new fwslider().init({
                duration: "1000", /* Fade Speed (miliseconds) */
                pause:    "6000"  /* Autoslide pause between slides (miliseconds)*/
            });
        });
    </script>
    
</head>

<body id="about_page">
    
    
    
<?php require "navigation.php";?>

<div id="fwslider">
        <div class="slider_container">
            
            <div class="slide"> 
                <img src="images/banner_images/about_banners/about_banner_01.png">
            </div>

            <div class="slide"> 
                <img src="images/banner_images/about_banners/about_banner_02.png">
            </div>
            
        </div>
        
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
</div>


<div class="body_content_container">
    
    <div class="about_container">
    
        <div class="about_item_container floatleft">
            
            <div class="about_game_collage floatleft"></div>
            
            <div class="about_paragraph_container_right_first floatright">
                
                <div class="about_header">
                    <p>Innovative Video Games</p>
                </div>
                
                <div class="about_paragraph">
                    <p>
                       GLS has produced over a dozen games designed around a range of content models.
                       Our games promote engaging ways of learning about biological systems, civic activism,
                       pro-social behavior, programming, and many other STEM domains.

                    </p>
                </div>
            </div>
            
        </div>
    
    </div>
    
    
    <div class="about_container">
    
        <div class="about_item_container floatleft">
            
            <div class="hpgrid_cutting_edge_research floatright"></div>
            
            <div class="about_paragraph_container_left_research floatleft">
                
                <div class="about_header">
                    <p>Cutting Edge Research</p>
                </div>
                
                <div class="about_paragraph">
                    <p>
                        By working in house with game artists, designers, programmers, and
                        researchers, GLS ties together innovative game mechanics, data analysis,
                        and assessment methods in a way that is unique in the field. GLS also
                        leverages its unique position in the Wisconsin Institute for Discovery to
                        develop new methods of assessing learning through game play.
                    </p>
                    
                </div>
            </div>
            
        </div>
    
    </div>
    
    
    <div class="about_container">
    
        <div class="about_item_container floatleft">
            
            <div class="hpgrid_industry_leaders floatleft"></div>
            
            <div class="about_paragraph_container_right floatright">
                
                <div class="about_header">
                    <p>Industry Leaders</p>
                </div>
                
                <div class="about_paragraph">
                    <p>
                        Research at GLS is supported by leaderships and partners from the
                        industry, such as game designer Doug Church and neuroscientist Richard
                        Davidson, as well as groups like Microsoft Research.
                    </p>
                </div>
            </div>
            
        </div>
    
    </div>
    
    
    <div class="about_container">
    
        <div class="about_item_container floatleft">
            
            <div class="hpgrid_unique_culture floatright"></div>
            
            <div class="about_paragraph_container_left floatleft">
                
                <div class="about_header">
                    <p>Unique Culture</p>
                </div>
                
                <div class="about_paragraph">
                    <p>
                        Staff at the GLS Center maintain a healthy balance between work and play, hosting 
                        cooperative and collaborative gameplay sessions in between projects.
                    </p>
                </div>
            </div>
            
        </div>
    
    </div>
    
    
    <div class="about_container">
    
        <div class="about_item_container floatleft">
            
            <div class="hpgrid_gls_conference floatleft"></div>
            
            <div class="about_paragraph_container_right floatright">
                
                <div class="about_header">
                    <p class="floatleft">GLS Conference</p>
                    <a href="http://www.glsconference.org" target="_blank"><div class="arrow floatright"></div></a>
                </div>
                
                <div class="about_paragraph">
                    <p>
                        The GLS Conference, held annually in Madison, provides a forum for games
                        researchers, game designers, and educators from around the world to share
                        results from research and game design efforts. 

                    </p>
                </div>
            </div>
            
        </div>
    
    </div>
    
</div><!-- end body content container -->

<?php require "footer.php";?>
 
</body>



</html>
