<?php

$db_host = 'localhost';
$db_uname = 'admin';
$db_pass = 'movement71';
$db_name = 'deulama';

try {
    $db = new PDO("mysql:host=$db_host;dbname=$db_name;", $db_uname, $db_pass);
    $cek = "Koneksi Berhasil";
    // echo $cek;
} catch (PDOException $x) {
    die($x->getMessage());
}

?>