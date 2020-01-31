<?php 

	require_once'../../function/connection.php';

	$result = mysqli_query($link,"SELECT * FROM gaji ORDER BY id DESC");


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Kelola data | PT.Yoniko asia prima</title>
</head>
<body>
<a href="input.php"></a><br/><br/>

<table width='80%' border=1>

	<tr>
		<th>nama</th> <th>gaji</th> <th>tunjangan</th><th>Aksi</th>
	</tr>
	<?php
	while($user_data = mysqli_fetch_array($result)) {
		echo"<tr>";
		echo "<td>",$user_data['nama']."</td>";
		echo "<td>",$user_data['gaji']."</td>";
		echo "<td>",$user_data['tunjangan']."<td>";
		echo "<td><a href='edit.php?id=$user_data[id]'>edit</a> |<a href='Delete.php?id=$user_data[id]'>Delete</a></td></tr>";

	}
	?>
</table>

</body>
</html>