<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>Login-DinaAmandaPutri-18111039</title>
</head>

<body>
    <div class="container">
        <h2 class="text-center">LOGIN</h2>
        <h6 class="text-center">Silakan Login Terlebih Dahulu</h6>
        <hr>

        <form class="form" action="config/login.php" method="POST">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" id="username" name="username" class="form-control"
                    placeholder="Masukan Username" required>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Masukan Password"
                    required>
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Submit">
            <input type="reset" class="btn btn-danger" value="Reset">
        </form>
        <br>
        <a href="registrasi.php">Belum Punya Akun? Daftar Disini</a>

    </div>
    <br>
    <br>
    <br>

    <footer class="page-footer font-small blue">


        <div class="footer-copyright text-center py-3">© Copyright by 18111039_DinaAmandaPutri_TIFRP18CNSA</div>


    </footer>

</body>

</html>