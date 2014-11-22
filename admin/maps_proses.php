<?php  
	 include '../page/page_config.php';

	 $id_blok = $_POST['id_blok'];
	 $alt      = $_POST['alt'];
	 $coords   = $_POST['coords'];
	 $status   = '1';

	 if (isset($_POST['simpan'])) {
        $query = mysql_query("INSERT INTO image_maps (id_blok,alt,coords,status) VALUES ('$id_blok', '$alt', '$coords', '$status')") or die (mysql_error('Tabel tidak ditemukan'));

        if ($query) {
            echo "<script>alert('Data Berhasil disimpan');document.location.href='+home.php?page=bWFwc192aWV3'; </script>";
        }else{
            echo "<script>alert('Data Gagal disimpan'); document.location.href='+home.php?page=bWFwc19pbnB1dA=='; </script>";
        }
    }else{
        echo "<script>alert('Data Gagal disimpan'); document.location.href='+home.php?page=bWFwc19pbnB1dA=='; </script>";
    }
?>