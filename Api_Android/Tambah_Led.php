<?php
include('koneksi.php');
	if($_SERVER['REQUEST_METHOD']=='POST'){

		//Mendapatkan Nilai Variable
		$id_panel   = $_POST['id_panel'];
		$isi_pesan  = $_POST['isi_pesan'];
		$lokasi_led = $_POST['lokasi_led'];
		date_default_timezone_set('Asia/Jakarta');
        $tanggal = date("Y-m-d H:i:s");

		//Pembuatan Syntax SQL
		$sql = "INSERT INTO tb_panel(id_panel, isi_pesan, lokasi_led, tanggal) VALUES('$id_panel', '$isi_pesan', '$lokasi_led', '$tanggal')";

		//Import File Koneksi database
		

		//Eksekusi Query database
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Menambahkan Data led Panel';
		}else{
			echo 'Gagal Menambahkan Data led Panel';
		}

		mysqli_close($con);
	}
?>
