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
				</div>
			</div>
		</div>
	</div>
	<div id="content">
		<div class="container">
			<div class="row">
				<div class="span3 bs-docs-sidebar">
	                <ul class="nav nav-list bs-docs-sidenav">
	                  <li><h3>Kategori Album Galeri</h3></li>
	                  <li><hr></li>
	                  <?php 
                         include 'page/page_config.php';
                            $get_on =mysql_query("SELECT * FROM galeri_kategori ORDER BY kategori");
                            $num_log = mysql_num_rows ($get_on);
                                while ($row=mysql_fetch_assoc($get_on)){
                            $jumlah=mysql_query("SELECT * FROM galeri_kategori WHERE kategori='$row[kategori]'");
                            $berita = mysql_num_rows($jumlah);
                        ?>
	                  <li><a href="galeri_detail2.php?&id=<?php echo $row['kategori'];?>"><i class="icon-chevron-right"></i> 
	                  <?php echo $row['kategori']; ?></a></li>
	                  <?php
	                      }

	                  ?>
	                </ul>
	            </div>
				<div class="span9">
					<div class="alert alert-info">Album Foto - Foto Kegiatan Kantor UPTD Pasar Tradisional Semimodern Cisaat Kabupaten Sukabumi</div>
					<br />
					<ul class="gallery-container">
						<?php  
							include 'page/page_config.php';

							$query = mysql_query("SELECT * FROM galeri WHERE status='1' ORDER BY id DESC LIMIT 8");
							 while ($ambilgambar = mysql_fetch_array($query)){
						?>
						<li>
							<a href="gambar_galeri/<?php echo $ambilgambar['gambar'] ?>" class="ui-lightbox">
								<img src="gambar_galeri/<?php echo $ambilgambar['gambar'] ?>" style="width: 150px; height: 150px;">
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