<?php 
	
	session_start();
	require_once'function/connection.php';


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home | PT.Yoniko asia prima</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<h1>Selamat Datang di PT.Yoniko asia prima</h1>
	</header>

	<nav>
		<a href="index.php">Home</a>
		<a href="login/register.php">Register</a>
		<a href="login/login.php">login</a>
		<a href="penggajian.php">penggajian</a>
		<a href="data_karyawan.php">data_karyawan</a>
		<a href="daftar_hadir.php">daftar_hadir</a>
		<a href="gaji.php">gaji</a>
	</nav>

	<br><br><br>

	<ul>
		<h1>Selamat datang </h1>
	<from action="proses.php"method="post">
		<table>
			<tr>
				<td>selamat datang di aplikasi yoniko asia prima</td>
				</tr>
		</table>
	</from> 

	</ul>





	<footer>
		&copy; PT.Yoniko asia prima 2019
	</footer>
</body>
</html>