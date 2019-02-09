<?php

require_once("../config/koneksi.php"); //Wajib 
 date_default_timezone_set("Asia/Jakarta");
    $tanggal = date('Y-m-d');
    $username = $_POST['username'];
    $jurnal =  $_POST['jurnal'];

    $data_jurnal = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM jurnal WHERE tanggal = '".$tanggal."' AND username = '".$username."' ");
                $query = mysqli_fetch_array($data_jurnal);


	if($query['tanggal']!=$tanggal) {
	    $sql = mysqli_query($GLOBALS["___mysqli_ston"], " INSERT INTO jurnal (username,tanggal,jurnal) VALUES ('$username','$tanggal','$jurnal')")
				or die(mysqli_error($GLOBALS["___mysqli_ston"]));
			if($sql>0) {	
				echo " <script>window.location.href='../index.php?page=user/jurnal.php&alert=success';</script> ";
			}
	} else {
			echo " <script>window.location.href='../index.php?page=user/jurnal.php&alert=failed';</script> ";
		   }	

?>