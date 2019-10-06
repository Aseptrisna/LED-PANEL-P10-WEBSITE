<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>LED P10 2019</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="#">PANEL LED 2019</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Beranda</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="tambah.php">Tambah Led
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	
	<div class="container" style="margin-top:20px">
		<h2>Update Data/Pesan Led</h2>
		
		<hr>
		
		<?php
		//jika sudah mendapatkan parameter GET id dari URL
		if(isset($_GET['id_panel'])){
			//membuat variabel $id untuk menyimpan id dari GET id di URL
			$id_panel = $_GET['id_panel'];
			
			//query ke database SELECT tabel mahasiswa berdasarkan id = $id
			$select = mysqli_query($koneksi, "SELECT * FROM tb_panel WHERE id_panel='$id_panel'") or die(mysqli_error($koneksi));
			
			//jika hasil query = 0 maka muncul pesan error
			if(mysqli_num_rows($select) == 0){
				echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
				exit();
			//jika hasil query > 0
			}else{
				//membuat variabel $data dan menyimpan data row dari query
				$data = mysqli_fetch_assoc($select);
			}
		}
		?>
		
		<?php
		//jika tombol simpan di tekan/klik
		if(isset($_POST['submit'])){
			$id_panel			= $_POST['id_panel'];
			$isi_pesan			= $_POST['isi_pesan'];
			$lokasi_led	        = $_POST['lokasi_led'];
			date_default_timezone_set('Asia/Jakarta');
            $tanggal = date("Y-m-d H:i:s");

			$sql = mysqli_query($koneksi, "UPDATE tb_panel SET isi_pesan='$isi_pesan', lokasi_led='$lokasi_led', tanggal='$tanggal' WHERE id_panel='$id_panel'") or die(mysqli_error($koneksi));
			
			if($sql){
				echo '<script>alert("Berhasil menyimpan data Led."); document.location="edit.php?id_panel='.$id_panel.'";</script>';
			}else{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
		}
		?>
		
		<form action="edit.php?id_panel=<?php echo $id_panel; ?>" method="post">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">ID LED</label>
				<div class="col-sm-10">
					<input type="text" name="id_panel" class="form-control" value="<?php echo $data['id_panel']; ?>" size="4" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">PESAN LED</label>
				<div class="col-sm-10">
					<input type="text" name="isi_pesan" value="<?php echo $data['isi_pesan']; ?>" class="form-control" required>
				</div>
			</div>

		<div class="form-group row">
				<label class="col-sm-2 col-form-label">LOKASI LED</label>
				<div class="col-sm-10">
					<input type="text" name="lokasi_led" value="<?php echo $data['lokasi_led']; ?>" class="form-control" required>
				</div>
			</div>			
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">&nbsp;</label>
				<div class="col-sm-10">
					<input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
				</div>
			</div>
		</form>
		
	</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
</body>
</html>