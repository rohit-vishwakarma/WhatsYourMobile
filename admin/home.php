<?php
      session_start();
    require '../common.php';
    if(!isset($_SESSION['email'])){
      header('location:index.php');
    }
?>
<html>
    <head>
        <title>WhatsYourMobile ADMIN</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
    <style>
        body{
            margin: 0;
            padding: 0;
        } 
       
    </style>
    <body>
        <table>
            <tr>
                 <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>CONTACT</th>
           
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
                <td><a href="delete.php?id=<?php echo $row['id'];?>">Delete</a></td> 
           </tr>
             
            <?php
              }}
               if(isset($_SESSION['email']))
                   include 'afooter.php'
            ?>


           
        </table>
    </body>
</html>