<?php  

require_once'../../function/connection.php';

if(isset ($_POST["simpan"])){
    $nama_karyawan = $_POST['nama'];
	$nomor_KTP = $_POST['KTP'];
	$nip = $_POST['nip'];
	$nomor_telepon = $_POST['telepon'];
	$alamat = $_POST['alamat'];
	$kelamin = $_POST['kelamin'];
	$tempatlahir = $_POST['tempatlahir'];
	$tanggallahir = $_POST['tgl'];
	$pendidikan_trakhir = $_POST['ptrakhir'];
	$tahun_masuk = $_POST['tmasuk'];
	$status_nikah = $_POST['status'];
	$jumlah_anak = $_POST['janak'];
	$bagian = $_POST['bagian'];
	$gaji_karyawan = $_POST['gaji'];
	$r = mysqli_query($link,"INSERT INTO data(
		nama,KTP,nip,telepon,alamat,kelamin,tempatlahir,tgl,ptrakhir,tmasuk,status,janak,bagian,gaji) VALUES ('$nama_karyawan','$nomor_KTP','$nip','$nomor_telepon','$alamat','$kelamin','$tempatlahir','$tanggallahir','$pendidikan_trakhir','$tahun_masuk','$status_nikah','$jumlah_anak','$bagian','$gaji_karyawan')");
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
	<title> data karyawan</title></head>
<body>
<form action="" method="POST">
<table border="1" align="center" bgcolor="#2b7cff">

	<tr>
		<td colspan="3">
			<h2 align="center">input Karyawan baru </h2>
		</td>
	</tr>
	<tr>
		<td>nama_karyawan</td>
		<td>
			<input name="nama" type="text" size="50" maxlength="50">
		</td>
	</tr>
	<tr>
		<td>nomor_KTP</td>
		<td>
			<input name="KTP" type="text" size="50" maxlength="50">
		</td>
	</tr>
	<tr>
	<tr>
	<td>nip</td>
		<td>
			<input name="nip" type="text" size="50" maxlength="50">
		</td>
	</tr>
	<tr>
	<td>nomor_telepon</td>
		<td>
			<input name="telepon" type="text" size="50" maxlength="50">
		</td>
	</tr>
	<td>alamat</td>
		<td>
			<textarea name="alamat" cols="25" rows="4"></textarea>
		</td>
	</tr>
	<tr>
	<td>kelamin</td>
	<td>
		<select name="kelamin">
			<option>laki-laki</option>
			<option>perempuan</option>
		</select>
	</td>
	</tr>
	<tr>
		<td>tempatlahir</td>
		<td>
			<input name="tempatlahir" type="text" size="50" maxlength="50">
		</td>
	</tr>
	<tr>
	<td>tanggallahir</td>
		<td>
			<input name="tgl" type="text" size="24" maxlength="24" value="" placeholder="DD,MM,YYYY"></td>
		</td>
	</tr>
	<tr>
	<td>pendidikan_trakhir</td>
	<td>
		<select name="ptrakhir">
			<option>SMP dan sederajat</option>
			<option>SMA dan sederajat</option>
			<option>D1 dan D3 sederajat</option>
			<option>S1/sarjana</option>
			<option>S2/sarjana</option>
			<option>S3/sarjana</option>
		</select>
	</td>
	</tr>
	
	<td>tahun_masuk</td>
		<td>
			<input name="tmasuk" type="text" size="50" maxlength="50">
		</td>
	</tr>
	<tr>
		<td>status_nikah</td>
		<td>
			<select name="status">
			<option>Nikah</option>
			<option>Belum nikah</option>
		</select>
	</td>
	</tr>
	<td>jumlah_anak</td>
		<td>
			<input name="janak" type="text" size="50" maxlength="50">
		</td>
	</tr>
	<tr>
		<td>bagian</td>
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
		<td>gaji_karyawan</td>
		<td>
			<input name="gaji" type="text" size="50" maxlength="50">
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

