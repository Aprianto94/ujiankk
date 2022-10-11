<?php
    include("koneksi.php");


    $user = $_REQUEST["user"];
    $nama_lengkap = $_REQUEST["Namalengkap"];



    $query = $koneksi->query("select * from login where user='$user' AND Namalengkap='$nama_lengkap'")->fetchAll();
    

        header("Location:login.php");
    
?>