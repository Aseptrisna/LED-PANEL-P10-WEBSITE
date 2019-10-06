<?php


	if($_SERVER['REQUEST_METHOD']=='POST'){
		//MEndapatkan Nilai Dari Variable
		$id_panel   = $_POST['id_panel'];
		$isi_pesan  = $_POST['isi_pesan'];
		$lokasi_led = $_POST['lokasi_led'];
		date_default_timezone_set('Asia/Jakarta');
        $tanggal = date("Y-m-d H:i:s");

		//import file koneksi database
		require_once('koneksi.php');

		//Membuat SQL Query
		$sql = "UPDATE tb_panel SET isi_pesan='$isi_pesan', lokasi_led='$lokasi_led', tanggal='$tanggal' WHERE id_panel='$id_panel'";

		//Meng-update Database
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Update Data Pegawai';
		}else{
			echo 'Gagal Update Data Pegawai';
		}

		mysqli_close($con);
	}
?>
