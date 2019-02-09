<?php
//post nilai
require_once("../config/koneksi.php"); //Wajib 
    $username = $_POST['username'];
	$disiplin = $_POST['disiplin'];
	$sopan	  = $_POST['sopan'];
	$personal = $_POST['personal'];
	$tim 	  = $_POST['tim'];
	$adaptasi = $_POST['adaptasi'];
	$tj 	  = $_POST['tj'];
	$jujur 	  = $_POST['jujur'];
	$n_akhir  = A($disiplin,$sopan,$personal,$tim,$adaptasi,$tj,$jujur); 
	

	function A($disiplin,$sopan,$personal,$tim,$adaptasi,$tj,$jujur){
		$a =($disiplin+$sopan+$personal+$tim+$adaptasi+$tj+$jujur)/7;
		
				if ($a > 80) {
				$n_akhir = 'A';
				}elseif ($a >= 70 && $a <80 ) {
				$n_akhir = 'B';
				}elseif ($a >=60 && $a <70 ) {
				$n_akhir = 'C';
				}elseif ( $a >=50&& $a <60 ) {
				$n_akhir = 'D';
				}elseif ( $a <50 ) {
				$n_akhir = 'E';
				}
				return $n_akhir;
	
	}

	$sql = mysqli_query($GLOBALS["___mysqli_ston"], " UPDATE nilai set disiplin='$disiplin',sopan='$sopan',personal='$personal',tim='$tim',adaptasi='$adaptasi',tj='$tj',jujur='$jujur',n_akhir='$n_akhir'WHERE username='$username'")
		
			or die(mysqli_error($GLOBALS["___mysqli_ston"]));
	if($sql>0) {	
		echo " <script>window.location.href='../index.php?page=admin/penilaian.php&alert=update';</script> ";
		//header("location:../index.php?page=dashboard");
	} else {
		echo "Gagal Menginput Nilai!";
	}

?>