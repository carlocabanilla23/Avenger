<?php

    // include the file that contains the functions.
    include '../includes/function.php' ;

    // display the page header.
    pageHeader("Captain America 3", "../index.css") ;
  pageNavigation("../");
?>
       
        <div class="content">
            <section id="left-content">
            <picture>
            <source media="(min-width: 800px)" srcset="../images/captain-america3-medium.jpg" >
			<img src="../images/captain-america3.jpg" alt="captain america 3"/>	
			</picture>
            <h2>Captain America 2: The Civil War</h2>
               
            </section>
            
            <section id="right-content">
			<h2>Description</h2>
            <p>Starring: Chris Evans, Robert Downey Jr., Scarlett Johansson </p>
            <hr/>
            <p>Directed By:  Anthony Russo, Joe Russo</p>
            <hr/>
            <p>Genre: Action-Adventure</p>
            <hr/>
            <p>Duration: 2 hr 15 min</p>
            <hr/>
            <br/>
            <p>
			Political interference in the Avengers' activities causes a rift between former allies Captain America and Iron Man.
		
			</p>
                
            </section>
               
             
               <section id="video-content">
                <h3>Watch Trailer</h3>
                <iframe  
				src="http://www.youtube.com/embed/YqcfOKaIwqY?autoplay=0" allowfullscreen>
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
  