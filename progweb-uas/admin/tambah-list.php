<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="index.css" />
    <title>Tambah-List-Drama-Admin</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Halaman Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="active" href="../index.php">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="active" href="list-drama.php">List Drama</a>
                </li>
                <li class="nav-item">
                    <a class="active" href="jadwal-drama.php">Jadwal Drama</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
                </li>
            </ul>
        </div>
        <div class="icon ml-4">
            <h4>
                <i class="fas fa-user mr-4" data-toggle="tooltip" title="User Admin"></i>
                <i class="fas fa-sign-out-alt mr-4" data-toggle="tooltip" title="LogOut"></i>
            </h4>
        </div>
    </nav>

    <div class="col-md-15 p-5 pt-2">
        <h4>Tambah List Drama</h4>
        <hr>

        <form action="../config/tambah-list.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleFormControlInput1">Judul Drama</label>
                <input type="text" class="form-control" name="judul" id="exampleFormControlInput1"
                    placeholder="Masukan Judul">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Cast</label>
                <textarea class="form-control" name="cast" id="exampleFormControlTextarea1" placeholder="Masukan Cast"
                    rows="5"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Detail</label>
                <textarea class="form-control" name="detail" id="exampleFormControlTextarea1"
                    placeholder="Masukan Detail" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Masukan Gambar</label>
                <input type="file" class="form-control-file" name="foto" id="exampleFormControlFile1">
            </div>
            <button class="btn btn-primary" name="submit" type="submit">Submit</button>
        </form>

        <footer class="page-footer font-small blue">
            <div class="footer-copyright text-center py-3">© Copyright by 18111039_DinaAmandaPutri_TIFRP18CNSA</div>
        </footer>
</body>

</html>