<html>
<head>
<meta charset="utf-8">
<title>View Laporan</title>
</head>

<body>
			<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<!-- 		   	<link rel="stylesheet" type="text/css" href="assets/dataTable/DataTables-1.10.16/css/jquery.dataTables.min.css">
		   	<link rel="stylesheet" type="text/css" href="assets/dataTable/Buttons-1.4.2/css/buttons.dataTables.min.css">
 -->
	<div> 
		   <?php 
		   require_once("config/koneksi.php");
		   $username = $_GET['id'];
		   $query_mysql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM user WHERE username='$username'")or die(mysqli_error($GLOBALS["___mysqli_ston"]));
		   while($user = mysqli_fetch_array($query_mysql)){
			?>
		   	<h4 class="thead">Laporan Absensi & Penilaian Anak PKL / Magang di TELKOM Div. IS Center Regional 3</h4><br><br>
		      
		      <form class="col col-md-6" > 
		      <p>Biodata :</p> 
			   	  <table id="data1" class= "panel panel-default table table-hover">
			            <tr>
			               <td>Username:</td>
			               <td><?php echo $user['username'] ?></td>
			            </tr>

			            <tr>
			               <td>Nama Lengkap:</td>
			               <td><?php echo $user['nama'] ?></td>
			            </tr>

			            <tr>           
			               <td>Alamat:</td>
			               <td> <?php echo $user['alamat'] ?></td>
			            </tr>

			            <tr>
			               <td>No Telepon/ HP :</td>
			               <td><?php echo $user['tlp'] ?></td>
			            </tr>
			            
			            <tr>
			               <td>Asal Sekolah/Kampus :</td>
			               <td><?php echo $user['asal'] ?></td>
			            </tr>

			            <tr>
			               <td>Jurusan:</td>
			               <td><?php echo $user['jurusan'] ?></td>
			            </tr>
			   	  </table>
		      </form>
			<?php
		   	}
		   	?>
	</div>

	<div class="col col-md-12" ><br><br>
	<p>Rekap Absensi :</p>
		<table id="data1" class= "panel panel-default table table-hover">
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
				$sql = mysqli_query($GLOBALS["___mysqli_ston"], " SELECT * FROM master INNER JOIN jurnal ON master.username=jurnal.username AND master.tanggal=jurnal.tanggal WHERE master.username='$username' order by master.tanggal desc ");
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
	</div>

	<div>
		<form class="col col-md-6" ><br><br>
		<p>Penilaian :</p>
		 	<?php 
			   require_once("config/koneksi.php");
			   $username = $_GET['id'];
			   $query_mysql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM nilai WHERE username='$username' ")or die(mysqli_error($GLOBALS["___mysqli_ston"]));
			   while($nilai = mysqli_fetch_array($query_mysql)){
		   	?>

				<table id="data1" class= "panel panel-default table table-hover">
					<tr>
		               <td>Kedisiplinan :</td>
		               <td><?php echo $nilai['disiplin'] ?></td>
		            </tr>

					<tr>
		               <td>Sopan Santun :</td>
		               <td><?php echo $nilai['sopan'] ?></td>
		            </tr>

					<tr>
		               <td>Kemampuan Kerja Personal :</td>
		               <td> <?php echo $nilai['personal'] ?></td>
		            </tr>

					<tr>
		               <td>Kemampuan Kerja Tim :</td>
		               <td><?php echo $nilai['tim'] ?></td>
		            </tr>

					<tr>
		               <td>Kemampuan Beradaptasi :</td>
		               <td><?php echo $nilai['adaptasi'] ?></td>
		            </tr>

					<tr>
		               <td>Tanggung Jawab :</td>
		               <td><?php echo $nilai['tj'] ?></td>
		            </tr>

					<tr>
		               <td>Kejujuran :</td>
		               <td><?php echo $nilai['jujur'] ?></td>
		            </tr>

		            <tr>
		            	<td>Nilai Akhir :</td>
		            	<td><?php echo $nilai['n_akhir'] ?></td>
		            </tr>

			<?php
			}
				$url = isset($_SERVER['HTTP_REFERER']) ? htmlspecialchars($_SERVER['HTTP_REFERER']) : '';
			?>	  
				</table>
					<p> Keterangan :<br>
		            	A = Sangat Baik<br>
		            	B = Baik<br>
		            	C = Cukup<br>
		            	D = Kurang<br>
		            	E = Sangat Kurang<br>
		            </p>
				 <a class="btn btn-default" href="<?=$url?>">Back</a>
		

		<script src="assets/js/jquery-3.2.1.min.js"></script>
    	<script src="assets/js/bootstrap.min.js"></script>
<!--         <script src="assets/dataTable/DataTables-1.10.16/js/jquery.dataTables.min.js"></script>
        <script src="assets/dataTable/Buttons-1.4.2/js/dataTables.buttons.min.js"></script>
        <script src="assets/dataTable/Buttons-1.4.2/js/buttons.flash.min.js"></script>
		<script src="assets/dataTable/pdfmake-0.1.32/pdfmake.min.js"></script>
 -->
		</form>
	</div>
<!-- <script>
	$(document).ready(function() {
	    $('#data1').DataTable( {
	        dom: 'Bfrtip',
	        buttons: [
	             'excel', 'pdf', 'print'
	        ]
	    } );
    } );
</script>
 -->
</body>
</html>

