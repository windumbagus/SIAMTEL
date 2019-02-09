
<html>
<head>
<meta charset="utf-8">
<title>View Absen</title>
</head>

<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<body>
<table class= "panel panel-default table table-hover">
	<thead class="panel-heading-custom">
		<tr>
			<td>Nama</td>
			<td>Hari</td>
			<td>Tanggal</td>
			<td>Jam Masuk</td>
			<td>Jam Pulang</td>
			<td>Keterangan</td>
			
		</tr>
	</thead>
	<tbody>
	<?php

		require_once("config/koneksi.php");

		$sql = mysqli_query($GLOBALS["___mysqli_ston"], " SELECT * FROM master order by tanggal desc ");
		while ( $data = mysqli_fetch_array($sql) ){

	?>
		<tr>
			
			<td><?php echo $data['nama']; ?></td>
			<td><?php
					$tgl = $data['tanggal'];
					$day = date('D', strtotime($tgl));
					$dayList = array(
						'Sun' => 'Minggu',
						'Mon' => 'Senin',
						'Tue' => 'Selasa',
						'Wed' => 'Rabu',
						'Thu' => 'Kamis',
						'Fri' => 'Jumat',
						'Sat' => 'Sabtu'
					);
					echo $dayList[$day];
				?>
			</td>
			<td><?php echo $data['tanggal']; ?></td>
			<td><?php echo $data['jam_masuk']; ?></td>
			<td><?php echo $data['jam_pulang']; ?></td>
			<td><?php echo $data['keterangan']; ?></td>

		</tr>
	<?php

		}

	?>
	</tbody>
</table></body>

    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</html>


<!-- 
		$sql = mysql_query(" SELECT master.nama,master.tanggal,master.jam_masuk,master.jam_pulang,master.keterangan,jurnal.jurnal FROM master INNER JOIN jurnal ON master.tanggal=jurnal.tanggal AND master.username=jurnal.username "); -->