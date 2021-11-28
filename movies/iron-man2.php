<?php

    // include the file that contains the functions.
    include '../includes/function.php' ;

    // display the page header.
    pageHeader("Iron Man 2", "../index.css") ;
   pageNavigation("../");
?>
       
        <div class="content">
            <section id="left-content">
			<picture>
            <source media="(min-width: 800px)" srcset="../images/iron-man2-medium.jpg" >
			<img src="../images/iron-man2.jpg" alt="Iron Man 2"/>	
			</picture>
            <h2>Iron Man 2</h2>
               
            </section>
            
            <section id="right-content">
			<h2>Description</h2>
            <p>Starring: Robert Downey Jr., Mickey Rourke, Gwyneth Paltrow</p>
            <hr/>
            <p>Directed By: Jon Favreau</p>
            <hr/>
            <p>Genre: Action-Adventure</p>
            <hr/>
            <p>Duration: 2 hr 15 min</p>
            <hr/>
            <br/>
            <p>
			With the world now aware of his identity as Iron Man, Tony Stark must
			contend with both his declining health and a vengeful mad man with ties
			to his father's legacy.
			</p>
                
            </section>
               
             
               <section id="video-content">
                <h3>Watch Trailer</h3>
                <iframe  
				src="http://www.youtube.com/embed/BoohRoVA9WQ?autoplay=0" allowfullscreen>
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
  