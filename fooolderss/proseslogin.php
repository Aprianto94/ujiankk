<?php
    include("koneksi.php");


    $nik = $_REQUEST["nik"];
    $nama_lengkap = $_REQUEST["nama_lengkap"];



    $query = $koneksi->query("select * from akun where nik='$nik' AND nama_lengkap='$nama_lengkap'")->fetchAll();
    

        header("Location:index.php");
    
?>