<?php

include 'koneksi.php';

try {
    $sql = "DELETE FROM drama WHERE id = '$_GET[id]'";
    $db->exec($sql);
    header('Location:../admin/list-drama.php');
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>