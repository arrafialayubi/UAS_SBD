<?php
    include 'config.php';
    $id = $_GET['id'];

    $result = mysqli_query($conn, "DELETE FROM pembayaran WHERE id_bayar= '{$id}'");

    header('location: index.php');
?>