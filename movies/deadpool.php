<?php

    // include the file that contains the functions.
    include '../includes/function.php' ;

    // display the page header.
    pageHeader("Deadpool", "../index.css") ;
   pageNavigation("../");
?>
       
        <div class="content">
            <section id="left-content">
			<picture>
            <source media="(min-width: 800px)" srcset="../images/deadpool-medium.jpg" >
			<img src="../images/deadpool.jpg" alt="Deadpool"/>	
			</picture>
        
            <h2>Deadpool</h2>
               
            </section>
            
            <section id="right-content">
			<h2>Description</h2>
            <p>Starring: Chris Evans, Samuel Jackson, Scarlett Johansson</p>
            <hr/>
            <p>Directed By: Anthony Russo</p>
            <hr/>
            <p>Genre: Action-Adventure</p>
            <hr/>
            <p>Duration: 2 hr 15 min</p>
            <hr/>
            <br/>
            <p>
            After the cataclysmic events in New York with The Avengers, Marvel’s “Captain America: The Winter Soldier”
            finds Steve Rogers, aka Captain America, living quietly in Washington, D.C. and trying to adjust to the modern world.
            But when a S.H.I.E.L.D. colleague comes under attack, Steve becomes embroiled in a web of intrigue that threatens to put the world at risk.
            Joining forces with the Black Widow, Captain America struggles to expose the ever-widening conspiracy while fighting off professional assassins
            sent to silence him at every turn. When the full scope of the villainous plot is revealed, Captain America and the Black Widow enlist the help
            of a new ally, the Falcon. However, they soon find themselves up against an unexpected and formidable enemy—the Winter Soldier.</p>
                
            </section>
               
             
               <section id="video-content">
                <h3>Watch Trailer</h3>
                <iframe  
				src="http://www.youtube.com/embed/Xithigfg7dA?autoplay=0" allowfullscreen>
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
  