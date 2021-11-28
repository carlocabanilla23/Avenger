<?php

    // include the file that contains the functions.
    include '../includes/function.php' ;

    // display the page header.
    pageHeader("Captain America", "../index.css") ;
   pageNavigation("../");
?>
       
        <div class="content">
            <section id="left-content">
		    <picture>
            <source media="(min-width: 800px)" srcset="../images/captain-america1-medium.jpg" >
			<img src="../images/captain-america1.jpg" alt="captain america 1"/>	
			</picture>
		    <h2>Captain America 1: The First Avenger</h2>
               
            </section>
            
            <section id="right-content">
			<h2>Description</h2>
            <p>Starring:  Chris Evans, Hugo Weaving, Samuel L. Jackson </p>
            <hr/>
            <p>Directed By:  Joe Johnston</p>
            <hr/>
            <p>Genre: Action-Adventure</p>
            <hr/>
            <p>Duration: 2 hr 15 min</p>
            <hr/>
            <br/>
            <p>
			Steve Rogers, a rejected military soldier transforms into Captain America after taking a dose of
			a "Super-Soldier serum". But being Captain America comes at a price as he attempts to take down a
			war monger and a terrorist organization.
			
			</p>
                
            </section>
               
             
               <section id="video-content">
                <h3>Watch Trailer</h3>
                <iframe  
				src="http://www.youtube.com/embed/W4DlMggBPvc?autoplay=0" allowfullscreen>
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
  