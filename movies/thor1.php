<?php

    // include the file that contains the functions.
    include '../includes/function.php' ;

    // display the page header.
    pageHeader("Thor 1", "../index.css") ;
   pageNavigation("../");
?>
       
        <div class="content">
            <section id="left-content">
            <picture>
            <source media="(min-width: 800px)" srcset="../images/thor1-medium.jpg" >
			<img src="../images/thor1.jpg" alt="Thor1"/>	
			</picture>
            <h2>Thor 1</h2>
               
            </section>
            
            <section id="right-content">
			<h2>Description</h2>
            <p>Starring:  Chris Hemsworth, Anthony Hopkins, Natalie Portman</p>
            <hr/>
            <p>Directed By: Kenneth Branagh</p>
            <hr/>
            <p>Genre: Action-Adventure</p>
            <hr/>
            <p>Duration: 2 hr 15 min</p>
            <hr/>
            <br/>
            <p>
			The powerful but arrogant god Thor is cast out of Asgard to live
			amongst humans in Midgard (Earth), where he soon becomes one of
			their finest defenders.
		  
			</p>
                
            </section>
               
             
               <section id="video-content">
                <h3>Watch Trailer</h3>
                <iframe  
				src="http://www.youtube.com/embed/YSC9CjSYvYA?autoplay=0" allowfullscreen>
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
  