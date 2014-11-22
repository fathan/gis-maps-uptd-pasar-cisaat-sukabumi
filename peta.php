<center> 
	<h2>LAY OUT PASAR TRADISIONAL SEMIMODERN CISAAT</h2><br>
    <img id="" src="asset/images/gambar.gif" border="0" width="1300" height="735" orgWidth="1300" orgHeight="735" usemap="#pasar_cisaat">
	<map name="pasar_cisaat" id="pasar_cisaat">

		<?php
			include 'page/page_config.php';

			$query = mysql_query("SELECT * FROM image_maps WHERE status='ADA' ") or die (mysql_error('tabel tidak ditemukan'));
			while($data = mysql_fetch_array($query)){
		?>

		<area 
			id="<?php echo $data['id_blok']; ?>" 
			alt="<?php echo $data['alt']; ?>"
			data-toggle="modal" 
			href="#"
			shape="rect" 
			coords="<?php echo $data['coords']; ?>" 
			style="outline:none;"
			onclick="TINY.box.show({iframe:'peta_detail2.php?blok=<?php echo $data['id_blok']; ?>',boxid:'frameless',width:750,height:450,fixed:false,maskid:'bluemask',maskopacity:40,closejs:function(){closeJS()}})">
			
		<?php
			}
		?>

	</map>
</center>