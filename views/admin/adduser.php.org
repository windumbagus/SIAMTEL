<html>
  <head>
  <meta charset="utf-8">
  <title>Add User</title>
  </head>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <?php
    if (@$_GET['alert']=='success') {
        
          echo "
          <div class='alert alert-success alert-dismissable fade in'>
           <a href='index.php?page=admin/adduser.php' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>Success</strong> Berhasil Membuat User.
          </div>";
    }else{
      if (@$_GET['alert']=='duplicate') {
        echo "
          <div class='alert alert-danger alert-dismissable fade in'>
           <a href='index.php?page=admin/adduser.php' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>Failed</strong> Username telah di gunakan.
          </div>";
      }
    }
  ?>

  <body>
   <form class="col col-md-6" method = "post" action = "models/user.php">
   <table class= "panel panel-default table table-hover">
               <tr>
                 <td>Username:</td>
                 <td><input type = "text" class="form-control" name = "username" placeholder="Enter Username" required="true">
                 </td>
              </tr>

              <tr>
                 <td>Password :</td>
                 <td> <input type = "password" class="form-control" name = "password" placeholder="Enter Password" required="true">
                 </td>
              </tr>

              <tr>
                 <td>Nama Lengkap:</td>
                 <td><input type = "text" class="form-control" name = "nama" placeholder="Enter Full Name" required="true">
                 </td>
              </tr>

              <td>No Telepon/ HP :</td>
                 <td><input type = "text" class="form-control" name = "tlp" placeholder="Enter Cell Phone Number" required="true">
                 </td>
              </tr>
                          
              <tr>           
                <td>Alamat:</td>
                 <td> <textarea name = "alamat" class="form-control" rows = "5" cols = "40" placeholder="Enter Address" required="true"></textarea></td>
              </tr>

              <tr>           
                <td>Asal Sekolah/Kampus:</td>
                 <td> <input type=" text" class="form-control" name = "asal" placeholder="Enter School/Campus" required="true">
                 </td>
              </tr>

             <tr>           
                <td>Jurusan:</td>
                 <td> <input type=" text" class="form-control" name = "jurusan" placeholder="Enter What you Enrol at School/Campus" required="true">
                 </td>
              </tr>
              
              
              	<td>
                 	<input type = "submit" class="btn btn-primary" name = "submit" value = "Create User"> 
                </td>
           </table>
  			
        </form>
  </body>
      <script src="assets/js/jquery-3.2.1.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
</html>