<?php
    include '../page/page_config.php';
    $namafolder="../gambar_kios/"; 

    if (!empty($_FILES["foto"]["tmp_name"]))
    {
       	$id_blok 			= $_POST['id_blok'];
		$no_blok            = $_POST['no_blok'];
		$nama               = $_POST['nama'];
		$tempat             = $_POST['tempat'];
		$tanggal            = $_POST['tanggal'];
		$alamat             = $_POST['alamat'];
		$pekerjaan          = $_POST['pekerjaan'];
		$jenis_komoditas    = $_POST['jenis_komoditas'];
		$type               = $_POST['type'];
		$ukuran             = $_POST['ukuran'];
		$status_kepemilikan = $_POST['status_kepemilikan'];
        $no_shgp            = $_POST['no_shgp'];
		$status             = $_POST['status'];
        $jenis_gambar 		= $_FILES['foto']['type'];
        
        if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
        {           
            $gambar = $namafolder . basename($_FILES['foto']['name']);       
            if (move_uploaded_file($_FILES['foto']['tmp_name'], $gambar)) {
                echo '<script>alert ("Data Status Kepemilikan KIOS Berhasil dipublish"); document.location.href="+home.php?page=bWFwc19rZXRlcmFuZ2FuX3ZpZXc=";</script>';

                $query= mysql_query("INSERT INTO kios (id_blok,no_blok,nama,tempat,tanggal,alamat,pekerjaan,jenis_komoditas,type,ukuran,status_kepemilikan,no_shgp,foto,status) VALUES ('$id_blok','$no_blok','$nama','$tempat','$tanggal','$alamat','$pekerjaan','$jenis_komoditas','$type','$ukuran','$status_kepemilikan','$no_shgp','$gambar','$status');") or die (mysql_error('Tabel tidak ditemukan'));
            }else{ 
                echo '<script>alert ("Maaf, Data Status Kepemilikan KIOS Gagal diPublish!"); document.location.href="+home.php?page=bWFwc19rZXRlcmFuZ2FuX2lucHV0";</script>';
            }
       }else{
            echo '<script>alert ("Maaf jenis gambar tidak diketahui!. Gambar Harus berformat .jpg .gif .png!"); document.location.href="+home.php?page=bWFwc19rZXRlcmFuZ2FuX2lucHV0";</script>';
       }
    }else{
        echo '<script>alert ("Maaf, Anda belum memasukan gambar!"); document.location.href="+home.php?page=bWFwc19rZXRlcmFuZ2FuX2lucHV0";</script>';
    }
?>