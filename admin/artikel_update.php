<?php
    include '../page/page_config.php';

    $querygambar = mysql_query("SELECT * FROM informasi");
    $datagambar  = mysql_fetch_array($querygambar);

    $namafolder="../gambar_artikel/"; 

    if (!empty($_FILES["gambar"]["tmp_name"]))
    {
        $id           = $_POST['id'];
        $judul        = $_POST['judul'];
        $anchor       = 'Administrator';
        $date         = date("Y-m-d H:i:s");
        $kategori     = $_POST['kategori'];
        $isi          = $_POST['isi'];
        $jenis_gambar = $_FILES['gambar']['type'];
        $status       = '1';
        
        if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
        {           
            $gambar = $namafolder . basename($_FILES['gambar']['name']);       
            if (move_uploaded_file($_FILES['gambar']['tmp_name'], $gambar)) {
                echo '<script>alert ("Artikel Berhasil diupdate"); document.location.href="+home.php?page=YXJ0aWtlbF92aWV3";</script>';
                    unlink($datagambar['gambar']);

                $query= mysql_query("UPDATE informasi SET judul='$judul', anchor='$anchor', date='$date', kategori='$kategori', isi='$isi', gambar='$gambar', status='$status' WHERE id='$id'") or die (mysql_error('Tabel tidak ditemukan'));
            }else{ 
                echo '<script>alert ("Maaf, Artikel Gagal diupdate!"); document.location.href="+home.php?page=YXJ0aWtlbF92aWV3";</script>';
            }
       }else{
            echo '<script>alert ("Maaf jenis gambar tidak diketahui!. Gambar Harus berformat .jpg .gif .png!"); document.location.href="+home.php?page=YXJ0aWtlbF92aWV3";</script>';
       }
    }else{
        echo '<script>alert ("Maaf, Anda belum memasukan gambar!"); document.location.href="+home.php?page=YXJ0aWtlbF92aWV3";</script>';
    }
?>