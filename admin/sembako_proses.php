<?php  
	 include '../page/page_config.php';

	 $kategori       = $_POST['kategori'];
	 $jenis          = $_POST['jenis'];
     $jenis_satuan   = $_POST['jenis_satuan'];
     $ph_minggu_lalu = $_POST['ph_minggu_lalu'];
     $ph_minggu_ini  = $_POST['ph_minggu_ini'];
     $ps_minggu_lalu = $_POST['ps_minggu_lalu'];
     $ps_minggu_ini  = $_POST['ps_minggu_ini'];
     $ps_satuan      = $_POST['ps_satuan'];
	 $asal_barang    = $_POST['asal_barang'];

	 if (isset($_POST['simpan'])) {
        $query = mysql_query("INSERT INTO sembako (kategori,jenis,jenis_satuan,ph_minggu_lalu,ph_minggu_ini,ps_minggu_lalu,ps_minggu_ini,ps_satuan,asal_barang) VALUES ('$kategori','$jenis','$jenis_satuan','$ph_minggu_lalu','$ph_minggu_ini','$ps_minggu_lalu','$ps_minggu_ini','$ps_satuan','$asal_barang')") or die (mysql_error('Tabel tidak ditemukan'));

        if ($query) {
            echo "<script>alert('Data Berhasil disimpan');document.location.href='+home.php?page=c2VtYmFrb192aWV3'; </script>";
        }else{
            echo "<script>alert('Data Gagal disimpan'); document.location.href='+home.php?page=c2VtYmFrb19pbnB1dA=='; </script>";
        }
    }else{
        echo "<script>alert('Data Gagal disimpan'); document.location.href='+home.php?page=c2VtYmFrb19pbnB1dA=='; </script>";
    }
?>