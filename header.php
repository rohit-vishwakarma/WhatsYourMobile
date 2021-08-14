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
    <body> 
         <div class="header navbar navbar-inverse navbar-fixed-top"> 
        <div class="navbar-header"> 
            <div type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> 
                  <span class="icon-bar"></span> 
                      <span class="icon-bar"></span> 
                          <span class="icon-bar"></span> 
              </div> 
            <a href="index.php"><img src="img/Whatsyourmobile.png"
                                                               height="50px" width="260px"  ></a></div> 
                <div class="collapse navbar-collapse" id="myNavbar"> 
              <ul class="nav navbar-nav navbar-right"> 
                 <?php 
                 if (isset($_SESSION['email'])) 
                 { 
                 ?>  
                   <li><a href="mobile.php" class="header-link"><span class="glyphicon glyphicon-phone"></span> Mobile</a></li> 
 
                    
                   <li><a href="setting.php" class="header-link"><span class="glyphicon glyphicon-menu-hamburger"></span> Setting</a></li> 
                  <li><a href="logout.php" class="header-link"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li> 
                 
                  <?php 
                 }else { 
                     ?> 
                  <li><a href="mobile.php" class="header-link"><span class="glyphicon glyphicon-phone"></span> Mobile</a></li> 
                  <li><a href="Signup.php" class="header-link"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> 
                  <li><a href="login.php" class="header-link"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> 
                <?php 
                 } 
                 ?> 
              </ul> 
                </div></div>
    </body> 
</html> 