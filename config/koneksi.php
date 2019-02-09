 <?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "sistem_absensi";


// Create connection
$conn = ($GLOBALS["___mysqli_ston"] = mysqli_connect($servername,  $username,  $password));

if($conn > 0) {
	$db = mysqli_select_db($GLOBALS["___mysqli_ston"], $db_name);
} else {
	echo "Koneksi Gagal!";
}

?>