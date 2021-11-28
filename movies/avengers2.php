<?php

    // include the file that contains the functions.
    include '../includes/function.php' ;

    // display the page header.
    pageHeader("Avengers 2", "../index.css") ;
  pageNavigation("../");
?>
       
        <div class="content">
            <section id="left-content">
			<picture>
            <source media="(min-width: 800px)" srcset="../images/avengers2-medium.jpg" >
			<img src="../images/avengers2.jpg" alt="Avengers 2"/>	
			</picture>
            <h2>Avengers 2 : Age of Ultron</h2>
               
            </section>
            
            <section id="right-content">
			<h2>Description</h2>
            <p>Starring:  Robert Downey Jr., Chris Evans, Mark Ruffalo </p>
            <hr/>
            <p>Directed By:  Joss Whedon</p>
            <hr/>
            <p>Genre: Action-Adventure</p>
            <hr/>
            <p>Duration: 2 hr 15 min</p>
            <hr/>
            <br/>
            <p>
			 When Tony Stark and Bruce Banner try to jump-start a dormant peacekeeping program
			 called Ultron, things go horribly wrong and it's up to Earth's Mightiest Heroes to
			 stop the villainous Ultron from enacting his terrible plans.
			 </p>
            </section>
               
             
               <section id="video-content">
                <h3>Watch Trailer</h3>
                <iframe  
				src="http://www.youtube.com/embed/tmeOjFno6Do?autoplay=0" allowfullscreen>
				</iframe>
                
            </section>
            	<section id="review">
		
		
		<?php reviewform(); ?>
        <?php link2("../"); ?>
	
		</section>
        </div>    
            
         
 <?php
    // display the page footer.
    pageFooter() ;
?>          
  