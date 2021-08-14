<?php 
session_start(); 
?> 
<html> 
    <head> 
        <title>WhatsYourMobile</title> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"  >
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" > 
    <script src="bootstrap/js/jquery-3.3.1.min.js"></script> 
    <script src="bootstrap/js/bootstrap.min.js"></script> 
        <link href="css2.css" rel="stylesheet" type="text/css"> 
    </head> 
    <body class="banner-image"> 
        <?php 
          include 'header.php'; 
          ?> 
                <div class="inner-banner-image"> <center> 
                    <div class="banner_content">   <h1>Welcome to our WhatsYourMobile</h1> 
          <p>We will help you to find best mobile for you.</p> 
          <a href="mobile.php" class="btn btn-danger btn-lg active">Find Now</a> </div>
             </center>      
                  </div>
             <?php 
           include 'footer.php'; 
        ?>  
    </body> 
</html>