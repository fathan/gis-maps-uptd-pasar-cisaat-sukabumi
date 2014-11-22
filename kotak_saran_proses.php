<?php  
	include 'page/page_config.php';

	$nama   = $_POST['nama'];
	$email  = $_POST['email'];
	$date   = date("Y-m-d H:i:s");
	$isi    = $_POST['isi'];
	$status = '1';

	$query = mysql_query("INSERT INTO kotak_saran (nama,email,date,isi,status) VALUES ('$nama', '$email', '$date', '$isi', '$status')") or die (mysql_error('tabel tidak ditemukan'));

	if ($query) {
		echo '<script>alert ("Kotak Saran Berhasil dikirim"); document.location.href="kotak_saran_detail.php";</script>';
	}else{
		echo '<script>alert ("Kotak Saran Gagal dikirim"); document.location.href="kotak_saran_detail.php";</script>';
	}

?>