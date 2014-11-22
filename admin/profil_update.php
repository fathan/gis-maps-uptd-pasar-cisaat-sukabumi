<?php  
	include '../page/page_config.php';

	$id    = $_POST['id'];
	$judul = $_POST['judul'];
	$isi   = $_POST['isi'];

	$query = mysql_query("UPDATE profil SET judul='$judul', isi='$isi' WHERE id='$id'") or die (mysql_error('Tebel tidak ditemukan'));

	if ($query) {
		echo '<script>alert ("Profil berhasil diupdate!"); document.location.href="+home.php?page=cHJvZmlsX3ZpZXc=";</script>';
	}else{
		echo '<script>alert ("Maaf, Profil Gagal diupdate!"); document.location.href="+home.php?page=cHJvZmlsX3ZpZXc=";</script>';
	}

?>