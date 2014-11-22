<?php  
	include '../page/page_config.php';

	$id = base64_decode($_GET['id']);

	$query = mysql_query("SELECT * FROM profil WHERE id='$id'") or die (mysql_error('tabel tidak ditemukan'));
	$data  = mysql_fetch_array($query);

	$querydelete = mysql_query("DELETE FROM profil WHERE id='$id'") or die (mysql_error('tabel tidak ditemukan'));
		unlink($data['gambar']);

	if ($querydelete) {
		echo '<script>alert ("Data berhasil dihapus"); document.location.href="+home.php?page=cHJvZmlsX3ZpZXc=";</script>';
	}else{
		echo '<script>alert ("Data Gagal dihapus"); document.location.href="+home.php?page=cHJvZmlsX3ZpZXc=";</script>';
	}
	
?>