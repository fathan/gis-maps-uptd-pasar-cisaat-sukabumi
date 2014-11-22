<?php
	$page=isset($_GET['page'])?$_GET['page']:'';
	$page=base64_decode($page);
		switch ($page)
			{	
				case 'informasi_detail':
					include 'informasi_detail.php';
					break;

				default : include'index.php';
			}
?>