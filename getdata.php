
<?php
    include('config.php');
    $id_panel   =   $_GET['id_panel'];
    // Check connection
    if ($koneksi->connect_error) {
        die("Connection failed: " . $koneksi->connect_error);
    }
    
    $sql        =   "SELECT isi_pesan FROM tb_panel WHERE id_panel='$id_panel' LIMIT 1";
    $result     =   $koneksi->query($sql);
    
    if ($result->num_rows > 0) {
    
    while ($row = $result->fetch_assoc())
    {
        echo $row['isi_pesan'];
    }
        
    } else {
        echo "Error:" . $sql . "<br>" . $$koneksi->error;
    }
    
    $koneksi->close();
?>
