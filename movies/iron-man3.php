<?php

    // include the file that contains the functions.
    include '../includes/function.php' ;

    // display the page header.
    pageHeader("Iron Man 3", "../index.css") ;
   pageNavigation("../");
?>
       
        <div class="content">
            <section id="left-content">
            <picture>
            <source media="(min-width: 800px)" srcset="../images/iron-man3-medium.jpg" >
			<img src="../images/iron-man3.jpg" alt="Iron Man 3"/>	
			</picture>
            <h2>Iron Man 3</h2>
               
            </section>
            
            <section id="right-content">
			<h2>Description</h2>
            <p>Starring:  Robert Downey Jr., Guy Pearce, Gwyneth Paltrow</p>
            <hr/>
            <p>Directed By:  Shane Black</p>
            <hr/>
            <p>Genre: Action-Adventure</p>
            <hr/>
            <p>Duration: 2 hr 15 min</p>
            <hr/>
            <br/>
            <p>
			When Tony Stark's world is torn apart by a formidable terrorist called the Mandarin,
			he starts an odyssey of rebuilding and retribution.
		   
			</p>
                
            </section>
               
             
               <section id="video-content">
                <h3>Watch Trailer</h3>
                <iframe  
				src="http://www.youtube.com/embed/oYSD2VQagc4?autoplay=0" allowfullscreen>
				</iframe>
                	<section id="review">
		
		
		<?php reviewform(); ?>
        <?php link2("../"); ?>
	
		</section>
            </section>
            
        </div>    
            
         
 <?php
    // display the page footer.
    pageFooter() ;
?>          
  