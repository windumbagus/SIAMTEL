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

	$data_nilai = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM nilai WHERE username = '".$username."' ");
    $query = mysqli_fetch_array($data_nilai);
	
	if($query['username']!=$username) {
	$sql = mysqli_query($GLOBALS["___mysqli_ston"], " INSERT INTO nilai (username,disiplin,sopan,personal,tim,adaptasi,tj,jujur,n_akhir) VALUES ('$username','$disiplin','$sopan','$personal','$tim','$adaptasi','$tj','$jujur','$n_akhir')")
			or die(mysqli_error($GLOBALS["___mysqli_ston"]));
	if($sql>0) {	
			echo " <script>window.location.href='../index.php?page=admin/penilaian.php&alert=success';</script> ";
	} 
}else {
		echo " <script>window.location.href='../index.php?page=admin/penilaian.php&alert=failed';</script> ";
	}

?>