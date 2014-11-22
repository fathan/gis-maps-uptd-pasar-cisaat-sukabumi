<?php  
    include '../page/page_config.php';

    $judul    = $_POST['judul'];
    $anchor   = 'Administrator';
    $date     = date("Y-m-d H:i:s");
    $kategori = 'Profil';
    $isi      = $_POST['isi'];
    $status   = '1';

    if (isset($_POST['simpan'])) {
        $query = mysql_query("INSERT INTO profil (judul,anchor,date,kategori,isi,status) VALUES ('$judul', '$anchor', '$date', '$kategori', '$isi', '$status')") or die (mysql_error('Tabel tidak ditemukan'));

        if ($query) {
            echo "<script>alert('Data Berhasil disimpan'); document.location.href='+home.php?page=cHJvZmlsX3ZpZXc='; </script>";
        }else{
            echo "<script>alert('Data Gagal disimpan'); document.location.href='+home.php?page=cHJvZmlsX2lucHV0'; </script>";
        }
    }else{
        echo "<script>alert('Data Gagal disimpan'); document.location.href='+home.php?page=cHJvZmlsX2lucHV0'; </script>";
    }
?>