<?php 

require_once'../../function/connection.php';

$id = $_GET['id'];
$query = mysqli_query($link, "SELECT * FROM struk WHERE id = '$id'");
$data = mysqli_fetch_assoc($query);
if (isset($_POST['Delete'])){
	$nama = $_POST['nama'];
	 $upah = $_POST['upah'];
	 $gajipokok = $_POST['gaji_pokok'];
	 $tunjangantetap = $_POST['tunjangan_tetap'];
	 $tunjanganjabatan = $_POST['tunjangan_jabatan'];
	 $premi = $_POST['premi'];
	 $potonganpremi = $_POST['potongan_premi'];
	 $potongankesiangan= $_POST['potongan_kesiangan'];
	 $potonganpph21 = $_POST['potongan_pph21'];
	 $potonganbpjs = $_POST['potongan_bpjs'];
	 $potongankoprasi = $_POST['potongan_koprasi'];
	 $potongankpsi = $_POST['potongan_spsi'];
	$ubah = mysqli_query($link, "UPDATE struk SET nama ='$nama', upah = '$upah', gajipokok ='$gaji_pokok', tunjangantetap ='$tunjangan_tetap', tunjanganjabatan ='$tunjangan_jabatan', premi ='$premi', potonganpremi ='$potongan+premi',  potongankesiangan ='$potongan_kesiangan', potongan_pph21 ='$potonganpph21', potongankoprasi ='$potongan_koprasi', potongaspsi ='$potongan_spsi' WHERE id ='$id' ");

if(hapus_data($_GET['id'])){
	header('location: index.php');

}
	else echo 'gagal menghapus';
}


 ?>