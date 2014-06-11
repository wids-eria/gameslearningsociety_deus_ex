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
        <script type="text/javascript" src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
        
        <!-- Add fancyBox -->
        <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.3" type="text/css" media="screen" />
        <script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.3"></script>
        
        <!-- Optionally add helpers - button, thumbnail and/or media -->
        <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
        <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
        <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.5"></script>
        
        <link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
        <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
    
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

<body id="game_page">
    
    
    
<?php require "navigation.php";?>


<div id="fwslider">
        <div class="slider_container">
            
            <div class="slide"> 
                <img src="images/banner_images/project_banner/project_banner_crystals_01.png">
            </div>

            <div class="slide"> 
                <img src="images/banner_images/project_banner/project_banner_progenitor_01.png">
            </div>
                    
            <div class="slide"> 
                <img src="images/banner_images/project_banner/project_banner_fairplay_01.png">
            </div>
            
            <div class="slide"> 
                <img src="images/banner_images/project_banner/project_banner_crystals_02.png">
            </div>

        </div>
        
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
</div>

<div class="body_content_container">
    
    <div class="body_content">
        
        
<!-- large game list -->
        <div class="large_game_list">
            
            <!-- Crystals of Kaydor -->
            <div class="project_container_first">
            
                <div class="project_image">
                    <div class="project_crystals"></div>
                </div>
                
                <div class="project_description">
                    
                    <div class="project_description_header">
                        <p>Crystals of Kaydor</p>
                    </div>
                    
                    <div class="project_description_paragraph">
                        <p>                        
                        In Crystals of Kaydor, you play the role of an advanced robot created to explore
                        and learn, who crash lands on an alien planet. Discover the flora, fauna, and local
                        residents, and help them solve problems through interpreting body language and nonverbal
                        cues. In return, they may help you overcome obstacles of your own as you explore more
                        of the environment. As you gather your missing parts, can you help restore balance
                        to the planet?  
                        </p>
                        
                    </div>
                    
                </div>
                
                <ul class="project_nav_container">
    
                    <a class="fancybox" rel="crystals_gallery" href="images/projects/screenshots/crystals/crystals_screenshot_01.png">
                        <li class="view_screenshots_button">
                            <div class="screenshot_icon"></div>
                            Screenshots
                        </li>
                    </a>
                    
                    <a class="fancybox" href="lesson_plans.php">
                        <li class="view_lesson_plan_button">
                            <div class="lesson_plan_icon"></div>
                            Lessons
                        </li>
                    </a>
                    
                    <a class="fancybox hidden" id="lesson_plans">
                        
                    </a>
    
                    <!-- Gallery -->
                    <a class="fancybox hidden" rel="crystals_gallery" href="images/projects/screenshots/crystals/crystals_screenshot_02.png"></a>
                    <a class="fancybox hidden" rel="crystals_gallery" href="images/projects/screenshots/crystals/crystals_screenshot_03.png"></a>
                    <a class="fancybox hidden" rel="crystals_gallery" href="images/projects/screenshots/crystals/crystals_screenshot_04.png"></a>
                    <a class="fancybox hidden" rel="crystals_gallery" href="images/projects/screenshots/crystals/crystals_screenshot_05.png"></a>
                    <a class="fancybox hidden" rel="crystals_gallery" href="images/projects/screenshots/crystals/crystals_screenshot_06.png"></a>
    
                </ul>
    
            </div>
            
            
            
            <!-- Tenacity -->
            <div class="project_container_first">
            
                <div class="project_image">
                    <div class="project_tenacity"></div>
                </div>
                
                <div class="project_description">
                    
                    <div class="project_description_header">
                        <p>Tenacity</p>
                    </div>
                    
                    <div class="project_description_paragraph">
                        <p>
                            Tenacity is a meditative app designed to promote mental well-being through breath counting.
                            In Tenacity, the focus is on learning practices of wellness and self-regulation.
                            Relax and concentrate on your own breathing as you explore Greek ruins, Egyptian
                            dunes, and staircases that ascend into the skies, and unlock rewards and achievements
                            as you become a more mindful person
                        </p>
                        
                    </div>
                    
                </div>
                
                <ul class="project_nav_container">
    
                    <a class="fancybox" rel="tenacity_gallery" href="images/projects/screenshots/tenacity/tenacity_screenshot_01.png">
                        <li class="view_screenshots_button">
                            <div class="screenshot_icon"></div>
                            Screenshots
                        </li>
                    </a>
                    
                    <a class="fancybox" href="lesson_plans.php">
                        <li class="view_lesson_plan_button">
                            <div class="lesson_plan_icon"></div>
                            Lessons
                        </li>
                    </a>
    
                    
                    <!-- Gallery -->
                    <a class="fancybox hidden" rel="tenacity_gallery" href="images/projects/screenshots/tenacity/tenacity_screenshot_02.png"></a>
                    <a class="fancybox hidden" rel="tenacity_gallery" href="images/projects/screenshots/tenacity/tenacity_screenshot_03.png"></a>
                    <a class="fancybox hidden" rel="tenacity_gallery" href="images/projects/screenshots/tenacity/tenacity_screenshot_04.png"></a>
                    <a class="fancybox hidden" rel="tenacity_gallery" href="images/projects/screenshots/tenacity/tenacity_screenshot_05.png"></a>
                    <a class="fancybox hidden" rel="tenacity_gallery" href="images/projects/screenshots/tenacity/tenacity_screenshot_06.png"></a>
                    <a class="fancybox hidden" rel="tenacity_gallery" href="images/projects/screenshots/tenacity/tenacity_screenshot_07.png"></a>
                    <a class="fancybox hidden" rel="tenacity_gallery" href="images/projects/screenshots/tenacity/tenacity_screenshot_08.png"></a>
                    <a class="fancybox hidden" rel="tenacity_gallery" href="images/projects/screenshots/tenacity/tenacity_screenshot_09.png"></a>
    
        
                </ul>
                
            </div>
            
            
            
            
            
            <!-- Progenitor X -->
            <div class="project_container_first">
            
                <div class="project_image">
                    <div class="project_progenitor"></div>
                </div>
                
                <div class="project_description">
                    
                    <div class="project_description_header">
                        <p>Progenitor X</p>
                    </div>
                    
                    <div class="project_description_paragraph">
                        <p>
                            The world is overrun with zombies. You, as a member of The
                            Progenitor X Defense Force are a part of a highly trained
                            squad of scientists who can save us. Using highly advanced
                            bio-medical technology, you locate, seek out, and treat infected
                            humans to contain the threat. With your help, the Progenitor X
                            Defense Force will prevail. But be aware: Zombies are out there,
                            and we are all susceptible.
                        </p>
                        
                    </div>
                    
                </div>
                
                <ul class="project_nav_container">
                    
                    <a class="fancybox" href="project_progenitor_x.php">
                        <li class="view_trailer_button">
                            <div class="play_icon"></div>
                            Play Now
                        </li>
                    </a>
                    
                    <a class="fancybox trailer" href="http://www.youtube.com/watch?v=_BmktJ_Atvk&feature=youtu.be">
                        <li class="view_trailer_button">
                            <div class="trailer_icon"></div>
                            Trailer
                        </li>
                    </a>
                    
                    <a class="fancybox" rel="progenitor_gallery" href="images/projects/screenshots/progenitor_gallery/intro1.jpg">
                        <li class="view_screenshots_button">
                            <div class="screenshot_icon"></div>
                            Screenshots
                        </li>
                    </a>
                    
                    <!-- Gallery -->
                    <a class="fancybox hidden" rel="progenitor_gallery" href="images/projects/screenshots/progenitor_gallery/intro2.jpg"></a>
                    <a class="fancybox hidden" rel="progenitor_gallery" href="images/projects/screenshots/progenitor_gallery/intro4.jpg"></a>
                    <a class="fancybox hidden" rel="progenitor_gallery" href="images/projects/screenshots/progenitor_gallery/intro5.jpg"></a>
                    <a class="fancybox hidden" rel="progenitor_gallery" href="images/projects/screenshots/progenitor_gallery/ProgenitorX_Screenshot_3.png"></a>
                    <a class="fancybox hidden" rel="progenitor_gallery" href="images/projects/screenshots/progenitor_gallery/Screen_4.jpg"></a>
                    <a class="fancybox hidden" rel="progenitor_gallery" href="images/projects/screenshots/progenitor_gallery/Screen_5.jpg"></a>
                    <a class="fancybox hidden" rel="progenitor_gallery" href="images/projects/screenshots/progenitor_gallery/Screen_6.jpg"></a>
                    <a class="fancybox hidden" rel="progenitor_gallery" href="images/projects/screenshots/progenitor_gallery/Screen_7.jpg"></a>
                    <a class="fancybox hidden" rel="progenitor_gallery" href="images/projects/screenshots/progenitor_gallery/Screen_8.jpg"></a>
                    <a class="fancybox hidden" rel="progenitor_gallery" href="images/projects/screenshots/progenitor_gallery/Screen_9.jpg"></a>
                    <a class="fancybox hidden" rel="progenitor_gallery" href="images/projects/screenshots/progenitor_gallery/Screen_10.jpg"></a>
                    
                    
                    <a href="pdfs/Progenitor_3.pdf" target="_blank">
                        <li class="view_resources_button">
                            <div class="resources_icon"></div>
                            Resources
                        </li>
                    </a>
                    
                    <a class="fancybox" href="lesson_plans.php">
                        <li class="view_lesson_plan_button">
                            <div class="lesson_plan_icon"></div>
                            Lessons
                        </li>
                    </a>
                            
                    
                    <a href="http://www.gameslearningsociety.org/px_microsite/" target="_blank">
                        <li class="visit_microsite_button">
                            <div class="microsite_icon"></div>
                            Visit Microsite
                        </li>
                    </a>
        
                </ul>
                
            </div>
            
            
            <!-- Fair Play -->
            <div class="project_container">
            
                <div class="project_image">
                    <div class="project_fair_play"></div>
                </div>
                
                <div class="project_description">
                    
                    <div class="project_description_header">
                        <p>Fair Play</p>
                    </div>
                    
                    <div class="project_description_paragraph">
                        <p>
                            Fair Play spans five chapters during which you will navigate through the challenges
                            inherent to graduate school, such as securing funding, writing publications, and much
                            more. As Jamal, an African American, you will experience common racial biases on your
                            journey. It will be a difficult path to navigate, but an experience that will change
                            your view on the world forever.
                        </p>
                    </div>
                    
                </div>
                
                <ul class="project_nav_container">
                    
                    <a href="project_fair_play_choose_game_type.php">
                        <li class="view_trailer_button">
                            <div class="play_icon"></div>
                            Play Now
                        </li>
                    </a>
                    
                    <a class="fancybox trailer" href="http://www.youtube.com/watch?v=Nns6hiy8xzE&feature=youtu.be">
                        <li class="view_trailer_button">
                            <div class="trailer_icon"></div>
                            Trailer
                        </li>
                    </a>
                    
                    <a class="fancybox" rel="fair_play_gallery" href="images/projects/screenshots/fairplay/fairplay_screenshot_01.png">
                        <li class="view_screenshots_button">
                            <div class="screenshot_icon"></div>
                            Screenshots
                        </li>
                    </a>
                    
                    <a href="pdfs/FairPlay.pdf" target="_blank">
                        <li class="view_resources_button">
                            <div class="resources_icon"></div>
                            Resources
                        </li>
                    </a>
                    
                    <a class="fancybox hidden" rel="fair_play_gallery" href="images/projects/screenshots/fairplay/fairplay_screenshot_02.png"></a>
                    <a class="fancybox hidden" rel="fair_play_gallery" href="images/projects/screenshots/fairplay/fairplay_screenshot_03.png"></a>
                    <a class="fancybox hidden" rel="fair_play_gallery" href="images/projects/screenshots/fairplay/fairplay_screenshot_04.png"></a>
                    <a class="fancybox hidden" rel="fair_play_gallery" href="images/projects/screenshots/fairplay/fairplay_screenshot_05.png"></a>
                    <a class="fancybox hidden" rel="fair_play_gallery" href="images/projects/screenshots/fairplay/fairplay_screenshot_06.png"></a>
                    <a class="fancybox hidden" rel="fair_play_gallery" href="images/projects/screenshots/fairplay/fairplay_screenshot_07.png"></a>
                    <a class="fancybox hidden" rel="fair_play_gallery" href="images/projects/screenshots/fairplay/fairplay_screenshot_08.png"></a>
    
                </ul>
                
            </div>
            
            
            
            <!-- Soul of a Place -->
            <div class="project_container">
            
                <div class="project_image">
                    <div class="project_soul"></div>
                </div>
                
                <div class="project_description">
                    
                    <div class="project_description_header">
                        <p>Soul of a Place</p>
                    </div>
                    
                    <div class="project_description_paragraph">
                        <p>
                            Soul of a Place is an educational journey about
                            the Federal Writers Project of the Great Depression, enacted as part
                            of President Franklin Roosevelt's efforts to put Americans back to work.
                    
                            You play two distinct roles during
                            this Prototype. One is of an American Guide Editor and the other is as
                            a writer on assignment.  
                            
                            These assignments will challenge the player to investigate historical
                            locations across the states along the Lincoln Highway.
                        </p>
                    </div>
                    
                </div>
                
                <ul class="project_nav_container">
                    
                    <a class="fancybox" rel="soul_gallery" href="images/projects/screenshots/soul/soul_screenshot_01.png">
                        <li class="view_screenshots_button">
                            <div class="screenshot_icon"></div>
                            Screenshots
                        </li>
                    </a>
                    
                    <!--Gallery-->
                    <a class="fancybox hidden" rel="soul_gallery" href="images/projects/screenshots/soul/soul_screenshot_02.png"></a>
                    <a class="fancybox hidden" rel="soul_gallery" href="images/projects/screenshots/soul/soul_screenshot_08.png"></a>
                    <a class="fancybox hidden" rel="soul_gallery" href="images/projects/screenshots/soul/soul_screenshot_03.png"></a>
                    <a class="fancybox hidden" rel="soul_gallery" href="images/projects/screenshots/soul/soul_screenshot_04.png"></a>
                    <a class="fancybox hidden" rel="soul_gallery" href="images/projects/screenshots/soul/soul_screenshot_05.png"></a>
                    <a class="fancybox hidden" rel="soul_gallery" href="images/projects/screenshots/soul/soul_screenshot_06.png"></a>
                    <a class="fancybox hidden" rel="soul_gallery" href="images/projects/screenshots/soul/soul_screenshot_07.png"></a>
                
        
                </ul>
                
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
                
                <ul class="project_nav_container">
                    
                    <a href="project_anatomy_browser.php">
                        <li class="view_trailer_button">
                            <div class="play_icon"></div>
                            Play Now
                        </li>
                    </a>
                    
                    <a class="fancybox" rel="apa_gallery" href="images/projects/screenshots/apa/AnatomyProAmTracts_Screenshot_1.png">
                        <li class="view_screenshots_button">
                            <div class="screenshot_icon"></div>
                            Screenshots
                        </li>
                    </a>
                    
                    <a href="pdfs/AnatomyBrowser.pdf" target="_blank">
                        <li class="view_resources_button">
                            <div class="resources_icon"></div>
                            Resources
                        </li>
                    </a>
                    
                    <a class="fancybox" href="lesson_plans.php">
                        <li class="view_lesson_plan_button">
                            <div class="lesson_plan_icon"></div>
                            Lessons
                        </li>
                    </a>
                    
                    <!--Gallery-->
                    <a class="fancybox hidden" rel="apa_gallery" href="images/projects/screenshots/apa/AnatomyProAmTracts_Screenshot_2.png"></a>
                    <a class="fancybox hidden" rel="apa_gallery" href="images/projects/screenshots/apa/AnatomyProAmTracts_Screenshot_3.png"></a>
                    <a class="fancybox hidden" rel="apa_gallery" href="images/projects/screenshots/apa/AnatomyProAmTracts_Screenshot_4.png"></a>
                    <a class="fancybox hidden" rel="apa_gallery" href="images/projects/screenshots/apa/AnatomyProAmTracts_Screenshot_5.png"></a>
                    <a class="fancybox hidden" rel="apa_gallery" href="images/projects/screenshots/apa/AnatomyProAmTracts_Screenshot_6.png"></a>
                    
                    <a href="https://itunes.apple.com/us/app/anatomy-browser/id523208752?ls=1&mt=8" target="_blank">
                        <li class="view_on_appstore_button">
                            <div class="apple_icon"></div>
                            Appstore
                        </li>
                    </a>               
        
                </ul>
                
            </div>
            
            
            
            <!-- Virulent -->
            <div class="project_container">
            
                <div class="project_image">
                    <div class="project_virulent"></div>
                </div>
                
                <div class="project_description">
                    
                    <div class="project_description_header">
                        <p>Virulent</p>
                    </div>
                    
                    <div class="project_description_paragraph">
                        <p>
                            Control "Raven" virus particles trying to infect, replicate inside of, and
                            escape from a host cell. Fight off host and cellular immune responses with
                            armies of viral proteins while stealing precious energy and production facilities
                            to make more of yourself. You have numbers and speed on your side, use them
                            wisely and recklessly.
                        </p>
                    </div>
                    
                </div>
                
                <ul class="project_nav_container">
                
                    <a class="" href="project_virulent.php">
                        <li class="view_trailer_button">
                            <div class="play_icon"></div>
                            Play Now
                        </li>
                    </a>
                    
                    <a class="fancybox trailer" href="http://www.youtube.com/watch?v=I-ICdm1xu7U&feature=youtu.be">
                        <li class="view_trailer_button">
                            <div class="trailer_icon"></div>
                            Trailer
                        </li>
                    </a>
                    
                    <a class="fancybox" rel="virulent_gallery" href="images/projects/screenshots/virulent/Virulent_Screenshot_1.png">
                        <li class="view_screenshots_button">
                            <div class="screenshot_icon"></div>
                            Screenshots
                        </li>
                    </a>
                    
                    <a href="pdfs/Virulent.pdf" target="_blank">
                        <li class="view_resources_button">
                            <div class="resources_icon"></div>
                            Resources
                        </li>
                    </a>
                    
                    <a class="fancybox" href="lesson_plans.php">
                        <li class="view_lesson_plan_button">
                            <div class="lesson_plan_icon"></div>
                            Lessons
                        </li>
                    </a>
                    
                    <!--Gallery-->
                    <a class="fancybox hidden" rel="virulent_gallery" href="images/projects/screenshots/virulent/Virulent_Screenshot_2.png"></a>
                    <a class="fancybox hidden" rel="virulent_gallery" href="images/projects/screenshots/virulent/Virulent_Screenshot_3.png"></a>
                    <a class="fancybox hidden" rel="virulent_gallery" href="images/projects/screenshots/virulent/Virulent_Screenshot_4.png"></a>
                    
                    
                    <a href="https://itunes.apple.com/us/app/virulent/id438485177?mt=8" target="_blank">
                        <li class="view_on_appstore_button">
                            <div class="apple_icon"></div>
                            Appstore
                        </li>
                    </a>
                    
                    
                    
                </ul>
                
            </div>
            
            
            
            <!-- Studio K -->
            <div class="project_container">
            
                <div class="project_image">
                    <div class="project_studiok"></div>
                </div>
                
                <div class="project_description">
                    
                    <div class="project_description_header">
                        <p>Studio K</p>
                    </div>
                    
                    <div class="project_description_paragraph">
                        <p>
                            Studio K is a game design curriculum, online community, and set of teacher-support
                            tools intended to enable teachers to help learners make their own video games
                            using Microsoft Kodu. Kodu is a powerful 3D game design and programming tool that
                            enables users to focus on creating compelling games for their friends.
                        </p>
                    </div>
                    
                </div>
                
                <ul class="project_nav_container">
                    
                    <a class="fancybox trailer" href="http://vimeo.com/67840823">
                        <li class="view_trailer_button">
                            <div class="trailer_icon"></div>
                            Trailer
                        </li>
                    </a>
                    
                    <a class="fancybox" rel="studiok_gallery" href="images/projects/screenshots/studiok/StudioK_Screenshot_1.png">
                        <li class="view_screenshots_button">
                            <div class="screenshot_icon"></div>
                            Screenshots
                        </li>
                    </a>
                    
                    <a href="pdfs/StudioK.pdf" target="_blank">
                        <li class="view_resources_button">
                            <div class="resources_icon"></div>
                            Resources
                        </li>
                    </a>
                    
                    <!--Gallery-->
                    <a class="fancybox" rel="studiok_gallery" href="images/projects/screenshots/studiok/StudioK_Screenshot_9.png"></a>
                    <a class="fancybox" rel="studiok_gallery" href="images/projects/screenshots/studiok/StudioK_Screenshot_2.png"></a>
                    <a class="fancybox" rel="studiok_gallery" href="images/projects/screenshots/studiok/StudioK_Screenshot_10.png"></a>
                    <a class="fancybox" rel="studiok_gallery" href="imagesprojects/screenshots/studiok/StudioK_Screenshot_3.png"></a>
                    <a class="fancybox" rel="studiok_gallery" href="images/projects/screenshots/studiok/StudioK_Screenshot_4.png"></a>
                    <a class="fancybox" rel="studiok_gallery" href="images/projects/screenshots/studiok/StudioK_Screenshot_5.png"></a>
                    <a class="fancybox" rel="studiok_gallery" href="images/projects/screenshots/studiok/StudioK_Screenshot_6.png"></a>
                    <a class="fancybox" rel="studiok_gallery" href="images/projects/screenshots/studiok/StudioK_Screenshot_7.png"></a>
                    <a class="fancybox" rel="studiok_gallery" href="images/projects/screenshots/studiok/StudioK_Screenshot_8.png"></a>
                    
                    <a href="http://www.gameslearningsociety.org/studiok/" target="_blank">
                        <li class="visit_microsite_button">
                            <div class="microsite_icon"></div>
                            Visit Microsite
                        </li>
                    </a>
        
                </ul>
                
            </div>
            
            
            <!-- Citizen Science -->
            <div class="project_container">
            
                <div class="project_image">
                    <div class="project_citizen_science"></div>
                </div>
                
                <div class="project_description">
                    
                    <div class="project_description_header">
                        <p>Citizen Science</p>
                    </div>
                    
                    <div class="project_description_paragraph">
                        <p>
                            Citizen Science is an online flash-based computer adventure game in which the
                            player is a young adult who becomes concerned about the health of a local lake
                            threatened by eutrophication. Based at Lake Mendota in Madison, WI, the player's
                            goal is to restore the lake. By focusing on the ecological needs of Lake Mendota
                            as well as the surrounding community, the game is able to bring together real-world
                            issues and scientific practices.
                        </p>
                    </div>
                    
                </div>
                
                <ul class="project_nav_container">
                    
                    <a class="fancybox" href="project_citizen_science.php">
                        <li class="view_trailer_button">
                            <div class="play_icon"></div>
                            Play Now
                        </li>
                    </a>
                    
                    <a class="fancybox" rel="cs_gallery" href="images/projects/screenshots/cs/CitizenScience_Screenshot_1.png">
                        <li class="view_screenshots_button">
                            <div class="screenshot_icon"></div>
                            Screenshots
                        </li>
                    </a>
                    
                    <a href="pdfs/CS2.pdf" target="_blank">
                        <li class="view_resources_button">
                            <div class="resources_icon"></div>
                            Resources
                        </li>
                    </a>
                    
                    <a class="fancybox" href="lesson_plans.php">
                        <li class="view_lesson_plan_button">
                            <div class="lesson_plan_icon"></div>
                            Lessons
                        </li>
                    </a>
                    
                    <a href="http://citizenscience.gameslearningsociety.org/" target="_blank">
                        <li class="visit_microsite_button">
                            <div class="microsite_icon"></div>
                            Visit Microsite
                        </li>
                    </a>

                    
                    <!--Gallery-->
                    <a class="fancybox" rel="cs_gallery" href="images/projects/screenshots/cs/CitizenScience_Screenshot_2.png"></a>
                    <a class="fancybox" rel="cs_gallery" href="images/projects/screenshots/cs/CitizenScience_Screenshot_3.png"></a>
                    <a class="fancybox" rel="cs_gallery" href="images/projects/screenshots/cs/CitizenScience_Screenshot_4.png"></a>
                    <a class="fancybox" rel="cs_gallery" href="images/projects/screenshots/cs/CitizenScience_Screenshot_5.png"></a>
                    <a class="fancybox" rel="cs_gallery" href="images/projects/screenshots/cs/CitizenScience_Screenshot_6.png"></a>
                    <a class="fancybox" rel="cs_gallery" href="images/projects/screenshots/cs/CitizenScience_Screenshot_7.png"></a>
                    <a class="fancybox" rel="cs_gallery" href="images/projects/screenshots/cs/CitizenScience_Screenshot_8.png"></a>
                    <a class="fancybox" rel="cs_gallery" href="images/projects/screenshots/cs/CitizenScience_Screenshot_9.png"></a>
                    <a class="fancybox" rel="cs_gallery" href="images/projects/screenshots/cs/CitizenScience_Screenshot_10.png"></a>
        
                </ul>
                
            </div>
            
            
            
            <!-- Trails Forward -->
            <div class="project_container">
            
                <div class="project_image">
                    <div class="project_trails"></div>
                </div>
                
                <div class="project_description">
                    
                    <div class="project_description_header">
                        <p>Trails Forward</p>
                    </div>
                    
                    <div class="project_description_paragraph">
                        <p>
                            Trails Forward is an ecological, multiplayer strategy game currently in
                            development with funding from the UW-Madison Graduate School. Based on
                            the research of the interdisciplinary UW-Madison Conservation Conversation
                            Group, Trails Forward will enable testing the hypothesis that complex, agent-based
                            simulation games can broaden public participation in science.
                        </p>
                    </div>
                    
                </div>
                
                <ul class="project_nav_container">
                    
                    <a class="fancybox" rel="tf_gallery" href="images/projects/screenshots/trails/trails_screen_1.png">
                        <li class="view_screenshots_button">
                            <div class="screenshot_icon"></div>
                            Screenshots
                        </li>
                    </a>
                    
                </ul>
                
                <a class="fancybox hidden" rel="tf_gallery" href="images/projects/screenshots/trails/trails_screen_2.png"></a>
                <a class="fancybox hidden" rel="tf_gallery" href="images/projects/screenshots/trails/trails_screen_3.png"></a>
                <a class="fancybox hidden" rel="tf_gallery" href="images/projects/screenshots/trails/trails_screen_4.png"></a>
                <a class="fancybox hidden" rel="tf_gallery" href="images/projects/screenshots/trails/trails_screen_5.png"></a>
                
            </div>
        </div> <!-- end large game container -->
        
        
<!-- small game list -->
        <div class="small_game_list">
            
            <!-- Crystals of Kaydor -->
            <div class="project_container_first">
            
                <div class="project_image">
                    <img src="images/projects/project_crystals_of_kaydor.png"/>
                </div>
                
                <div class="project_description">
                    
                    <div class="project_description_header">
                        <p>Crystals of Kaydor</p>
                    </div>
                    
                    <div class="project_description_paragraph">
                        <p>                        
                        In Crystals of Kaydor, you play the role of an advanced robot created to explore
                        and learn, who crash lands on an alien planet. Discover the flora, fauna, and local
                        residents, and help them solve problems through interpreting body language and nonverbal
                        cues. In return, they may help you overcome obstacles of your own as you explore more
                        of the environment. As you gather your missing parts, can you help restore balance
                        to the planet?  
                        </p>
                        
                    </div>
                    
                </div>
                
                <ul class="project_nav_container">
    
                    <a class="fancybox" rel="crystals_gallery" href="images/projects/screenshots/crystals/crystals_screenshot_01.png">
                        <li class="view_screenshots_button">
                            <img src="images/screenshot_icon.png"/>
                        </li>
                    </a>
    
                    <!-- Gallery -->
                    <a class="fancybox hidden" rel="crystals_gallery" href="images/projects/screenshots/crystals/crystals_screenshot_02.png"></a>
                    <a class="fancybox hidden" rel="crystals_gallery" href="images/projects/screenshots/crystals/crystals_screenshot_03.png"></a>
                    <a class="fancybox hidden" rel="crystals_gallery" href="images/projects/screenshots/crystals/crystals_screenshot_04.png"></a>
                    <a class="fancybox hidden" rel="crystals_gallery" href="images/projects/screenshots/crystals/crystals_screenshot_05.png"></a>
                    <a class="fancybox hidden" rel="crystals_gallery" href="images/projects/screenshots/crystals/crystals_screenshot_06.png"></a>
    
                </ul>
    
            </div>
            
            
            
            <!-- Tenacity -->
            <div class="project_container_first">
            
                <div class="project_image">
                    <img src="images/projects/project_tenacity.png"/>
                </div>
                
                <div class="project_description">
                    
                    <div class="project_description_header">
                        <p>Tenacity</p>
                    </div>
                    
                    <div class="project_description_paragraph">
                        <p>
                            Tenacity is a meditative app designed to promote mental well-being through breath counting.
                            In Tenacity, the focus is on learning practices of wellness and self-regulation.
                            Relax and concentrate on your own breathing as you explore Greek ruins, Egyptian
                            dunes, and staircases that ascend into the skies, and unlock rewards and achievements
                            as you become a more mindful person
                        </p>
                        
                    </div>
                    
                </div>
                
                <ul class="project_nav_container">
    
                    <a class="fancybox" rel="tenacity_gallery" href="images/projects/screenshots/tenacity/tenacity_screenshot_01.png">
                        <li class="view_screenshots_button">
                            <img src="images/screenshot_icon.png"/>
                        </li>
                    </a>
    
                    
                    <!-- Gallery -->
                    <a class="fancybox hidden" rel="tenacity_gallery" href="images/projects/screenshots/tenacity/tenacity_screenshot_02.png"></a>
                    <a class="fancybox hidden" rel="tenacity_gallery" href="images/projects/screenshots/tenacity/tenacity_screenshot_03.png"></a>
                    <a class="fancybox hidden" rel="tenacity_gallery" href="images/projects/screenshots/tenacity/tenacity_screenshot_04.png"></a>
                    <a class="fancybox hidden" rel="tenacity_gallery" href="images/projects/screenshots/tenacity/tenacity_screenshot_05.png"></a>
                    <a class="fancybox hidden" rel="tenacity_gallery" href="images/projects/screenshots/tenacity/tenacity_screenshot_06.png"></a>
                    <a class="fancybox hidden" rel="tenacity_gallery" href="images/projects/screenshots/tenacity/tenacity_screenshot_07.png"></a>
                    <a class="fancybox hidden" rel="tenacity_gallery" href="images/projects/screenshots/tenacity/tenacity_screenshot_08.png"></a>
                    <a class="fancybox hidden" rel="tenacity_gallery" href="images/projects/screenshots/tenacity/tenacity_screenshot_09.png"></a>
    
        
                </ul>
                
            </div>
            
            
            
            <!-- Progenitor X -->
            <div class="project_container_first">
            
                <div class="project_image">
                    <img src="images/projects/project_progenitor.png"/>
                </div>
                
                <div class="project_description">
                    
                    <div class="project_description_header">
                        <p>Progenitor X</p>
                    </div>
                    
                    <div class="project_description_paragraph">
                        <p>
                            The world is overrun with zombies. You, as a member of The
                            Progenitor X Defense Force are a part of a highly trained
                            squad of scientists who can save us. Using highly advanced
                            bio-medical technology, you locate, seek out, and treat infected
                            humans to contain the threat. With your help, the Progenitor X
                            Defense Force will prevail. But be aware: Zombies are out there,
                            and we are all susceptible.
                        </p>
                        
                    </div>
                    
                </div>
                
                <ul class="project_nav_container">
                    
                    <a class="fancybox trailer" href="http://www.youtube.com/watch?v=3SES8EKUbCM=1&autoplay-1">
                        <li class="view_trailer_button">
                            <img src="images/trailer_icon.png"/>
                        </li>
                    </a>
                    
                    <a class="fancybox" rel="progenitor_gallery" href="images/projects/screenshots/progenitor_gallery/intro1.jpg">
                        <li class="view_screenshots_button">
                            <img src="images/screenshot_icon.png"/>
                        </li>
                    </a>
                    
                    <!-- Gallery -->
                    <a class="fancybox hidden" rel="progenitor_gallery" href="images/projects/screenshots/progenitor_gallery/intro2.jpg"></a>
                    <a class="fancybox hidden" rel="progenitor_gallery" href="images/projects/screenshots/progenitor_gallery/intro4.jpg"></a>
                    <a class="fancybox hidden" rel="progenitor_gallery" href="images/projects/screenshots/progenitor_gallery/intro5.jpg"></a>
                    <a class="fancybox hidden" rel="progenitor_gallery" href="images/projects/screenshots/progenitor_gallery/ProgenitorX_Screenshot_3.png"></a>
                    <a class="fancybox hidden" rel="progenitor_gallery" href="images/projects/screenshots/progenitor_gallery/Screen_4.jpg"></a>
                    <a class="fancybox hidden" rel="progenitor_gallery" href="images/projects/screenshots/progenitor_gallery/Screen_5.jpg"></a>
                    <a class="fancybox hidden" rel="progenitor_gallery" href="images/projects/screenshots/progenitor_gallery/Screen_6.jpg"></a>
                    <a class="fancybox hidden" rel="progenitor_gallery" href="images/projects/screenshots/progenitor_gallery/Screen_7.jpg"></a>
                    <a class="fancybox hidden" rel="progenitor_gallery" href="images/projects/screenshots/progenitor_gallery/Screen_8.jpg"></a>
                    <a class="fancybox hidden" rel="progenitor_gallery" href="images/projects/screenshots/progenitor_gallery/Screen_9.jpg"></a>
                    <a class="fancybox hidden" rel="progenitor_gallery" href="images/projects/screenshots/progenitor_gallery/Screen_10.jpg"></a>
                    
                    
                    <a href="pdfs/Progenitor_3.pdf" target="_blank">
                        <li class="view_resources_button">
                            <img src="images/resources_icon.png"/>
                        </li>
                    </a>
                            
                    
                    <a href="http://www.gameslearningsociety.org/px_microsite/" target="_blank">
                        <li class="visit_microsite_button">
                            <img src="images/microsite_icon.png"/>
                        </li>
                    </a>
        
                </ul>
                
            </div>
            
            
            
            <!-- Fair Play -->
            <div class="project_container">
            
                <div class="project_image">
                    <img src="images/projects/project_fair_play.png"/>
                </div>
                
                <div class="project_description">
                    
                    <div class="project_description_header">
                        <p>Fair Play</p>
                    </div>
                    
                    <div class="project_description_paragraph">
                        <p>
                            Fair Play spans five chapters during which you will navigate through the challenges inherent
                            to graduate school, such as securing funding, writing publications, and much more. As
                            Jamal, an African American, you will experience common racial biases on your journey.
                            It will be a difficult path to navigate, but an experience that will change your view
                            on the world forever.
                        </p>
                    </div>
                    
                </div>
                
                <ul class="project_nav_container">

                    <a class="fancybox trailer" href="http://youtu.be/cEUWpCgiXdM=1&autoplay-1">
                        <li class="view_trailer_button">
                            <img src="images/trailer_icon.png"/>
                        </li>
                    </a>
                    
                    <a class="fancybox" rel="fair_play_gallery" href="images/projects/screenshots/fairplay/fairplay_screenshot_01.png">
                        <li class="view_screenshots_button">
                            <img src="images/screenshot_icon.png"/>
                        </li>
                    </a>
                    
                    <a href="pdfs/FairPlay.pdf" target="_blank">
                        <li class="view_resources_button">
                            <img src="images/resources_icon.png"/>
                        </li>
                    </a>
                    
                    <a class="fancybox hidden" rel="fair_play_gallery" href="images/projects/screenshots/fairplay/fairplay_screenshot_02.png"></a>
                    <a class="fancybox hidden" rel="fair_play_gallery" href="images/projects/screenshots/fairplay/fairplay_screenshot_03.png"></a>
                    <a class="fancybox hidden" rel="fair_play_gallery" href="images/projects/screenshots/fairplay/fairplay_screenshot_04.png"></a>
                    <a class="fancybox hidden" rel="fair_play_gallery" href="images/projects/screenshots/fairplay/fairplay_screenshot_05.png"></a>
                    <a class="fancybox hidden" rel="fair_play_gallery" href="images/projects/screenshots/fairplay/fairplay_screenshot_06.png"></a>
                    <a class="fancybox hidden" rel="fair_play_gallery" href="images/projects/screenshots/fairplay/fairplay_screenshot_07.png"></a>
                    <a class="fancybox hidden" rel="fair_play_gallery" href="images/projects/screenshots/fairplay/fairplay_screenshot_08.png"></a>
    
                </ul>
                
            </div>
            
            
            
            <!-- Soul of a Place -->
            <div class="project_container">
            
                <div class="project_image">
                    <img src="images/projects/project_soul.png"/>
                </div>
                
                <div class="project_description">
                    
                    <div class="project_description_header">
                        <p>Soul of a Place</p>
                    </div>
                    
                    <div class="project_description_paragraph">
                        <p>
                            Soul of a Place is an educational journey about
                            the Federal Writers Project of the Great Depression, enacted as part
                            of President Franklin Roosevelt's efforts to put Americans back to work.
                    
                            You play two distinct roles during
                            this Prototype. One is of an American Guide Editor and the other is as
                            a writer on assignment.  
                            
                            These assignments will challenge the player to investigate historical
                            locations across the states along the Lincoln Highway.
                        </p>
                    </div>
                    
                </div>
                
                <ul class="project_nav_container">
                    
                    <a class="fancybox" rel="soul_gallery" href="images/projects/screenshots/soul/soul_screenshot_01.png">
                        <li class="view_screenshots_button">
                            <img src="images/screenshot_icon.png"/>
                        </li>
                    </a>
                    
                    <!--Gallery-->
                    <a class="fancybox hidden" rel="soul_gallery" href="images/projects/screenshots/soul/soul_screenshot_02.png"></a>
                    <a class="fancybox hidden" rel="soul_gallery" href="images/projects/screenshots/soul/soul_screenshot_08.png"></a>
                    <a class="fancybox hidden" rel="soul_gallery" href="images/projects/screenshots/soul/soul_screenshot_03.png"></a>
                    <a class="fancybox hidden" rel="soul_gallery" href="images/projects/screenshots/soul/soul_screenshot_04.png"></a>
                    <a class="fancybox hidden" rel="soul_gallery" href="images/projects/screenshots/soul/soul_screenshot_05.png"></a>
                    <a class="fancybox hidden" rel="soul_gallery" href="images/projects/screenshots/soul/soul_screenshot_06.png"></a>
                    <a class="fancybox hidden" rel="soul_gallery" href="images/projects/screenshots/soul/soul_screenshot_07.png"></a>
                
        
                </ul>
                
            </div>
            
            
            
            <!-- Anatomy Browser -->
            <div class="project_container">
            
                <div class="project_image">
                    <img src="images/projects/project_anatomy_browser.png"/>
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
                
                <ul class="project_nav_container">

                    <a class="fancybox" rel="apa_gallery" href="images/projects/screenshots/apa/AnatomyProAmTracts_Screenshot_1.png">
                        <li class="view_screenshots_button">
                            <img src="images/screenshot_icon.png"/>
                        </li>
                    </a>
                    
                    <a href="pdfs/AnatomyBrowser.pdf" target="_blank">
                        <li class="view_resources_button">
                            <img src="images/resources_icon.png"/>
                        </li>
                    </a>
                    
                    <!--Gallery-->
                    <a class="fancybox hidden" rel="apa_gallery" href="images/projects/screenshots/apa/AnatomyProAmTracts_Screenshot_2.png"></a>
                    <a class="fancybox hidden" rel="apa_gallery" href="images/projects/screenshots/apa/AnatomyProAmTracts_Screenshot_3.png"></a>
                    <a class="fancybox hidden" rel="apa_gallery" href="images/projects/screenshots/apa/AnatomyProAmTracts_Screenshot_4.png"></a>
                    <a class="fancybox hidden" rel="apa_gallery" href="images/projects/screenshots/apa/AnatomyProAmTracts_Screenshot_5.png"></a>
                    <a class="fancybox hidden" rel="apa_gallery" href="images/projects/screenshots/apa/AnatomyProAmTracts_Screenshot_6.png"></a>
                    
                    <a href="https://itunes.apple.com/us/app/anatomy-browser/id523208752?ls=1&mt=8" target="_blank">
                        <li class="view_on_appstore_button">
                            <img src="images/apple_icon.png"/>
                        </li>
                    </a>               
        
                </ul>
                
            </div>
            
            
            
            <!-- Virulent -->
            <div class="project_container">
            
                <div class="project_image">
                    <img src="images/projects/project_virulent.png"/>
                </div>
                
                <div class="project_description">
                    
                    <div class="project_description_header">
                        <p>Virulent</p>
                    </div>
                    
                    <div class="project_description_paragraph">
                        <p>
                            Control "Raven" virus particles trying to infect, replicate inside of, and
                            escape from a host cell. Fight off host and cellular immune responses with
                            armies of viral proteins while stealing precious energy and production facilities
                            to make more of yourself. You have numbers and speed on your side, use them
                            wisely and recklessly.
                        </p>
                    </div>
                    
                </div>
                
                <ul class="project_nav_container">
                    
                    <a class="fancybox trailer" href="http://youtu.be/HE4gLs57jHo=1&autoplay-1">
                        <li class="view_trailer_button">
                            <img src="images/trailer_icon.png"/>
                        </li>
                    </a>
                    
                    <a class="fancybox" rel="virulent_gallery" href="images/projects/screenshots/virulent/Virulent_Screenshot_1.png">
                        <li class="view_screenshots_button">
                            <img src="images/screenshot_icon.png"/>
                        </li>
                    </a>
                    
                    <a href="pdfs/Virulent.pdf" target="_blank">
                        <li class="view_resources_button">
                            <img src="images/resources_icon.png"/>
                        </li>
                    </a>
                    
                    <!--Gallery-->
                    <a class="fancybox hidden" rel="virulent_gallery" href="images/projects/screenshots/virulent/Virulent_Screenshot_2.png"></a>
                    <a class="fancybox hidden" rel="virulent_gallery" href="images/projects/screenshots/virulent/Virulent_Screenshot_3.png"></a>
                    <a class="fancybox hidden" rel="virulent_gallery" href="images/projects/screenshots/virulent/Virulent_Screenshot_4.png"></a>
                    
                    
                    <a href="https://itunes.apple.com/us/app/virulent/id438485177?mt=8" target="_blank">
                        <li class="view_on_appstore_button">
                            <img src="images/apple_icon.png"/>
                        </li>
                    </a>
                    
                    
                    
                </ul>
                
            </div>
            
            
            
            <!-- Studio K -->
            <div class="project_container">
            
                <div class="project_image">
                    <img src="images/projects/project_studiok.png"/>
                </div>
                
                <div class="project_description">
                    
                    <div class="project_description_header">
                        <p>Studio K</p>
                    </div>
                    
                    <div class="project_description_paragraph">
                        <p>
                            Studio K is a game design curriculum, online community, and set of teacher-support
                            tools intended to enable teachers to help learners how to make their own video games
                            using Microsoft Kodu. Kodu is a powerful 3D game design and programming tool that
                            enables users to focus on creating compelling games for their friends.
                        </p>
                    </div>
                    
                </div>
                
                <ul class="project_nav_container">
                    
                    <a class="fancybox trailer" href="http://vimeo.com/67840823">
                        <li class="view_trailer_button">
                            <img src="images/trailer_icon.png"/>
                        </li>
                    </a>
                    
                    <a class="fancybox" rel="studiok_gallery" href="images/projects/screenshots/studiok/StudioK_Screenshot_1.png">
                        <li class="view_screenshots_button">
                            <img src="images/screenshot_icon.png"/>
                        </li>
                    </a>
                    
                    <a href="pdfs/StudioK.pdf" target="_blank">
                        <li class="view_resources_button">
                            <img src="images/resources_icon.png"/>
                        </li>
                    </a>
                    
                    <!--Gallery-->
                    <a class="fancybox" rel="studiok_gallery" href="images/projects/screenshots/studiok/StudioK_Screenshot_9.png"></a>
                    <a class="fancybox" rel="studiok_gallery" href="images/projects/screenshots/studiok/StudioK_Screenshot_2.png"></a>
                    <a class="fancybox" rel="studiok_gallery" href="images/projects/screenshots/studiok/StudioK_Screenshot_10.png"></a>
                    <a class="fancybox" rel="studiok_gallery" href="imagesprojects/screenshots/studiok/StudioK_Screenshot_3.png"></a>
                    <a class="fancybox" rel="studiok_gallery" href="images/projects/screenshots/studiok/StudioK_Screenshot_4.png"></a>
                    <a class="fancybox" rel="studiok_gallery" href="images/projects/screenshots/studiok/StudioK_Screenshot_5.png"></a>
                    <a class="fancybox" rel="studiok_gallery" href="images/projects/screenshots/studiok/StudioK_Screenshot_6.png"></a>
                    <a class="fancybox" rel="studiok_gallery" href="images/projects/screenshots/studiok/StudioK_Screenshot_7.png"></a>
                    <a class="fancybox" rel="studiok_gallery" href="images/projects/screenshots/studiok/StudioK_Screenshot_8.png"></a>
                    
                    <a href="http://www.gameslearningsociety.org/studiok/" target="_blank">
                        <li class="visit_microsite_button">
                            <img src="images/microsite_icon.png"/>
                        </li>
                    </a>
        
                </ul>
                
            </div>
            
            
            <!-- Citizen Science -->
            <div class="project_container">
            
                <div class="project_image">
                    <img src="images/projects/project_citizen_science.png"/>
                </div>
                
                <div class="project_description">
                    
                    <div class="project_description_header">
                        <p>Citizen Science</p>
                    </div>
                    
                    <div class="project_description_paragraph">
                        <p>
                            Citizen Science is an online flash-based computer adventure game in which the
                            player is a young adult who becomes concerned about the health of a local lake
                            threatened by eutrophication. Based at Lake Mendota in Madison, WI, the player's
                            goal is to restore the lake. By focusing on the ecological needs of Lake Mendota
                            as well as the surrounding community, the game is able to bring together real-world
                            issues and scientific practices.
                        </p>
                    </div>
                    
                </div>
                
                <ul class="project_nav_container">
                    
                    <a class="fancybox" rel="cs_gallery" href="images/projects/screenshots/cs/CitizenScience_Screenshot_1.png">
                        <li class="view_screenshots_button">
                            <img src="images/screenshot_icon.png"/>
                        </li>
                    </a>
                    
                    <a href="pdfs/CS2.pdf" target="_blank">
                        <li class="view_resources_button">
                            <img src="images/resources_icon.png"/>
                        </li>
                    </a>
                    
                    <a href="http://citizenscience.gameslearningsociety.org/" target="_blank">
                        <li class="visit_microsite_button">
                            <img src="images/microsite_icon.png"/>
                        </li>
                    </a>
                    
                    <!--Gallery-->
                    <a class="fancybox" rel="cs_gallery" href="images/projects/screenshots/cs/CitizenScience_Screenshot_2.png"></a>
                    <a class="fancybox" rel="cs_gallery" href="images/projects/screenshots/cs/CitizenScience_Screenshot_3.png"></a>
                    <a class="fancybox" rel="cs_gallery" href="images/projects/screenshots/cs/CitizenScience_Screenshot_4.png"></a>
                    <a class="fancybox" rel="cs_gallery" href="images/projects/screenshots/cs/CitizenScience_Screenshot_5.png"></a>
                    <a class="fancybox" rel="cs_gallery" href="images/projects/screenshots/cs/CitizenScience_Screenshot_6.png"></a>
                    <a class="fancybox" rel="cs_gallery" href="images/projects/screenshots/cs/CitizenScience_Screenshot_7.png"></a>
                    <a class="fancybox" rel="cs_gallery" href="images/projects/screenshots/cs/CitizenScience_Screenshot_8.png"></a>
                    <a class="fancybox" rel="cs_gallery" href="images/projects/screenshots/cs/CitizenScience_Screenshot_9.png"></a>
                    <a class="fancybox" rel="cs_gallery" href="images/projects/screenshots/cs/CitizenScience_Screenshot_10.png"></a>
        
                </ul>
                
            </div>
            
            
            
            <!-- Trails Forward -->
            <div class="project_container">
            
                <div class="project_image">
                    <img src="images/projects/project_trails.png"/>
                </div>
                
                <div class="project_description">
                    
                    <div class="project_description_header">
                        <p>Trails Forward</p>
                    </div>
                    
                    <div class="project_description_paragraph">
                        <p>
                            Trails Forward is an ecological, multiplayer strategy game currently in
                            development with funding from the UW-Madison Graduate School. Based on
                            the research of the interdisciplinary UW-Madison Conservation Conversation
                            Group, Trails Forward will enable testing the hypothesis that complex, agent-based
                            simulation games can broaden public participation in science.
                        </p>
                    </div>
                    
                </div>
                
                <ul class="project_nav_container">
                    
                    <a class="fancybox" rel="tf_gallery" href="images/projects/screenshots/trails/trails_screen_1.png">
                        <li class="view_screenshots_button">
                            <img src="images/screenshot_icon.png"/>
                        </li>
                    </a>
                </ul>
                
                <a class="fancybox hidden" rel="tf_gallery" href="images/projects/screenshots/trails/trails_screen_2.png"></a>
                <a class="fancybox hidden" rel="tf_gallery" href="images/projects/screenshots/trails/trails_screen_3.png"></a>
                <a class="fancybox hidden" rel="tf_gallery" href="images/projects/screenshots/trails/trails_screen_4.png"></a>
                <a class="fancybox hidden" rel="tf_gallery" href="images/projects/screenshots/trails/trails_screen_5.png"></a>
                
            </div>
            
            
        </div> <!-- end small game list -->
        
        
        
    </div>
    
</div>

<?php require "footer.php";?>
 
</body>



</html>
