<?php  
	include '../page/page_config.php';

	$id = base64_decode($_GET['id']);

	$querydelete = mysql_query("DELETE FROM sembako WHERE id='$id'") or die (mysql_error('tabel tidak ditemukan'));

	if ($querydelete) {
		echo '<script>alert ("Data berhasil dihapus"); document.location.href="+home.php?page=c2VtYmFrb192aWV3";</script>';
	}else{
		echo '<script>alert ("Data Gagal dihapus"); document.location.href="+home.php?page=c2VtYmFrb192aWV3";</script>';
	}
	
?>