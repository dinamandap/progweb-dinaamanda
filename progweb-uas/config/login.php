<?php

session_start();

include 'koneksi.php';

if (isset($_POST['submit'])) {
    try {
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $sql = "SELECT * FROM users WHERE username = :username AND password=:password";
        $query = $db->prepare($sql);
        $query->bindParam(':username', $username);
        $query->bindParam(':password', $password);
        $query->execute();

        if ($query->rowCount() > 0) {
            $_SESSION['status'] = 'ok';
            $_SESSION['username'] = $_POST['username'];
            header('Location:../admin/index.php');
        }else{
            hedaer('Location:../login.php');
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}


?>