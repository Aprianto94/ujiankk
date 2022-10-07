<?php
	$nik  = 'root';
	$nama_lengkap = '';
	try {
		// buat koneksi dengan database
		$koneksi = new PDO('mysql:host=localhost;dbname=pduli_diri;',$nik,$nama_lengkap);
		// set error mode
		$koneksi->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	}catch (PDOException $e) {
		// tampilkan pesan kesalahan jika koneksi gagal
		print "Koneksi atau query bermasalah : " . $e->getMessage() . "<br/>";
		die();
	}