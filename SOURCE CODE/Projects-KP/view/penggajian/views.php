<?php

require_once'../../function/connection.php';

	$result = mysqli_query($link,"SELECT * FROM struk ORDER BY id DESC");


  ?>
  <!DOCTYPE html>
  <html>
  <head>
  	<title>struk gaji</title>
  </head>
  <body>
  	<a href="gaji_karyawan.php">Add New User</a><br/><br/>

<table width='80%' border=1>

	<tr>
		<th>nama</th> <th>upah</th> <th>gaji_pokok</th> <th>tunjangan_tetap</th> <th>tunjangan_jabatan</th> <th>premi</th> <th>potongan_premi</th> <th>potongan_kesiangan</th> <th>potongan_pph21</th> <th>potongan_bpjs</th> <th>potongan_koprasi</th> <th>potongan_spsi</th> <th>update</th> <th>Aksi</th>
	</tr>
	<?php
	while($user_data = mysqli_fetch_array($result)) {
		echo"<tr>";
		echo "<td>",$user_data['nama']."</td>";
		echo "<td>",$user_data['upah']."</td>";
		echo "<td>",$user_data['gaji_pokok']."</td>";
		echo "<td>",$user_data['tunjangan_tetap']."</td>";
		echo "<td>",$user_data['tunjangan_jabatan']."</td>";
		echo "<td>",$user_data['premi']."</td>";
		echo "<td>",$user_data['potongan_premi']."</td>";
		echo "<td>",$user_data['potongan_kesiangan']."</td>";
		echo "<td>",$user_data['potongan_pph21']."</td>";
		echo "<td>",$user_data['potongan_bpjs']."</td>";
		echo "<td>",$user_data['potongan_koprasi']."</td>";
		echo "<td>",$user_data['potongan_spsi']."</td>";
		echo "<td><a href='edit.php?id=$user_data[id]'>edit</a> |<a href='Delete.php?id=$user_data[id]'>Delete</a></td></tr>";

	}
	?>
</table>
  <footer>
		&copy; PT.Yoniko asia prima 2019
	</footer>
  </body>
  </html>