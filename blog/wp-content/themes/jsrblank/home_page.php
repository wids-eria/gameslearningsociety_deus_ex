<?php
/*
 Template Name: Home Page Template
*/
?>


<?php get_header(); ?>


<!-- full width slider -->
<div id="fwslider">
        <div class="slider_container">

            <div class="slide"> 
                <img src="<?= bloginfo('template_directory'); ?>/images/slider_images/flyer_slide.png">
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <h4 class="title">HELP SPREAD THE WORD!</h4>
                        <p class="description">Print and/or email our lovely flyer to get
			all the <br /> fun people you know to Madison this summer!</p>
                        <a class="readmore" href="http://www.gameslearningsociety.org/wp-content/uploads/2012/11/GLS9_slide_full.jpg">Download The Flyer Here</a>
                        <!-- /Learn more button -->
                    </div>
                </div>
            </div>
                    
            <div class="slide"> 
                <img src="wp-content/themes/jsrblank/images/slider_images/art9.png">
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <h4 class="title"> SUBMISSIONS CLOSED</h4>
                        <p class="description">GLSES, Doctorial Consortium, and Art Exhibit submissions are closed.<br />
			Notifications emails will be sent in April. Good luck to yer!</p>
                    </div>
                </div>
            </div>
	    
	    <div class="slide"> 
                <img src="wp-content/themes/jsrblank/images/slider_images/gls23.png">
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <h4 class="title">GLS + CSCL = AWESOME!</h4>
                        <p class="description">Register for both conferences, and receive a 25% discount!</p>
			<a class="readmore" href="http://localhost/glsc_wp/?p=176">Learn More</a>
                        <!-- /Learn more button -->
                    </div>
                </div>
            </div>

        </div>
        
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
    </div>




<!-- page wrap -->

<div class="page_wrap">
    
    <div class="features">
                
        <!-- Location Feature -->
        <div class="feature_container floatleft">
            
            <div class="feature_header_container">
                
                <div class="feature_map_icon"></div>
                
                <div class="feature_header_content">
                    <p class="feature_title">Location</p>
                    <p class="feature_subtitle">Memorial Union, Madison, WI</p>
                </div>
                
            </div>
            
            <div class="feature_content">
                <a href=""> <div class="static_map"></div> </a>
            </div>
            
        </div>
        
        
        <!-- Dates Feature -->
        <div class="feature_container floatleft">
            
            <div class="feature_header_container">
                
                <div class="feature_calendar_icon"></div>
                
                <div class="feature_header_content">
                    <div class="floatleft">
                        <p class="feature_title">Date</p>
                        <p class="feature_subtitle">GLSC 9.0!</p>
                    </div>
                    
                    <div class="register_button_container">
                        <a href="http://localhost/glsc_wp/?p=180"> <div class="register_button"></div> </a>
                    </div>
                </div>
                
            </div>
            
            <div class="feature_content">
                
               
                    <div class="feature_date_container">
                        <p class="feature_date_pink">Pre-Conference Activities</p>
                        <p class="feature_date_white">June 11, 2013</p>
                    </div>
                
                
                                
                    <div class="feature_date_container">
                        <p class="feature_date_pink">GLS Conference</p>
                        <p class="feature_date_white">June 12-14, 2013</p>
                    </div>
                
                
            </div>
            
        </div>
        
        
        <!-- Schedule Feature -->
        <div class="feature_container floatright">
            
            <div class="feature_header_container">
                
                <div class="feature_clipboard_icon"></div>
                
                <div class="feature_header_content">
                    <p class="feature_title">Schedule</p>
                    <p class="feature_subtitle">All Kinds of Goodies</p>
                </div>
                
            </div>
            
            <div class="feature_content">
                <a href="http://localhost/glsc_wp/?page_id=91"> <div class="static_schedule"></div> </a>
            </div>
            
        </div>
        
    </div>
    
    
    
</div> <!-- end page wrap -->

<div class="keynote_container">
    
    <div class="keynotes">
        <div class="keynote_header"></div>
        
        <div class="speakers_container">
            
            
            <!-- Dani Herro -->
            <a href="http://www.clemson.edu/hehd/departments/education/faculty-staff/profile.html?userid=dherro" target="_blank">
                <div class="speaker">
                    
                    <div class="speaker_dani"></div>
                    
                    <div class="speaker_label">
                        <p class="speaker_name">Dani Herro</p>
                        <p class="speaking_at">Playful Learning Keynote Speaker</p>
                        
                    </div>
                    
                </div>
            </a>
            
            
            <!-- Dani Mary -->
            <a href="http://www.maryflanagan.com/" target="_blank">
                <div class="speaker">
                    
                    <div class="speaker_mary"></div>
                    
                    <div class="speaker_label">
                        <p class="speaker_name">Mary Flanagan</p>
                        <p class="speaking_at">GLS Keynote Speaker</p>
                        
                    </div>
                    
                </div>
            </a>
            
            
            <!-- Dani Steve -->
            <a href="http://junyo.com/about/" target="_blank">
                <div class="speaker">
                    
                    <div class="speaker_steve"></div>
                    
                    <div class="speaker_label">
                        <p class="speaker_name">Steve Schoettler</p>
                        <p class="speaking_at">GLS Keynote Speaker</p>
                        
                    </div>
                    
                </div>
            </a>
            
            
            <!-- Dani TBD -->
            <a href="http://www.satori.org/" target="_blank">
                <div class="speaker">
                    
                    <div class="speaker_mark"></div>
                    
                    <div class="speaker_label">
                        <p class="speaker_name">Mark DeLoura</p>
                        <p class="speaking_at">GLS Keynote Speaker</p>
                        
                    </div>
                    
                </div>
            </a>
            
        </div>
        
    </div>
    
</div>


<?php get_footer(); ?>
