<?php
include('common.php');
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
    <body style="background-color:black;">
         
          <?php
          include 'header.php';
          ?>
             <div class="container">
            <div class="jumbotron">
                <center>  <h2>Find the best for you. </h2></center>
            
            </div>
            <div class="row text-center">
                 <?php 
                   $sql = "SELECT * FROM company";
                   $result = mysqli_query($con, $sql) or die("Query Error");
                  while( $row = mysqli_fetch_assoc($result)) {
                   

                 ?>
                  
                <div class="col-md-3 col-sm-6">
                  <div class="caption"> <a href="company/<?php echo $row['name']?>.php" style="text-decoration: none;"> <div class="thumbnail" style="height: 45%;"><img class="img-responsive" src="img/mobile/<?php echo $row['image']?>" alt="<?php echo $row['name']?>">
                        
                        </div>
                        
                            <h4><?php echo $row['name']?></h4></a>   
                    </div>
                    
                </div>

               <?php
                  }
               ?>
               
            </div>
            </div>
       
        <br><br><br><br>    <?php
           include 'footer.php';
        ?>
    </body>
</html>