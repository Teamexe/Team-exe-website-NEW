<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-signin-client_id" content="307712715810-5gqv439ef8l9hmmod3ggpbdplcc7t7gq.apps.googleusercontent.com">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Team .EXE is the technical team of Computer Science & Engineering Department for technical fest NIMBUS at NIT Hamirpur.">
    <meta name="author" content="Team .EXE">
    <link rel="icon" href="images/title.png">

    <title>Workshops - Team .EXE</title>

    <?php 
          include_once('stylesheets.php');          
          include_once('dbconnect.php');
    ?>
  </head>

  <body>
<?php 
      include_once('header.php');
      include_once('navigation.php');
?>       
    <center>
    <div class="container">
    <h1>Workshops by Team .EXE</h1>
</div>
    </center>

    <section id="blog-full-width">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="sidebar">
                                
                                   
                                    <div class="categories widget">
                                        <h3 class="widget-head">Our Workshops (Over)</h3>
                                        <ul>
                                            <li>
                                                <a>AI Game theory</a> <span class="badge">New</span>
                                            </li>
                                            <li>
                                                <a>Introduction to GIT</a> <span class="badge">New</span>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="categories widget">
                                        <h3 class="widget-head">Our Workshops (Upcoming)</h3>
                                        <ul>
                                            <li>
                                                <a>Computer Networking</a> <span class="badge">New</span>
                                            </li>
                                            <li>
                                                <a>Deepweb & Darknet</a> <span class="badge">New</span>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    
                                </div>
                            </div>


                            <div class="col-md-8">
                                <article class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">
                                    <div class="blog-post-image">
                                        
                                    </div>
                                    <div class="blog-content">

                                        <h2 class="blogpost-title">
                                        <a>Description of workshops</a>
                                        </h2>
                                        <p>
                                            Coming soon.
                                        </p>
                                        
                                        
                                    </div>
                                </article>


                                </div>
                        </div>
                    </section>
    

<?php
    include_once('footer.php');
?>    
  </body>
</html>
