<?php
  include 'common.php';
  $id= $_GET['id'];
  $sql= "DELETE FROM userc WHERE id={$id}";
  mysqli_query($con, $sql) or die("Error in Query.");
  header('location:admin.php');