<?php  
	include '../page/page_config.php';

	$id       = $_POST['id'];
	$id_blok = $_POST['id_blok'];
	$alt      = $_POST['alt'];
	$coords   = $_POST['coords'];
	$status   = '1';

	$query = mysql_query("UPDATE image_maps SET id_blok='$id_blok', alt='$alt', coords='$coords', status='$status' WHERE id='$id'") or die (mysql_error('Tebel tidak ditemukan'));

	if ($query) {
		echo '<script>alert ("Data Maps Berhasil diupdate!");document.location.href="+home.php?page=bWFwc192aWV3";</script>';
	}else{
		echo '<script>alert ("Maaf, Data Maps Gagal diupdate!"); document.location.href="+home.php?page=bWFwc192aWV3";</script>';
	}

?>