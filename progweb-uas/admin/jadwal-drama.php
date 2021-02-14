<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="index.css" />
    <link rel="stylesheet" type="text/css" href="../fontawesome-web/css/all.min.css" />
    <title>Jadwal-Drama-Admin</title>
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
    </nav>
    <div class="col-md-15 p-5 pt-2">
        <h4>Jadwal Drama</h4>
        <hr>
        <a href="tambah-jadwal.html" class="btn btn-primary">Tambah Jadwal</a>
        <hr>

        <table class="table table-striped table-bordered text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Hari</th>
                    <th scope="col">Jam Tayang</th>
                    <th colspan="3" scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a href="tambah-jadwal.html" class="btn btn-primary">Tambah</a>
                        <a href="tambah-jadwal.html" class="btn btn-warning">Edit</a>
                        <a href="tambah-jadwal.html" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a href="tambah-jadwal.html" class="btn btn-primary">Tambah</a>
                        <a href="tambah-jadwal.html" class="btn btn-warning">Edit</a>
                        <a href="tambah-jadwal.html" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a href="tambah-jadwal.html" class="btn btn-primary">Tambah</a>
                        <a href="tambah-jadwal.html" class="btn btn-warning">Edit</a>
                        <a href="tambah-jadwal.html" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>


    </div>

    <footer class="page-footer font-small blue">
        <div class="footer-copyright text-center py-3">© Copyright by 18111039_DinaAmandaPutri_TIFRP18CNSA</div>
    </footer>
</body>

</html>