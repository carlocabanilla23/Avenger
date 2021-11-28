<?php

    // include the file that contains the functions.
    include '../includes/function.php' ;

    // display the page header.
    pageHeader("Thor 2", "../index.css") ;
	  pageNavigation("../");
?>
       
        <div class="content">
            <section id="left-content">
			<picture>
            <source media="(min-width: 800px)" srcset="../images/thor2-medium.jpg" >
			<img src="../images/thor2.jpg" alt="Thor 2"/>	
			</picture>
            <h2>Thor 2</h2>
               
            </section>
            
            <section id="right-content">
			<h2>Description</h2>
            <p>Starring:  Chris Hemsworth, Natalie Portman, Tom Hiddleston</p>
            <hr/>
            <p>Directed By:  Alan Taylor</p>
            <hr/>
            <p>Genre: Action-Adventure</p>
            <hr/>
            <p>Duration: 2 hr 15 min</p>
            <hr/>
            <br/>
            <p>
			When Dr. Jane Foster gets cursed with a powerful entity known as the Aether,
			Thor is heralded of the cosmic event known as the Convergence and the genocidal
			Dark Elves.
		  
			</p>
                
            </section>
               
             
               <section id="video-content">
                <h3>Watch Trailer</h3>
                <iframe  
				src="http://www.youtube.com/embed/jHFhZLJajlc?autoplay=0" allowfullscreen>
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
  