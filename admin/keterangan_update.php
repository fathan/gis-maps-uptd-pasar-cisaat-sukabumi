<?php  
     include '../page/page_config.php';

     $id_keterangan      = $_POST['id_keterangan'];
     $judul              = $_POST['judul'];
     $minggu             = $_POST['minggu'];
     $bulan              = $_POST['bulan'];
     $tahun              = $_POST['tahun'];
     $kepala_uptd        = $_POST['kepala_uptd'];
     $nip_kepala_uptd    = $_POST['nip_kepala_uptd'];
     $pencatat_harga     = $_POST['pencatat_harga'];
     $nip_pencatat_harga = $_POST['nip_pencatat_harga'];
     $asal_barang        = $_POST['asal_barang'];

     if (isset($_POST['update'])) {
        $query = mysql_query("UPDATE keterangan_harga_sembako SET judul='$judul', minggu='$minggu', bulan='$bulan', tahun='$tahun', kepala_uptd='$kepala_uptd', nip_kepala_uptd='$nip_kepala_uptd', pencatat_harga='$pencatat_harga', nip_pencatat_harga='$nip_pencatat_harga' WHERE id_keterangan='$id_keterangan'") or die (mysql_error('Tabel tidak ditemukan'));

        if ($query) {
            echo "<script>alert('Data Berhasil diupdate');document.location.href='+home.php?page=a2V0ZXJhbmdhbl9pbnB1dF91cGRhdGU='; </script>";
        }else{
            echo "<script>alert('Data Gagal diupdate'); document.location.href='+home.php?page=a2V0ZXJhbmdhbl9pbnB1dF91cGRhdGU='; </script>";
        }
    }else{
        echo "<script>alert('Data Gagal diupdate'); document.location.href='+home.php?page=a2V0ZXJhbmdhbl9pbnB1dF91cGRhdGU='; </script>";
    }
?>