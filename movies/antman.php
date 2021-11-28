<?php

    // include the file that contains the functions.
    include '../includes/function.php' ;

    // display the page header.
    pageHeader("Ant-Man", "../index.css") ;
	pageNavigation("../");

?>
       
        <div class="content">
            <section id="left-content">
			<picture>
            <source media="(min-width: 800px)" srcset="../images/ant-man-medium.jpg">
			<img src="../images/ant-man.jpg" alt="Ant Man"/>	
			</picture>
           
            <h2>Ant-Man</h2>
               
            </section>
            
            <section id="right-content">
			<h2>Description</h2>
            <p>Starring: Paul Rudd, Michael Douglas, Corey Stoll</p>
            <hr/>
            <p>Directed By: Peyton Reed</p>
            <hr/>
            <p>Genre: Action-Adventure</p>
            <hr/>
            <p>Duration: 2 hr 15 min</p>
            <hr/>
            <br/>
            <p>
			Armed with a super-suit with the astonishing ability to shrink in scale
			but increase in strength, cat burglar Scott Lang must embrace his inner
			hero and help his mentor, Dr. Hank Pym, plan and pull off a heist that
			will save the world.
			
			</p>
                
            </section>
               
             
               <section id="video-content">
                <h3>Watch Trailer</h3>
                <iframe  
				src="http://www.youtube.com/embed/pWdKf3MneyI?autoplay=0" allowfullscreen>
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
  