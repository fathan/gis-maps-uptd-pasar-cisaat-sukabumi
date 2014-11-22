<!doctype html>
<html class="no-js" lang="en">
	<?php include 'page/page_head.php'; ?>
	<style type="text/css">
		.background {
			width: 500px;
			height: 250px;
			background: url(asset/images/1.png);
			border: 3 px solid #515AA3;
		}

		.transbox a:link,a:visited {
			display: block;
			width: 400px;
			margin-left: auto;
			margin-right: auto;
			margin-top: 15px;
			padding: 15px;
			font-weight: bold;
			font-style: italic;
			color: #000;
			text-decoration: none;
			border: 3px solid #515AA3;
			background-color: #FFF;
			background-filter: alpha(opacity=80);
			opacity: 0.8;
		}

		.transbox a:hover, a:active{
			display: block;
			border: 3px solid #CCCCCC;
			background-color: #515AA3;
		}
	</style>
	<style>
		/* CSS Document */
#no_items { background-color: #0F0; }
#open_items { background-color: #F00; }
</style>
	<body>
		<div id="wrapper">
			<?php include 'page/page_topbar.php'; ?>
			<?php include 'page/page_header.php'; ?>
			<div id="masthead">
			    <div class="container">
			        <div class="masthead-pad">
			            <div class="masthead-text">
			                <h2>Peta Denah Lokasi KIOS</h2>
			            </div>
			        </div>
			    </div>
			</div>
			<div id="content">
			    <div class="container-fluid">
			        <div class="row">
			        	&nbsp;&nbsp;&nbsp;&nbsp;
			            <center> 
			            	<h2>LAY OUT PASAR TRADISIONAL SEMI MODERN CISAAT KABUPATEN SUKABUMI</h2><br>
			                
			                <img id="" src="asset/images/baru.jpg" border="0"  usemap="#pasar_cisaat">
							
							<div class="transbox">
							<map name="pasar_cisaat" id="pasar_cisaat">

								<?php
									include 'page/page_config.php';

									$query = mysql_query("SELECT * FROM image_maps") or die (mysql_error('tabel tidak ditemukan'));
									while($data = mysql_fetch_array($query)){
								?>
									<area 
										id="<?php echo $data['id_blok']; ?>" 
										alt="<?php echo $data['alt']; ?>"
										data-toggle="modal" 
										href="#"
										shape="rect"
										id="no_items"
										coords="<?php echo $data['coords']; ?>"
										onclick="TINY.box.show({iframe:'peta_detail2.php?id_blok=<?php echo $data['id_blok']; ?>',boxid:'frameless',width:750,height:450,fixed:false,maskid:'bluemask',maskopacity:40,closejs:function(){closeJS()}})">
								<?php
									}
								?>

							</map>
							</div>
							<br>
							<br>
							<br>
						<div class="fb-comments" data-href="<?php echo "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."/"; ?>" data-width="1000" data-numposts="10" data-colorscheme="light"></div>
						</center>
						
			        </div>
			    </div>
			</div>
		</div>

		<?php include 'page/page_foo.php'; ?>
		<?php include 'page/page_footer.php'; ?>
	</body>
</html>