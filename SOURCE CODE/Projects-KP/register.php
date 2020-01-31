<?php

  require_once 'function/connection.php';
  require_once 'function/function.php';

  if(isset($_POST['submit'])) {
  	$nama = $_POST['username'];
  	$pass = $_POST['password'];

  	if(!empty(trim($nama)) & !empty(trim($pass))){

  		//memasukan ke database
  		if(register_user($nama,$pass)){
  		echo "berhasil";
  	}else{
  		echo "gagal daftar";
  	}

  	}else{
  		echo"tidak boleh kosong";
  	}
  }

  
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register | PT.Yoniko asia prima</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<h1>Register</h1>
	<nav>
		<a href="index.php">Home</a>
		<a href="register.php">Register</a>
		<a href="login.php">Login</a>
		<a href="akun.php">akun</a>
	</nav>
	</header>


	<form action="register.php" method="POST">

		<label>Username</label><br>
		<input type="text" name="username" placeholder="masukan username"><br><br>

		<label>Password</label><br>
		<input type="password" name="password" placeholder="masukan password"><br><br>

		<!-- <label>Nama lengkap</label><br>
		<input type="text" name="namal" placeholder="masukan nama"><br><br>

 		<label>Email</label><br>
		<input type="text" name="email" placeholder="masukan email anda"><br><br>
 -->
		<input type="submit" name="submit" value="Register">

	</form>


	<footer>
		&copy; PT.Yoniko asia prima 2019
	</footer>
</body>
</html>