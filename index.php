<?php

    // include the file that contains the functions.
    include 'includes/function.php' ;

    // display the page header.
    pageHeader("About", "index.css") ;
    
    pageNavigation(" ");

?>
           
        <div class="content">
          <section id="front-page">
            <h2>Movies</h2>
            <picture>
                <source media="(min-width: 1200px)" srcset="images/captain-america3-large.jpg" >
                <source media="(min-width: 900px)" srcset="images/captain-america3-medium.jpg" >
                <img src="images/captain-america3.jpg" alt="captain america 3"/>	
            </picture>
            <p><a href="movies.php">Click Here For More !</a></p>
          </section>
          
        <section>
        <?php link1(); ?>
        <?php link2(" "); ?>
        
        </div>    
<?php
    // display the page footer.
    pageFooter() ;
?>          
  