<?php
    session_start();
    require 'common.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }  
     $old_password= md5(md5(mysqli_real_escape_string($con,$_POST['oldPassword'])));
    $new_password= md5(md5(mysqli_real_escape_string($con,$_POST['newPassword'])));
   $email=$_SESSION['email'];
    //echo $email;
    $password_from_database_query="select pass from userc where email='$email'";
    $password_from_database_result=mysqli_query($con,$password_from_database_query) or die(mysqli_error($con));
    $row=mysqli_fetch_array($password_from_database_result);
    //echo $row['password'];
    if($row['pass']==$old_password){
        $update_password_query="update userc set pass='$new_password' where email='$email'";
        $update_password_result=mysqli_query($con,$update_password_query) or die(mysqli_error($con));
        ?>
             <script>
            window.alert("Password has been changed!!!!");
        </script>
        <?php
        ?>
        <meta http-equiv="refresh" content="3;url=mobile.php" />
        <?php
    }else{
        ?>
        <script>
            window.alert("Wrong password!!");
        </script>
        <meta http-equiv="refresh" content="1;url=setting.php" />
        <?php
        //header('location:settings.php');
    }
