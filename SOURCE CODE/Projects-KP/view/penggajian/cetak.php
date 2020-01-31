<?php 

	require_once'../../function/connection.php';
	require_once'pdf.php';


	$cetak = 
	'<style>
	 	@page { margin: 20px; }
	 </style>

	 <h3 align="center">Laporan Penggajian</h3><br/><br/>
	';

	$query = mysqli_query($link, "SELECT * FROM struk ORDER BY id DESC");

	$cetak .=  
	'<table>
		<tr>
			<th>
              Name
            </th>
            <th>
              upah
            </th>
            <th>
              gaji pokok
            </th>
            <th>
              tunjangan tetap
            </th>
            <th>
              tunjangan jabatan
            </th>
            <th>
              premi
            </th>
            <th>
              potongan premi
            </th>
            <th>
              potongan kesiangan
            </th>
            <th>
              potongan pph21
            </th>
            <th>
              potongan bpjs
            </th>
            <th>
              potongan koprasi
            </th>
            <th>
              potongan spsi
            </th>
	 	</tr>
	';
	while($user_data = mysqli_fetch_assoc($query)){
		$cetak .= 
		'<tr>
			<td>'.$user_data['nama'].'</td>
		    <td>'.$user_data['upah'].'</td>
		    <td>'.$user_data['gaji_pokok'].'</td>
		    <td>'.$user_data['tunjangan_tetap'].'</td>
		    <td>'.$user_data['tunjangan_jabatan'].'</td>
		    <td>'.$user_data['premi'].'</td>
		    <td>'.$user_data['potongan_premi'].'</td>
		    <td>'.$user_data['potongan_kesiangan'].'</td>
		    <td>'.$user_data['potongan_pph21'].'</td>
		    <td>'.$user_data['potongan_bpjs'].'</td>
		    <td>'.$user_data['potongan_koprasi'].'</td>
		    <td>'.$user_data['potongan_spsi'].'</td>
		</tr>
		';
	}

	$cetak .= '</table>';

	$pdf = new Pdf();
	$filename = 'Laporan-Penggajian.pdf';
	$pdf->loadHtml($cetak);
	$pdf->render();
	$pdf->stream($filename, array("Attachment" => false));
	exit(0); 
	

 ?>