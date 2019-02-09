<html>
<head>
<meta charset="utf-8">
<title>Add User</title>
</head>

<body>
   <?php 
   require_once("config/koneksi.php");
   $username = $_GET['id'];
   $query_mysql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM user WHERE username='$username'")or die(mysqli_error($GLOBALS["___mysqli_ston"]));
   while($user = mysqli_fetch_array($query_mysql)){
   ?>
   <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
   <form class="col col-md-6" action="models/update.php" method="post">
         <table  class= "panel panel-default table table-hover">

            <tr>
               <td>Username:</td>
               <td><input type = "text" name = "username" class="form-control" required="true" value = "<?php echo $user['username'] ?>">
               </td>
            </tr>

            <tr>
               <td>Password :</td>
               <td> <input type = "text" name = "password" class="form-control" required="true" value = "<?php echo $user['password'] ?>">
               </td>
            </tr>

            <tr>
               <td>Nama Lengkap:</td>
               <td><input type = "text" name = "nama" class="form-control" required="true" value = "<?php echo $user['nama'] ?>">
               </td>
            </tr>

            <td>No Telepon/ HP :</td>
               <td><input type = "text" name = "tlp" class="form-control" required="true" value = "<?php echo $user['tlp'] ?>">
               </td>
            </tr>
                        
            <tr>           
              <td>Alamat:</td>
               <td> <input type = "text" name = "alamat" class="form-control" required="true" value = "<?php echo $user['alamat'] ?>"></td>
            </tr>

            <tr>           
                <td>Asal Sekolah/Kampus:</td>
                 <td> <input type=" text" class="form-control" name = "asal" required="true" value = "<?php echo $user['asal'] ?>">
                 </td>
              </tr>

             <tr>           
                <td>Jurusan:</td>
                 <td> <input type=" text" class="form-control" name = "jurusan" required="true" value = "<?php echo $user['jurusan'] ?>">
                 </td>
              </tr>
            
            	<td>
               	<input type = "submit" class="btn btn-primary" name = "submit" value = "Update User"> 
            	</td>
			</tr>
         </table>
			
      </form>
   
   <?php
   }
   ?>
</body>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</html>