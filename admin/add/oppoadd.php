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
		<form action="oper/opoper.php" method="POST">
			<label>IMAGE</label>
			<input type="text"  placeholder="image name" name="image" required><br>
			<label>NAME</label>
			<input type="text" placeholder="mobile name" name="name" required><br>
			<label>LINK</label>
			<input type="text" placeholder="mobile link" name="link" required><br>
			
			<input type="submit" value="Add" name="Add">

		</form>
	</body>
</html>