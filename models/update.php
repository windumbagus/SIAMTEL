<?php
//update User
require_once("../config/koneksi.php"); //Wajib 

	$username = $_POST['username'];
	$password = $_POST['password'];
	$nama = $_POST['nama'];
	$alamat =$_POST['alamat'];
	$tlp = $_POST['tlp'];
	$asal=$_POST['asal'];
	$jurusan=$_POST['jurusan'];

	$sql = mysqli_query($GLOBALS["___mysqli_ston"], " UPDATE user SET password='$password',nama='$nama',alamat='$alamat',tlp='$tlp',asal='$asal',jurusan='$jurusan' WHERE username='$username'")
			or die(mysqli_error($GLOBALS["___mysqli_ston"]));
	if($sql>0) {	
	echo " <script>window.location.href='../index.php?page=admin/manage_user.php&alert=update';</script> ";
		// echo " <script>alert('Data berhasil di Update');
		// 		window.location.href='../index.php?page=admin/manage_user.php';</script> ";

	} else {
		echo "Gagal Mengupdate Data!";
	}

?>