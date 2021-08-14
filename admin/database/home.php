<?php
      session_start();
    require '../common.php';
    if(!isset($_SESSION['email'])){
      header('location:../index.php');
    }
?>
<html>
    <head>
        <title>WhatsYourMobile ADMIN</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link type="text/css" rel="stylesheet" href="mycss.css">
    </head>
    
    <body>
        <table id="deco">
            <tr>
                 <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>CONTACT</th>
           <th>PASSWORD</th>
             <th>DELETE</th>
            </tr>
            <?php
              $sql= "SELECT * FROM userc";
              $result= mysqli_query($con, $sql) or die("Select Query is Missing.");
              if(mysqli_num_rows($result)>0){
                  while($row = mysqli_fetch_assoc($result)){
              
            ?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['contact'];?></td>
                <td><?php echo $row['pass'];?></td>
                <td><a href="../delete/homedelete.php?id=<?php echo $row['id'];?>">Delete</a></td> 
           </tr>
             
            <?php
              }}
               if(isset($_SESSION['email']))
                   include '../afooter.php';
                   
            ?>
            <a href="../add/hadd.php">ADD INTO USERC</a>
            
            
        </table>
    </body>
</html>