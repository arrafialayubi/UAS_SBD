<?php
    include 'config.php';
    $id = $_GET['id'];

    $result = mysqli_query($conn, "DELETE FROM mobil WHERE id_mobil= '{$id}'");

    header('location: index.php');
?>