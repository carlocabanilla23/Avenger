<?php

    // include the file that contains the functions.
    include 'includes/function.php' ;

    // display the page header.
    pageHeader("About", "index.css") ;
    
    pageNavigation(" ");

?>
           
        <div class="content">
         
        
           <div id="contact-form">
            <form id="contact" method="post" action="">
                <h2>Contact Me</h2>
                <fieldset>
             
                <label for="name">Name</label><br/>
                <input type="text" name="name"><br/>
                <label for="email">E-mail</label><br/>
                <input type="email" name="email"><br/>
                <label for="phone">Phone</label><br/>
                <input type="text" name="phone"><br/>
                <label for="website">Website</label><br/>
                <input type="url" name="url"><br/>
                <label for="message">Question/Comment</label><br/>
                <textarea name="message"></textarea><br/><br/>
                <input type="submit" name="submit" id="submit" value="Send Message" /><br/>
                </fieldset>
            </form>
           </div>
            
            <section id="location">
               <h2>My Location</h2>
               <p>Seatac Washington USA</p>
               <p>Highline Community College  Des moines, Washington USA</p>
               
               <iframe id="my-map "src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d43143.191255887425!2d-122.31681674999999!3d47.481156999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1464643473951"
                       width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </section>
            
            <section id="table">
               <h2>My Contact Information</h2>
               <table border="1" width="100%">
        <thead>
                <tr>
                        <td>My Contact Information</td>
                </tr>
        </thead>
        <tbody>
                <tr>
                        <td>Phone No.</td>
                        <td>(206) 111-2222</td>
                       
                </tr>
                <tr>
                        <td>Home No.</td>
                        <td>(204) 233-1233</td>
                       
                </tr>
                <tr>
                        <td>Email</td>
                        <td>Carlo233312@YAHOO.COM</td>
                        
                </tr>
        </tbody>
        <tfoot>
                <tr>
                        <td></td>
                        <td>If you have other Questions Please fill up the Contact form above</td>
                        
                </tr>
         
        </tfoot>
        </table>
               
               
            </section>
        </div>    
<?php
    // display the page footer.
    pageFooter() ;
?>          
  