<?php
  include '../common.php';
  $id= $_GET['id'];
  $sql= "DELETE FROM oneplus WHERE id={$id}";
  mysqli_query($con, $sql) or die("Error in Query.");
  header('location:../database/oneplusd.php');