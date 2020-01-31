<?php 

require_once'../../function/connection.php';


$result = mysqli_query($link,"SELECT * FROM  hadir ORDER BY id_kehadiran DESC");


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>kelola kehadiran | PT.Yoniko asia prima</title>
 </head>
 <body>
 	<a href="daftar_hadir2.php">add new user </a><br/><br/>

 	<table width='80%' border=1 bgcolor="#2b7cff">
 		<tr>
 			<th>karyawan</th> <th>jk</th> <th>kd</th> <th>keterangan</th> <th>status</th> <th>bagian</th> <th>jamdatang</th> <th>jampulang</th> <th>Shift</th> <th>aksi</th>
 		</tr>
 		<?php 
           while($user_datas = mysqli_fetch_array ($result)) {

			echo"<tr>";
			echo "<td>",$user_datas['karyawan']."</td>";
			echo "<td>",$user_datas['jk']."</td>";
			echo "<td>",$user_datas['kd']."</td>";
			echo "<td>",$user_datas['keterangan']."</td>";
			echo "<td>",$user_datas['status']."</td>";
			echo "<td>",$user_datas['bagian']."</td>";
			echo "<td>",$user_datas['jamdatang']."</td>";
			echo "<td>",$user_datas['jampulang']."</td>";
			echo "<td>",$user_datas['Shift']."</td>";
			echo "<td><a href='edit.php?id=$user_datas[id_kehadiran]'>edit</a> |<a href='Delete.php?id=$user_datas[id_kehadiran]'>Delete</a></td></tr>";
 
		}

		 ?>
		</table>
 </body>
 </html>