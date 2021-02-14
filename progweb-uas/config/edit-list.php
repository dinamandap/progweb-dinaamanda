<?php

session_start();
require_once 'koneksi.php';

if (isset($_POST['submit'])) {
    try {
        $id = $_POST['id'];
        $judul = $_POST['judul'];
        $cast = $_POST['cast'];
        $detail = $_POST['detail'];

        $sql = "UPDATE drama SET judul='$judul', cast='$cast', detail='$detail' WHERE id = :id";
        $query = $db->prepare($sql);
        $query->bindParam('id', $id);
        $query->execute();

        header('Location:../admin/list-drama.php');
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

?>