<?php

    $server="localhost";
    $username="root";
    $password="";
    $database="mbd-e_fp_kel6"; //ini bakal diganti

    $koneksi = mysqli_connect($server,$username,$password,$database) or die("koneksi menuju database gagal");
?>