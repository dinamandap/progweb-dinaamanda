<?php

include 'config/koneksi.php';

$sql = $db->prepare("SELECT * FROM drama WHERE id = :id");
$sql->bindParam('id', $_GET['id']);
$sql->execute();


?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/deteail.css">
    <title>Detail-DinaAmandaPutri-18111039</title>
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
        <hr>
        <br>
        <?php
                while($data = $sql->fetch()){
            ?>
        <h4 class="text-center"><?=$data['judul']?></h4>
        <br>
        <img src="images/<?=$data['foto']?>" style="width: 400px; height: 550px;">
        <br>
        <br>
        <br>

        <div class="text-left">
            <br>
            <br>

            <h5 class="text-center">DETAIL</h5>
            <br>
            <p class="text-center">
                <?=$data['detail'];?>
                <br>
                <br>
                <br>
                <br>
            </p>
            <h5 class="text-center">Pemeran Utama</h5>
            <br>
            <p class="text-center">
                <?=$data['cast'];?>
                <br>
                <br>
            </p>

        </div>
        <?php
        }
        ?>
</body>

</html>