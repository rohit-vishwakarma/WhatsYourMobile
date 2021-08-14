<?php
  include '../common.php';
  $id= $_GET['id'];
  $sql= "DELETE FROM asus WHERE id={$id}";
  mysqli_query($con, $sql) or die("Error in Query.");
  header('location:../database/asusd.php');