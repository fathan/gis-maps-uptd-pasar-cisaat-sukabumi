<!DOCTYPE html>
<html>
<head>
	<title>Cetak Laporan Blok Kios</title>
	<link rel="stylesheet" type="text/css" href="../asset/css/print.css">
</head>
<body onLoad="window.print()">
    <a onClick="window.print()">
        <img src='../asset/images/kabsukabumi.jpg' style="width: 70px; height: 70px;">
    </a>
    <hr>

</body>
</html>
<table border=1 cellpadding=0 cellspacing=0 width=100%>
    <thead>
    	<div class="font-tabel-1">
	        <tr>
	            <th class="nosort"><h5>NO</h5></th>
	            <th><h5>BLOK</h5></th>
	            <th><h5>NO</h5></th>
	            <th><h5>NAMA</h5></th>
	            <th><h5>TEMPAT, TANGGAL LAHIR</h5></th>
	            <th width="100"><h5>ALAMAT</h5></th>
	            <th><h5>PEKERJAAN</h5></th>
	            <th><h5>JENIS KOMODITAS</h5></th>
	            <th><h5>TYPE</h5></th>
	            <th><h5>UKURAN</h5></th>
	            <th><h5>STATUS KEPEMILIKAN</h5></th>
	            <th><h5>NO SHGP</h5></th>
	        </tr>
	    </div>
    </thead>
    <tbody>
    	<?php
    		include '../page/page_config.php';

    		$cari = $_GET['blok'];

    		$no = 1;
    		$query = mysql_query("SELECT * FROM kios WHERE id_blok LIKE '%$cari%' LIMIT 0, 30") or die (mysql_error('Tabel tidak ditemukan'));
    			while ($data = mysql_fetch_array($query)){
    	?>
        <tr>
        	<td><?php echo $no; ?></td>
        	<td><strong><?php echo $data['id_blok']; ?></strong></td>
        	<td><?php echo $data['no_blok']; ?></td>
        	<td><?php echo $data['nama']; ?></td>
        	<td><?php echo $data['tempat']; ?>, <?php echo $data['tanggal']; ?></td>
        	<td><?php echo $data['alamat']; ?></td>
        	<td><?php echo $data['pekerjaan']; ?></td>
        	<td><?php echo $data['jenis_komoditas']; ?></td>
        	<td><?php echo $data['type']; ?></td>
        	<td><?php echo $data['ukuran']; ?></td>
        	<td><?php echo $data['status_kepemilikan']; ?></td>
        	<td><?php echo $data['no_shgp']; ?></td>
        </tr>
        <?php
        	$no++;
        }
        ?>
    </tbody>
</table>