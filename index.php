<?php

	ob_start();
	session_start();
// koneksi
	require_once "config/koneksi.php";

	$query = mysqli_query($GLOBALS["___mysqli_ston"], " SELECT * FROM user WHERE username = '".$_SESSION['username']."' ");
	$data = mysqli_fetch_array($query);

	if(empty($_SESSION['username'])){
		header('location:login.php');
	} else {

?>	
<!DOCTYPE html>
<html>
		<head>
			<title>Home Page</title>
			<!-- <link rel="stylesheet" type="text/css" href="assets/global.css"/> -->
			<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		</head>

		<body>
			<div class="navbar navbar-default" id="header">
				<div class="col-sm-12">
					<a href="index.php"><img src="assets/logo/siamtel2.png" class="table-hover " width="250" height="75" align="left"></a>
					<img src="assets/logo/logo-white.png" width="150" height="60" align="right">	
				</div>					
			</div>
					<div id="container">
						<div class="navbar navbar-default">
							    <div class="sidebar col-xs-2 col-md-2 ">
							    	<ul class="nav nav-pills nav-stacked" id="nav">
							    		<p><br>
									    	 <?php
												//whether ip is from share internet
												if (!empty($_SERVER['HTTP_CLIENT_IP']))   
												{
										    	$ip_address = $_SERVER['HTTP_CLIENT_IP'];
										  		}
												//whether ip is from proxy
												elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
												{
										    	$ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
										  		}
												//whether ip is from remote address
												else
										  		{
										    	$ip_address = $_SERVER['REMOTE_ADDR'];
										  		}
										  		//for host name		 
										 		$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
											?> 
									    		<?php date_default_timezone_set("Asia/Jakarta"); echo " &raquo; Sarver Time Login ".date(" h : i : s a  ");?><br>
												<?php echo " &raquo;".date(" l , d-m-Y ");?><br>
												<?php echo "&raquo; Hostname : ".$hostname;?><br>
												<?php echo  "&raquo; Your IPV6 Address : ".$ip_address;?>

										</p>
												<?php
												if($data['opsi']=='1'){
												?>
													<?php echo  " Welcome Back Admin:<br> ".$data['nama'];?>
													<br><br>
										        <li><a href="index.php?page=admin/dashboard.php" 
										        		class="glyphicon glyphicon-home"> Dashbord</a></li>
										        <li><a href="index.php?page=admin/adduser.php" 
										        		class="glyphicon glyphicon-plus"> Add User</a></li>     
										        <li><a href="index.php?page=admin/manage_user.php" 
										        		class="glyphicon glyphicon-cog"> Manage User</a></li>
										        <li><a href="index.php?page=admin/view_absence.php" 
										        		class="glyphicon glyphicon-list-alt"> View Absence</a></li>
										        <li><a href="index.php?page=admin/view_jurnal.php"
										        		class="glyphicon glyphicon-pencil"> View Jurnal Harian</a></li>
										        <li><a href="index.php?page=admin/penilaian.php" 
										        		class="glyphicon glyphicon-ok"> Penilaian</a></li>
										        <li><a href="index.php?page=admin/laporan.php" 
										        		class=" glyphicon glyphicon-duplicate"> Laporan</a></li>
										        <li><a href="index.php?page=admin/about.php" 
										        		class="glyphicon glyphicon-pushpin"> About</a></li>
										        <li><a href="?page=admin/dashboard.php&aksi=logout" 
										        		class="glyphicon glyphicon-off"> Logout</a></li>
										        <?php
										        	} else {
										        ?>
										        		<br>
										        	   	<?php echo  "Welcome Back Again:<br> ".$data['nama'];?>
											        	<br><br>
<!-- 											        <li><a href="index.php?page=user/dashboard.php" 
											        		class="glyphicon glyphicon-home"> Dashbord</a></li> -->
											        <li><a href="index.php?page=user/absence.php"
											        		class="glyphicon glyphicon-ok"> Absence</a></li>
<!-- 											        <li><a href="index.php?page=user/view_absence.php"
											        		class="glyphicon glyphicon glyphicon-file"> View Absence</a></li> -->
											        <li><a href="index.php?page=user/about.php"
											        		class="glyphicon glyphicon-pushpin"> About</a></li>
											        <li><a href="?page=user/absence.php&aksi=logout"
											        		class="glyphicon glyphicon-off"> Logout</a></li>
										        <?php 
										        	} 
										        ?>
							        </ul>
							    </div>
									<div class=content col-xs-9 col-md-9">
										<?php
										if($data['opsi']=='1'){
											if(@$_GET['page']==''){
												$pages = "admin/dashboard.php";
											} else {
												$pages = $_GET['page'];
											}
											include ('views/'.$pages);
										} else {
											if(@$_GET['page']==''){
												$pages = "user/absence.php";
											} else {
												$pages = $_GET['page'];
											}
											include ('views/'.$pages);
										}
										?>	
									</div>
						</div>
					</div>
		</body>
	<footer class="footer text-muted">
        <center>Copyright &copy; WMB All Right Reserved 2017  </center>
  	</footer>
</html>
<?php
	ob_flush();
	if(isset($_GET['aksi'])){

		if($_GET['aksi']=='logout'){
			session_destroy();
			header('location:login.php');
		}
	}
}
?>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
