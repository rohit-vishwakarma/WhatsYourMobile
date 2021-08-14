<?php
    session_start();
    session_unset();
    session_destroy();
?>
<!DOCTYPE html>
<html>
    <head>
       
        <title>WhatsYourMobile</title>
       <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"  >
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="form.css" type="text/css">
    </head>
    <body style="background-color:black;">
        <div>
            <?php
                require 'header.php';
            ?>
            <br> 
            <div class="container jumbotron">
                  <div class="row">
                    <div class="col-xs-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                                <p>You have been logged out. <a style="text-decoration: none;" href="login.php">Login again.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
        </div>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
