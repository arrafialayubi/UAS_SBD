<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "arrafijehansyah_311910668";
$conn = mysqli_connect($host, $user, $pass, $db);
if ($conn == false) {
    echo "Koneksi ke server gagal.";
    die();
} else echo "";