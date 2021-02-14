<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="registrasi.css" />
    <title>Registrasi-DinaAmandaPutri-18111039</title>
</head>

<body>
    <div class="container">
        <h2 class="text-center">REGISTRASI</h2>
        <h6 class="text-center">Silakan Daftar Terlebih Dahulu</h6>
        <hr>

        <form class="form" action="config/register.php" method="POST">
            <div class="form-group">
                <label>E-mail</label>
                <input type="email" name="email" class="form-control" placeholder="Masukan E-mail">
            </div>

            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" placeholder="Masukan Username">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukan Password">
            </div>


            <input type="submit" name="submit" class="btn btn-primary" value="Submit">
            <input type="reset" class="btn btn-danger" value="Reset">
        </form>
        <br>
        <a href="login.php">Sudah Punya Akun? Login Disini</a>
    </div>


    <footer class="page-footer font-small blue">


        <div class="footer-copyright text-center py-3">© Copyright by 18111039_DinaAmandaPutri_TIFRP18CNSA</div>


    </footer>


</body>

</html>