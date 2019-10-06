<?php

	require_once('koneksi.php');

	//Membuat SQL Query
	$sql = "SELECT * FROM tb_panel";

	//Mendapatkan Hasil
	$r = mysqli_query($con,$sql);

	//Membuat Array Kosong
	$result = array();

	while($row = mysqli_fetch_array($r)){

		//Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat
		array_push($result,array(
			"id_panel"=>$row['id_panel'],
			"isi_pesan"=>$row['isi_pesan'],
			"lokasi_led"=>$row['lokasi_led'],
			"tanggal"=>$row['tanggal']
		));
	}

	//Menampilkan Array dalam Format JSON
	echo json_encode(array('result'=>$result));

	mysqli_close($con);
?>
