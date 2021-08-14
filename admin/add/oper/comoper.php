<?php
    require '../../common.php';
    session_start();
    $image= mysqli_real_escape_string($con,$_POST['image']);
    $name=mysqli_real_escape_string($con,$_POST['name']);
   
   
    
        $user_registration_query="insert into company(image,name) values ('$image','$name')";
        //die($user_registration_query);
        $user_registration_result=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));
        echo "Item Successfully Added";
        ?>
        <meta http-equiv="refresh" content="3;url=../../database/companyd.php" />
        <?php
    
    
