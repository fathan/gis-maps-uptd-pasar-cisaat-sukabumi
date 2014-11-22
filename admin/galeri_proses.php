<?php
    include '../page/page_config.php';
    $namafolder="../gambar_galeri/"; 

    if (!empty($_FILES["gambar"]["tmp_name"]))
    {
        $judul        = $_POST['judul'];
        $anchor       = 'Administrator';
        $date         = date("Y-m-d H:i:s");
        $kategori     = $_POST['kategori'];
        $jenis_gambar = $_FILES['gambar']['type'];
        $status       = '1';
        
        if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
        {           
            $gambar = $namafolder . basename($_FILES['gambar']['name']);       
            if (move_uploaded_file($_FILES['gambar']['tmp_name'], $gambar)) {
                echo '<script>alert ("galeri Berhasil dipublish"); document.location.href="+home.php?page=Z2FsZXJpX3ZpZXc=";</script>';

                $query= mysql_query("INSERT INTO galeri (judul,anchor,date,kategori,gambar,status) VALUES ('$judul', '$anchor', '$date', '$kategori', '$gambar', '$status');") or die (mysql_error('Tabel tidak ditemukan'));
            }else{ 
                echo '<script>alert ("Maaf, galeri Gagal diPublish!"); document.location.href="+home.php?page=Z2FsZXJpX2lucHV0";</script>';
            }
       }else{
            echo '<script>alert ("Maaf jenis gambar tidak diketahui!. Gambar Harus berformat .jpg .gif .png!"); document.location.href="+home.php?page=Z2FsZXJpX2lucHV0";</script>';
       }
    }else{
        echo '<script>alert ("Maaf, Anda belum memasukan gambar!"); document.location.href="+home.php?page=Z2FsZXJpX2lucHV0";</script>';
    }
?>