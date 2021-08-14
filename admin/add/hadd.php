<?php
include '../common.php';
session_start();

?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../admin.css">
</head>
<style type="text/css">
	input[type=text], input[type=Password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

</style>
	<body>
		<form action="oper/hoper.php" method="POST">
			<label>NAME</label>
			<input type="text"  placeholder="user name" name="name" required><br>
			<label>EMAIL</label>
			<input type="text" placeholder="user email" name="email" required><br>
			<label>CONTACT NO.</label>
			<input type="text" placeholder="user contact" name="contact" required><br>
			<label>PASSWORD</label>
			<input type="text" placeholder="user password" name="pass" required><br>
			<input type="submit" value="Add" name="Add">

		</form>
	</body>
</html>