<?php

  require_once 'function/connection.php';

  if(isset($_POST['login'])){
  		$user = $_POST['user'];
  		$pass = $_POST['pass'];
  		$data_user = mysqli_query($link, "SELECT * FROM admin WHERE username ='$user' AND password = '$pass' ");
  		$row = mysqli_fetch_array($data_user);
  		$username = $row['username'];
  		$password = $row['password'];
  		if($user == $username && $pass == $password){
  			header('location: index.php');
  		}else{
  			echo " Login gagal";
  		}
  }

  
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login | PT.Yoniko asia prima</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<h1>Login</h1>
	<nav>
		<!-- <a href="index.php">Home</a> -->
		<!-- <a href="register.php">Register</a> -->
		<!-- <a href="login.php">Login</a> -->
	</nav>
	</header>


	<form action="" method="POST">

		<label>Username</label><br>
		<input type="text" name="user" placeholder="masukan username"><br><br>

		<label>Password</label><br>
		<input type="password" name="pass" placeholder="masukan password"><br><br>

		<input type="submit" name="login" value="login">	
	</form>



	<footer>
		&copy; PT.Yoniko asia prima 2019
	</footer>
</body>
</html>