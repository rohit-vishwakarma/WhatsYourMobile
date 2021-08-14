<?php
      session_start();
    require '../common.php';
    if(!isset($_SESSION['email'])){
      header('../location:index.php');
    }
?>
<html>
    <head>
        <title>WhatsYourMobile ADMIN</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="mycss.css">
    </head>
    
    <body>
        <table id="deco">
            <tr>
                <th>ID</th>
            <th>IMAGE NAME</th>
            <th>MOBILE NAME</th>
            <th>LINK</th>
             <th>DELETE</th>
           
            </tr>
            <?php
              $sql= "SELECT * FROM oppo";
              $result= mysqli_query($con, $sql) or die("Select Query is Missing.");
              if(mysqli_num_rows($result)>0){
                  while($row = mysqli_fetch_assoc($result)){
              
            ?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['image'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['link'];?></td>
                <td><a href="../delete/oppodel.php?id=<?php echo $row['id'];?>">Delete</a></td> 
           </tr>
             
            <?php
              }}
               if(isset($_SESSION['email']))
                   include '../afooter.php'
            ?>

            <a href="../add/oppoadd.php">ADD INTO OPPO</a>
            
        </table>
    </body>
</html>