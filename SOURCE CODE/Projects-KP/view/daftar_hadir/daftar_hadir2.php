<?php

	require_once'../../function/connection.php';

	if(isset($_POST['simpan'])){
		$namakaryawan = $_POST['karyawan'];
		$jeniskelamin = $_POST['jk'];
		$kehadiran = $_POST['kd'];
		$keterangan = $_POST['keterangan'];
		$status = $_POST['status'];
		$bagian = $_POST['bagian'];
		$jamdatang = $_POST['jamdatang'];
		$jampulang = $_POST['jampulang'];
		$shift = $_POST['shift'];
		$r = mysqli_query($link, "INSERT INTO hadir(karyawan,jk,kd,keterangan,status,bagian,jamdatang,jampulang,shift) VALUES ('$namakaryawan','$jeniskelamin','$kehadiran','$keterangan','$status','$bagian','$jamdatang','$jampulang','$shift')");
		if($r){
			echo "berhasil";

		}else{
			echo "gagal";
		}
	}
?>


<!DOCTYPE html >
<html>
<head>
	<title> daftar kehadiran karyawan</title></head>
<body>
<form action="" method="POST">
<table border="1" align="center" bgcolor="#2b7cff">

	<tr>
		<td colspan="3">
			<h2 align="center">Absensi Karyawan </h2>
		</td>
	</tr>
	<tr>
		<td>Nama karyawan</td>
		<td>
			<input name="karyawan" type="text" size="50" maxlength="50">
		</td>
	</tr>
	<tr>
	<td>Jenis Kelamin</td>
	<td>
		<select name="jk">
			<option>laki-laki</option>
			<option>perempuan</option>
		</select>
	</td>
	</tr>
	<tr>
		<td>keHadiran</td>
		<td>
			<select name="kd">
				<option>Ya</option>
				<option>Tdak</option>
			</select>
		</td>
	</tr>
	<tr>
	<td>Keterangan Tidak Hadir</td>
		<td>
			<textarea name="keterangan" cols="25" rows="4"></textarea>
		</td>
	</tr>
	<tr>
		<td>Status</td>
		<td>
			<select name="status">
			<option>Nikah</option>
			<option>Belum nikah</option>
		</select>
	</tr>
	<tr>
		<td>Bagian</td>
		<td>
			<select name="bagian">
				<option>Akunting</option>
				<option>Oprator</option>
				<option>kabag</option>
				<option>satpam</option>
				<option>manejer</option>
			</select>
		</td>
	</tr>
	<tr>
	<td>Jam Datang</td>
	<td><input name="jamdatang" type="text" size="24" maxlength="24" value="" placeholder="JJ:MM:DD"></td>
	</tr>
	<tr>
	<td>Jam Pulang</td>
	<td><input name="jampulang" type="text" size="24" maxlength="24" value="" placeholder="JJ:MM:DD"></td>
	</tr>
	<tr>
		<td>Shift</td>
		<td>
			<select name="shift">
				<option>Pagi</option>
				<option>Siang</option>
				<option>Malam</option>
				<option>Lembur</option>
			</select>
	</td>
	</tr>
	<tr>
	<td colspan="3" align="center">
	<input  type="submit" name="simpan" value="Simpan">
	</td>
	</tr>
</table>
</form>
<footer>
 	&copy; PT.Yoniko asia prima 2019
	</footer>
</body>
</html>