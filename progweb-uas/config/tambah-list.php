<?php

session_start();
require_once 'koneksi.php';

if (isset($_POST['submit'])) {
    try {
        $author = $_SESSION['username'];
        $judul = $_POST['judul'];
        $cast = $_POST['cast'];
        $detail = $_POST['detail'];

        $foto = $_FILES["foto"]["name"];

        // echo $judul;
        // echo $cast;
        // echo $detail;
        // echo $foto;
        $type = $_FILES['foto']['type'];
        $temp = $_FILES['foto']['tmp_name'];

        $path = 'upload/'.$foto;
        move_uploaded_file($temp, '../upload/'.$foto);

        $sql = "INSERT INTO drama(judul, cast, detail, foto, author) VALUES(:fjudul, :fcast, :fdetail, :ffoto, :fauthor)";
        $query = $db->prepare($sql);
        $query->bindParam('fjudul', $judul);
        $query->bindParam('fcast', $cast);
        $query->bindParam('fdetail', $detail);
        $query->bindParam('ffoto', $foto);
        $query->bindParam('fauthor', $author);
        $query->execute();

        header('Location:../admin/tambah-list.php');
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

?>