<!doctype html>
<html class="no-js" lang="en">
<?php include 'page/page_head.php'; ?>
<body>
<div id="wrapper">
	<?php include 'page/page_topbar.php'; ?>
	<?php include 'page/page_header.php'; ?>
	<div id="masthead">
		<div class="container">
			<div class="masthead-pad">
				<div class="masthead-text">
					<h2>Album Galeri</h2>
					<p>Album Kategori dan Foto - Foto Kegiatan Pasar Modern Cisaat Sukabumi</p>
				</div>
			</div>
		</div>
	</div>
	<div id="content">
		<div class="container">
			<div class="row">
				<div class="span12">
					<br />
					<ul class="gallery-container">
						<?php  
							include 'page/page_config.php';

					        $sql         = mysql_query("SELECT * FROM galeri WHERE status='1' and kategori='$_GET[id]'");
					         while($ambilgambar = mysql_fetch_array($sql)){
					    ?>
						<li>
							<a href="gambar_galeri/<?php echo $ambilgambar['gambar'] ?>" title="<?php echo $ambilgambar['judul'] ?>" class="ui-lightbox">
								<img src="gambar_galeri/<?php echo $ambilgambar['gambar'] ?>" alt="<?php echo $ambilgambar['judul'] ?>" style="width: 150px; height: 150px;">
							</a>
							<a href="gambar_galeri/<?php echo $ambilgambar['gambar'] ?>" class="preview"></a>
						</li>
						<?php
							}
						?>
					</ul>
				</div>
			</div>		
		</div>
	</div>
</div>

<?php include 'page/page_foo.php'; ?>
<?php include 'page/page_footer.php'; ?>
</body>
</html>