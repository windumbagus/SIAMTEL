<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
	<?php
	require_once("../config/koneksi.php"); 
		$username = $_GET['username'];
$sql1=mysqli_query($GLOBALS["___mysqli_ston"], "DELETE from user WHERE username = '$username'")or die(mysqli_error($GLOBALS["___mysqli_ston"]));
$sql2=mysqli_query($GLOBALS["___mysqli_ston"], "DELETE from master WHERE username = '$username'")or die(mysqli_error($GLOBALS["___mysqli_ston"]));
$sql3=mysqli_query($GLOBALS["___mysqli_ston"], "DELETE from nilai WHERE username = '$username'")or die(mysqli_error($GLOBALS["___mysqli_ston"]));
$sql4=mysqli_query($GLOBALS["___mysqli_ston"], "DELETE from jurnal WHERE username = '$username'")or die(mysqli_error($GLOBALS["___mysqli_ston"]));

	if ($sql1|$sql2|$sql3|$sql4>0){
		echo " <script>window.location.href='../index.php?page=admin/manage_user.php&alert=success';</script> ";
		} else {
				echo "<script>window.location.href='../index.php?page=admin/manage_user.php&alert=failed';</script> ";
				}


		// DELETE Multiple Tapi Harus ke isi semua Tabel nya jika salah satu kosong tidak bisa ke hapus		
		// $sql = mysql_query(" DELETE from user,master,nilai USING user INNER JOIN master INNER JOIN nilai WHERE user.username = '$username' AND master.username=user.username AND nilai.username=user.username")
		// 		or die(mysql_error());
		// 	if($sql>0) {
		// 				echo " <script>window.location.href='../index.php?page=admin/manage_user.php&alert=success';</script> ";
		// 				} else {
		// 				echo "Gagal Menghapus Data!";
		// 				}

	?>

