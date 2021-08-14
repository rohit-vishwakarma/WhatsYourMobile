<?php
include ('../common.php');
session_start();
?>
<html>
    <head>
          <title>WhatsYourMobile</title>
          <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"  >
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" >
    <script src="../bootstrap/js/jquery-3.3.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
        <link href="../css2.css" rel="stylesheet" type="text/css">
    </head>
    <body>
      <?php include 'header.php' ?>
        <div class="container">
            <div class="jumbotron">
                <center>  <h2>ASUS</h2></center>
            
            </div>
            <div class="row text-center">
                <?php
                  $sql= "SELECT * FROM asus";
                  $result = mysqli_query($con, $sql) or die(mysqli_error($con));
                  while($row= mysqli_fetch_assoc($result)){
                ?>
                <div class="col-md-3 col-sm-6">
                   <a href="<?php echo $row['link']?>" target="_blank" style="text-decoration: none;"> <div class="thumbnail"><img class="img-responsive" src="../img/asus/<?php echo $row['image']?>" alt="<?php echo $row['name']?>" style="height: 40%">
                           
                    </div>
                    
                            <h4><?php echo $row['name']?></h4></a>   
                </div>
                <?php
                   }
                ?>
                                
            </div>
        </div>
            
       
        <br><br><br><br>   <br>
        <?php 
        include 'footer.php';
        ?>
    </body>
</html>