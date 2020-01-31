<?php 

	function register_user($user, $pass, $nama, $email){
		global $link;

		$query 	= "INSERT INTO admin (username,password,nama,email) VALUES ('$nama','$pass','$nama','$email')";

		if(mysqli_query($link, $query))	{
			return true;
		}else{
		return false;
		}
	}

 ?>