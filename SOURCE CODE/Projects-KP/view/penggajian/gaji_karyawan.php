<?php 


	require_once'../../function/connection.php';

	if(isset ($_POST['simpan'])){
		$nama = $_POST['nama'];
		$upah = $_POST['upah'];
		$gapok = $_POST['gaji_pokok'];
		$tetap = $_POST['tunjangan_tetap'];
		$tjabatan = $_POST['tunjangan_jabatan'];
		$premi = $_POST['premi'];
		$ppremi = $_POST['potongan_premi'];
		$pkesiangan = $_POST['potongan_kesiangan'];
		$pph21 = $_POST['potongan_pph21'];
		$pbpjs = $_POST['potongan_bpjs'];
		$pkoprasi = $_POST['potongan_koprasi'];
		$pspsi = $_POST['potongan_spsi'];
		$r = mysqli_query($link, "INSERT INTO struk VALUES ('', '$nama','$upah','$gapok','$tetap','$tjabatan','$premi','$ppremi','$pkesiangan','$pph21','$pbpjs','$pkoprasi','$pspsi')");
		if ($r) {
			echo "berhasil";
		}else
			{echo "gagal";
		}




	}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Slip gaji</title>
</head>
<body>
	<header>struk gaji</header>
	<form action="" method="POST">

		<table>
			<tr>
				<td>nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>upah</td>
				<td><input type="text" name="upah"></td>
			</tr>
			<tr>
				<td>gaji pokok</td>
				<td><input type="text" name="gaji_pokok"></td>
			</tr>
			<tr>
				<td>tunjangan tetap</td>
				<td><input type="text" name="tunjangan_tetap"></td>
			</tr>
			<tr>
				<td>tunjangan jabatan</td>
				<td><input type="text" name="tunjangan_jabatan"></td>
			</tr>
			<tr>
				<td>premi</td>
				<td><input type="text" name="premi"></td>
			</tr>
			<tr>
				<td>potongan premi</td>
				<td><input type="text" name="potongan_premi"></td>
			</tr>
			<tr>
				<td>potongan kesiangan</td>
				<td><input type="text" name="potongan_kesiangan"></td>
			</tr>
			<tr>
				<td>potongan pph21</td>
				<td><input type="text" name="potongan_pph21"></td>
			</tr>
			<tr>
				<td>potongan bpjs</td>
				<td><input type="text" name="potongan_bpjs"></td>
			</tr>
			<tr>
				<td>potongan koprasi</td>
				<td><input type="text" name="potongan_koprasi"></td>
			</tr>
			<tr>
				<td>potongan spsi</td>
				<td><input type="text" name="potongan_spsi"></td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="simpan" value="simpan">
				</td>
			</tr>
		</table>
	</form>
</body>
<footer>
		&copy; PT.Yoniko asia prima 2019
</footer>
</html>