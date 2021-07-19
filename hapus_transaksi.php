<?php
    include 'config.php';
    $id = $_GET['id'];

    $result = mysqli_query($conn, "DELETE FROM transaksi WHERE id_trs= '{$id}'");

    header('location: index.php');
?>