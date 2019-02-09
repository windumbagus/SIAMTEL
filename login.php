<html>
    <head>
        <title>Login Page </title>
            <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
                <div class="page-header col-md-12">
                    <img src="assets/logo/telkom.png" width="200" height="100" align="right">
                    <h1><a href="index.php"><img src="assets/logo/siam-tel.png" width="250" height="70" align="left"></a></h1><br><br><br>
                    <h5>"Sistem Aplikasi Absensi & Penilaian Magang Telkom IS Operation Support Regional 3" </h5>
                </div>
    </head>
    <body>

        <div class="container">
            <form action="models/process.php" method="post">
                <div class="col-md-3" ></div>
                    <div class= "jumbotron col-md-6 ">
        <?php
            if (@$_GET['alert']=='failed') {
                echo " <div class='alert alert-danger alert-dismissable fade in'>
                            <a href='index.php?page=admin/manage_user.php' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                            <strong>Failed to Login</strong> Check Your Username or Password.
                        </div>";
            }
         ?> 
                       	<label>Username : </label>
                        <input type="text" class="form-control" id="user" name="username" placeholder="Enter Username" required="true" />
                        <label> Password : </label>
                        <input type="password" class="form-control" id="pass" name="password" placeholder="Enter Password" required="true" />
                        <br>
                        <input type="submit" class="btn btn-danger btn-block" id="btn" value="Login" />            
                    </div>  
                <div class="col-md-3" ></div>          
            </form>    
        </div>
        <script src="assets/js/jquery-3.2.1.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <footer class="footer text-muted">
            <center>Copyright &copy; WMB All Right Reserved 2017  </center>
        </footer>
    </body>
</html>