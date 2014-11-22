<?php  
	include '../page/page_config.php';

	$id = base64_decode($_GET['id']);

	$query = mysql_query("SELECT * FROM kios WHERE id='$id'") or die (mysql_error('tabel tidak ditemukan'));
	$data  = mysql_fetch_array($query);

	$querydelete = mysql_query("DELETE FROM kios WHERE id='$id'") or die (mysql_error('tabel tidak ditemukan'));
		unlink($data['foto']);

	if ($querydelete) {
		echo '<script>alert ("Data berhasil dihapus"); document.location.href="+home.php?page=bWFwc19rZXRlcmFuZ2FuX3ZpZXc=";</script>';
	}else{
		echo '<script>alert ("Data Gagal dihapus"); document.location.href="+home.php?page=bWFwc19rZXRlcmFuZ2FuX3ZpZXc=";</script>';
	}
	
?>