<table class= "panel panel-default table table-hover">
		<thead class="panel-heading-custom">
			<tr>
				<td>Nama</td>
				<td>Hari</td>
				<td>Tanggal</td>
				<td>Jam Masuk</td>
				<td>Jam Pulang</td>
				<td>Keterangan</td>
				<td>Jurnal Harian</td>
			</tr>
		</thead>
		<tbody>
			<?php
				require_once("config/koneksi.php");
				$sql = mysqli_query($GLOBALS["___mysqli_ston"], " SELECT * FROM master INNER JOIN jurnal ON master.username=jurnal.username AND master.tanggal=jurnal.tanggal ");
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
				<td><?php echo $data['jurnal']; ?></td>

			</tr>
			<?php
			}
			?>
		</tbody>
	</table>