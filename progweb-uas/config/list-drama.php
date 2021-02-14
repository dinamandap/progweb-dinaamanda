<?php


include 'koneksi.php';

try {
    $sql = 'SELECT * FROM drama';
    $query = $db->query($sql);
    $query->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die($e->getMessage());
}

?>