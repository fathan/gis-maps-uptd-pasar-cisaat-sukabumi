<?php  
	include '../page/page_config.php';

	$id = base64_decode($_GET['id']);

	$querydelete = mysql_query("DELETE FROM kotak_saran WHERE id='$id'") or die (mysql_error('tabel tidak ditemukan'));

	if ($querydelete) {
		echo '<script>alert ("Data berhasil dihapus"); document.location.href="+home.php?page=a290YWtfc2FyYW5fdmlldw==";</script>';
	}else{
		echo '<script>alert ("Data Gagal dihapus"); document.location.href="+home.php?page=a290YWtfc2FyYW5fdmlldw==";</script>';
	}
	
?>