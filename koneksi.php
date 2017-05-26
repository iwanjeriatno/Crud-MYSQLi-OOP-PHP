<?php

$host = "localhost";
$username = "root";
$password = "";
$db_name = "fikom-umi";

// koneksi ke mysql server
$mysqli = new mysqli($host, $username, $password, $db_name);

if(mysqli_connect_errno()) {
    echo "Koneksi Error!!";
    exit;
}

?>
