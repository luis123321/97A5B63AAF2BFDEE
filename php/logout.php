<?php 
	error_reporting(E_ALL & ~E_NOTICE);
	session_start();
	session_destroy();
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>YourLoteria : Logout</title>
	<link rel="stylesheet" href="styles.css">
	<link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
<div style="text-align: center">
	<h2>You have disconnected yourselft satisfactorily</h2>
	<a href="../index.php" title="">Click here for go to home page</a>
</div>
</body>
</html>