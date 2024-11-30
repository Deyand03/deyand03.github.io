<?php
    $hostname = "localhost";
    $user = "root";
    $password = "";
    $db_name = "mysewa";

    $db = mysqli_connect($hostname, $user, $password, $db_name);

    if($db -> connect_error){
        die("Gagal Terhubung ke database : ". mysqli_connect_error());
    }
?>