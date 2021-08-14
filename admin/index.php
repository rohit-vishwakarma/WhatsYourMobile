<?php
include('../common.php');
session_start();
if(isset($_POST['login'])) {
   $email = $_POST['EMAIL'];
   $password = $_POST['PASSWORD'];

   $sql = "SELECT * FROM adminuser WHERE email = '{$email}' && password = '{$password}'";
   $result = mysqli_query($con, $sql) or die("Query not running");
   if(mysqli_num_rows($result)>0) {
       while($row = mysqli_fetch_assoc($result)) {
               session_start();
               $_SESSION['email'] = $row['email'];
               $_SESSION['id']= $row['id'];
           }
            header('location: database/home.php');
      } else{
          echo '<script type="text/javascript">
            alert("Username or Password is Incorrect");
            window.location = "index.php"
          </script>';
    }
}

?>
<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <title>ADMIN</title>
    
       <style type="text/css">
          body {
             margin: 0;
             padding: 0;
           }
           input[type=text], input[type=Password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

          .container {
             width: auto;
             max-width: 600px;
             height: auto;
             padding: 15px 10px;
             margin: auto;
           }
       </style>
   </head>
    
<body>
   <div class="container bg-light">
       <h1 align="center" style="color:red;">Admin Panel Login</h1>
         <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
              <label>Email *</label>
              <input type="text" class="form-control" name="EMAIL" placeholder="eg: abc@gmail.com" required>
            </div>
             
             <div class="form-group">
              <label>Password *</label>
              <input type="Password" class="form-control" name="PASSWORD" placeholder="password" required>
            </div>
            
            <input type="submit" class="btn btn-success" name="login" value="Login">
         </form>
   </div> <!-- container div -->
</body>
</html>