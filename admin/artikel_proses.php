<?php
    include '../page/page_config.php';
    $namafolder="../gambar_artikel/"; 

    if (!empty($_FILES["gambar"]["tmp_name"]))
    {
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
                echo '<script>alert ("Artikel Berhasil dipublish"); document.location.href="+home.php?page=YXJ0aWtlbF92aWV3";</script>';

                $query= mysql_query("INSERT INTO informasi (judul,anchor,date,kategori,isi,gambar,status) VALUES ('$judul', '$anchor', '$date', '$kategori', '$isi', '$gambar', '$status');") or die (mysql_error('Tabel tidak ditemukan'));
            }else{ 
                echo '<script>alert ("Maaf, Artikel Gagal diPublish!"); document.location.href="+home.php?page=YXJ0aWtlbF9pbnB1dA==";</script>';
            }
       }else{
            echo '<script>alert ("Maaf jenis gambar tidak diketahui!. Gambar Harus berformat .jpg .gif .png!"); document.location.href="+home.php?page=YXJ0aWtlbF9pbnB1dA==";</script>';
       }
    }else{
        echo '<script>alert ("Maaf, Anda belum memasukan gambar!"); document.location.href="+home.php?page=YXJ0aWtlbF9pbnB1dA==";</script>';
    }
?>