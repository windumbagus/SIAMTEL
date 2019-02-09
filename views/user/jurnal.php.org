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
           <a href='index.php?page=user/jurnal.php' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>Success</strong> Berhasil Menambahkan Jurnal.
          </div>";
    }else if (@$_GET['alert']=='failed') {
            echo "
          <div class='alert alert-danger alert-dismissable fade in'>
           <a href='index.php?page=user/jurnal.php' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>Failed</strong> Anda Telah Menambahkan Jurnal Untuk Hari ini.
          </div>";
    }
  ?>

  <body>
   <form class="col col-md-6" method = "post" action = "models/post_jurnal.php">
                    <table class= "panel panel-default table table-hover">

                      <tr> Silahkan Isi Jurnal Anda :</tr>

                         <input type = "hidden" class="form-control" name = "username" value = "<?php echo $_SESSION['username'] ?>">
                        <tr>           
                         <textarea name = "jurnal" class="form-control" rows = "5" cols = "40" placeholder="Silahkan Isi Jurnal Harian" required="true"></textarea>
                        </tr>

                            <td>
                                <input type = "submit" class="btn btn-primary" name = "submit" value = "Post Jurnal"> 
                            </td>
                    </table>
                    </form>

  </body>
      <script src="assets/js/jquery-3.2.1.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
</html>
