<?php 

require_once'../../function/connection.php';


$result = mysqli_query($link,"SELECT * FROM  data ORDER BY id_karyawan DESC");


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>kelola data karyawan | PT.Yoniko asia prima</title>
 </head>
 <body>
 	<a href="input_karyawan.php">add new user </a><br/><br/>

 	<table width='80%' border="1"> 
 		<tr>
 			<th>nama</th> <th>KTP</th> <th>nip</th> <th>telepon</th> <th>alamat</th> <th>kelamin</th> <th>tempatlahir</th> <th>tgl</th> <th>ptrakhir</th> <th>tmasuk</th> <th>status</th> <th>janak</th> 
 			<th>bagian</th> <th>gaji</th> <th>aksi</th>
 		</tr>
 		<?php 
           while($user_datas = mysqli_fetch_array ($result)) {

			echo"<tr>";
			echo "<td>",$user_datas['nama']."</td>";
			echo "<td>",$user_datas['KTP']."</td>";
			echo "<td>",$user_datas['nip']."</td>";
			echo "<td>",$user_datas['telepon']."</td>";
			echo "<td>",$user_datas['alamat']."</td>";
			echo "<td>",$user_datas['kelamin']."</td>";
			echo "<td>",$user_datas['tempatlahir']."</td>";
			echo "<td>",$user_datas['tgl']."</td>";
			echo "<td>",$user_datas['ptrakhir']."</td>";
			echo "<td>",$user_datas['tmasuk']."</td>";
			echo "<td>",$user_datas['status']."</td>";
			echo "<td>",$user_datas['janak']."</td>";
			echo "<td>",$user_datas['bagian']."</td>";
			echo "<td>",$user_datas['gaji']."</td>";
			echo "<td><a href='edit.php?id=$user_datas[id_karyawan]'>edit</a> |<a href='Delete.php?id=$user_datas[id_karyawan]'>Delete</a></td></tr>";
 
		}

		 ?>
		</table>
 </body>
 </html>