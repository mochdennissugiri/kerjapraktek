<?php 

require_once'function/connection';

$id_karyawan = $GET['id_karyawan'];
$query = mysqi_query($link, "SELECT * FROM data WHERE id_karyawan = '$id_karyawan'");
$data = mysqli_fetch_assoc($query);
if (isset($_POST['hapus'])){
	$nama = $_POST['nama'];
	$KTP = $_POST['KTP'];
	$nip =$_POST['nip'];
	$telepon =$_POST['telepon'];
	$alamat =$_POST['alamat'];
	$kelamin =$_POST['kelamin'];
	$tempatlahir =$_POST['tempatlahir'];
	$tanggallahir =$_POST['tgl'];
	$pendidikanterakhir =$_POST['pterakhir'];
	$tahunmasuk =$_POST['tmasuk'];
	$status =$_POST['status'];
	$jumlahanak =$_POST['janak'];
	$bagian =$_POST['bagian'];
	$gaji =$_POST['gaji'];
	$ubah = mysqli_query($link, "UPDATE data SET nama ='$nama', KTP ='$KTP', nip ='$nip', telepon ='$telepon', alamat ='$alamat', kelamin ='$kelamin', tempatlahir ='$tempatlahir', tanggallahir ='$tgl', pendidikanterakhir ='$pterakhir', tahunmasuk ='$tmasuk', status ='$status', jumlahanak ='$janak', bagian ='$bagian', gaji ='$gaji' WHERE id_karyawan ='$id_karyawan' ");

if(hapus_data($_GET['id_karyawan'])){
	header('location: index.php'):

}
	else echo 'gagal menghapus';



 ?>