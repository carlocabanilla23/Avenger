<?php
/**
 * Functions that display the page header, footer, and navigation.
 *
 *
 */

function reviewform(){
	echo '
	<form id="review-form" method="post" action="">
                <h2>Make a Review</h2>
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
                <input type="submit" name="submit" id="submit" value="Make a Review" /><br/>
                </fieldset>
            </form>
			';
	
}
function link1(){
	echo '
	  <nav id="link1">
            <ul>
              <li><a href="about.php">About Us</a></li>
              <li><a href="contact.php">Contact Us</a></li>
            </ul>
            
          </nav>
	
	
	';
	
}
 function link2( $folder = 'default folder'){
	echo '
	  <nav id="link2">
             <ul>
              <li>
                <a href="about.php">
                <picture>
                <source media="(min-width: 800px)" srcset=" ' .$folder. 'weblogos/fb.png">
                <img src="' .$folder. 'weblogos/fb-small.png" alt="Facebook"/>	
                </picture>
                
                </a>
              </li>
              
                <li>
                <a href="about.php">
                <picture>
                <source media="(min-width: 800px)" srcset="' .$folder. 'weblogos/twitter.png">
                <img src="' .$folder. 'weblogos/twitter-small.png" alt="Twitter"/>	
                </picture>
                
                </a>
              </li>
             
             
               <li>
                <a href="about.php">
                <picture>
                <source media="(min-width: 800px)" srcset="'.$folder.'weblogos/instagram.png">
                <img src="' .$folder. 'weblogos/instagram-small.png" alt="Instagram"/>	
                </picture>
                
                </a>
              </li>
             
             
               <li>
                <a href="about.php">
                <picture>
                <source media="(min-width: 800px)" srcset="' .$folder. 'weblogos/youtube.png">
                <img src="' .$folder. 'weblogos/youtube-small.png" alt="Youtube"/>	
                </picture>
                
                </a>
              </li>
             
            </ul>
          </nav>
	';
	
	
 }
 
function pageFooter()
{
    echo '</main>
            
		</div>
		<footer>
			<h2> &copy; John Carlo Cabanilla</h2>
			<p>Highline College Students 2016</p>
			
		</footer>
        </body>
    </html>' ;
}

function pageHeader( $title = 'Default Title', $style = 'Default Style' )
{
    echo '<!DOCTYPE html>
	<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Marve Movie Collections">
        <meta name="author" content="John Carlo Cabanilla">
        <title>'.$title.'</title>

     
        <link rel="stylesheet" href="'.$style.'">
		
    </head>
    <body>
       <div class="page-wrapper">
            
            
			'  
            
                ;
}


function pageNavigation( $this = ' Selected Page')
{
    echo '
			 <header id=banner>
                 <h1>THE AVENGERS HUB</h1>
                 <h2>Marvel Movie Collections</h2>
                <nav>
                    <ul>
                        <li><a href=" '.$this.'index.php">Home</a></li>
                        <li><a href="'.$this.'movies.php">Movies</a></li>
                        <li><a href="'.$this.'contact.php">Contact Us</a></li>
                        <li><a href="'.$this.'about.php">About Us</a></li>
                    </ul>  
                </nav>
            </header>
			
			 <main>
                <!-- Content of the page goes here. -->'
		 ;
}


?>

