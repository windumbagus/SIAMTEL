<?php
//Create User
require_once("../config/koneksi.php"); //Wajib 

	$username = $_POST['username'];
	$password = $_POST['password'];
	$nama = $_POST['nama'];
	$alamat =$_POST['alamat'];
	$tlp = $_POST['tlp'];
	$asal=$_POST['asal'];
	$jurusan=$_POST['jurusan'];

	$sql = mysqli_query($GLOBALS["___mysqli_ston"], " INSERT INTO user ( username, password,nama,alamat,tlp,opsi,asal,jurusan) values('$username','$password','$nama','$alamat','$tlp','2','$asal','$jurusan')");
			//or die(mysql_error());
	if (mysqli_errno($GLOBALS["___mysqli_ston"]) == 1062) {
	   echo " <script>window.location.href='../index.php?page=admin/adduser.php&alert=duplicate';</script> ";
	}
	
	if($sql>0) {	
		// echo " <script>alert('Berhasil!');
		// 		window.location.href='../index.php?page=admin/dashboard.php';</script> ";
		echo " <script>window.location.href='../index.php?page=admin/adduser.php&alert=success';</script> ";

	} else {
		echo "Gagal!";
	}

?>
