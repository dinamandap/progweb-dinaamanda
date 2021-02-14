<?php

include 'config/koneksi.php';

$sql = 'SELECT * FROM drama LIMIT 4';
$query = $db->query($sql);
$query->setFetchMode(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/utama.css" />
    <title>Utama-DinaAmandaPutri-18111039</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="navbar-item ml-auto">
            <ul>
                <li><a href="login.php" class="active">Login</a></li>
                <li><a href="drama.php" class="active">Drama</a></li>
                <li><a href="jadwal.php" class="active">Jadwal Drama</a></li>
                <li><a href="about.php" class="active">Tentang</a></li>
            </ul>
        </div>
    </nav>

    <div class="container d-flex justify-content-center ">
        <img src="images/weblogo.png" style="width: 600px; height: 200px;">

    </div>

    <div class="text-center">
        <br>
        <br>
        <p>Situs ini dibuat untuk kamu yang suka Drama Korea.<br> Disini kamu bisa melihat beberapa refeensi K-Drama
            yang mungkin cocok untuk kamu tonton.<br> Seperti beberapa referensi dibawah ini <br>
        </p>
        <br>
        <br>
        <div class="row">
            <?php
                while($data = $query->fetch()){
            ?>
            <div class="col-3">
                <a href="detail.php?id=<?=$data['id'];?>" class="href-movie">
                    <h4 class="text-center"><?=$data['judul'];?></h4>
                    <img src="images/<?=$data['foto'];?>" style="width:250px; height: 350px;">
                </a><br><br>
            </div>
            <?php
            }
            ?>
        </div>
    </div>

    <footer class="page-footer font-small blue">

        <div class="footer-copyright text-center py-3" class="text-bottom">© Copyright by
            18111039_DinaAmandaPutri_TIFRP18CNSA</div>


    </footer>
    <a href="menu.html"></a>
</body>

</html>