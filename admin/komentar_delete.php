<?php  
	include '../page/page_config.php';

	$id = base64_decode($_GET['id']);

	$querydelete = mysql_query("DELETE FROM komentar WHERE id='$id'") or die (mysql_error('tabel tidak ditemukan'));

	if ($querydelete) {
		echo '<script>alert ("Data berhasil dihapus"); document.location.href="+home.php?page=a29tZW50YXJfdmlldw==";</script>';
	}else{
		echo '<script>alert ("Data Gagal dihapus"); document.location.href="+home.php?page=a29tZW50YXJfdmlldw==";</script>';
	}
	
?>