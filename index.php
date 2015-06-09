<?php 

error_reporting(E_ALL & ~E_NOTICE);
session_start();

if($_POST['submit']){
	include_once("php/conexion.php");
	$user = strip_tags($_POST['user']);
	$pass = strip_tags($_POST['pass']);

	$sql = "SELECT idusers,user,pass FROM users WHERE user = '$user' AND activated ='1' LIMIT 1";
	$query = mysqli_query($dbCon,$sql);

	if($query){
		$row = mysqli_fetch_row($query);
		$userId = $row[0];
		$dbUsername = $row[1];
		$dbPassword = $row[2];

	if($user == $dbUsername && $pass == $dbPassword){
		$_SESSION['user'] = $user;
		$_SESSION['idusers'] = $userId;
		header('Location: ../administration/index.php');
	}	else{


		echo '<div class="alert alert-danger" role="alert" style="text-align:center;">Incorret Username or Password</div>';
	}

}
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>YourLoteria: Manage Page</title>
	<script src="http://code.jquery.com/jquery-2.1.4.js" type="text/javascript"></script>
	<script src="main.js" type="text/javascript"></script>
	<link rel="stylesheet" href="styles.css">
	<link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

</head>
<header id="header" class="">
		<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="title_yl">YourLoteria : Administration</h1>
			</div>
		</div>
	</div>
</header>
<body>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="login_ct">
						<form class="form-horizontal" method="post" action="index.php">
							  <div class="form-group">
							    <label for="inputUser" class="col-sm-2 control-label">User</label>
							    <div class="col-sm-10">
							      <input type="text" class="form-control" id="inputUserEmail3" placeholder="User" name="user">
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
							    <div class="col-sm-10">
							      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="pass">
							    </div>
							  </div>
  					<div class="col-md-12">
						  	<div class="form-group">
							    <div class="col-sm-offset-2 col-sm-10">
						<input type="submit" name="submit" value="Sign in" class="btn btn-default" id="btn_login">

							    </div>
				 			</div>
					</div>
							</form>
				</div>
			</div>
		</div>
	</section>

</body>
<nav class="navbar navbar-default navbar-fixed-bottom">
  <div class="container">
    <p id="corp">
    	Copyright (C) 2015 - YourLoteria
    </p>
  </div>
</nav>
</html>