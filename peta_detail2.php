<!doctype html>
<html class="no-js" lang="en">
    <?php include 'page/page_head.php'; ?>
    <body bgcolor="#41B14A">
        <div id="wrapper">
            <div id="content">
                <div class="container-fluid">
                    <div class="row">
                        <div id="content">
                            <div class="container">
                                <div class="row">
                                    <div class="span12" style="border:dashed 2px #41B14A; padding:20px; -webkit-border-radius:20px; -moz-border-radius:20px; border-radius:20px; -moz-box-shadow: 0 0 10px 10px rgba(65, 177, 74, 0.33);-webkit-box-shadow: 0 0 10px 10px rgba(65, 177, 74, 0.33); box-shadow: 0 0 10px 10px rgba(65, 177, 74, 0.33); filter:alpha(opacity=100); z-index:2; text-decoration:none">    
                                        <?php
											include 'page/page_config.php';

											$query = mysql_query("SELECT * FROM kios WHERE  id_blok='$_GET[id_blok]'") or die (mysql_error('tabel tidak ditemukan'));
											$ambilkios = mysql_fetch_array($query);
										?>
										<center><h2>DATA DETAIL STATUS KEPEMILIKAN KIOS<br>UPTD PASAR CISAAT</h2></center>
										<table class="table table-hover">
											
											<tr>
												<?php  
													if ($ambilkios) {
												?>
												<td colspan="3"><center><a href="gambar_galeri/<?php echo $ambilkios['foto']; ?>" class="ui-lightbox"><img src="project_gis/<?php echo $ambilkios['foto']; ?>" class="thumbnail" style="width: 500px; height: 250px;"></a></center></td>
												<?php		
													}else{
												?>
												<td colspan="3"><center><a href="asset/images/noimage.jpg" class="ui-lightbox"><img src="asset/images/noimage.jpg" class="thumbnail" style="width: 500px; height: 250px;"></a></center></td>
												<?php
													}
												?>
											</tr>
											<tr>
												<td><strong>Blok</strong></td>
												<td>:</td>
												<td>
													<?php  
														if ($ambilkios) {
															echo $ambilkios['id_blok'];
														}else{
															echo "<div class='text-error'>Data Kosong!</div>";
														}
													?>
												</td>
											</tr>
											<tr>
												<td><strong>Nomer Blok</strong></td>
												<td>:</td>
												<td>
													<?php  
														if ($ambilkios) {
															echo $ambilkios['no_blok'];
														}else{
															echo "<div class='text-error'>Data Kosong!</div>";
														}
													?>
												</td>
											</tr>
											<tr>
												<td><strong>Nama Pemilik</strong></td>
												<td>:</td>
												<td>
													<?php  
														if ($ambilkios) {
															echo $ambilkios['nama'];
														}else{
															echo "<div class='text-error'>Data Kosong!</div>";
														}
													?>
												</td>
											</tr>
											<tr>
												<td><strong>Tempat & Tanggal lahir</strong></td>
												<td>:</td>
												<td>
													<?php  
														if ($ambilkios) {
															echo $ambilkios['tempat'];
															echo ", ";
															echo $ambilkios['tanggal'];
														}else{
															echo "<div class='text-error'>Data Kosong!</div>";
														}
													?>
												</td>
											</tr>
											<tr>
												<td><strong>Alamat</strong></td>
												<td>:</td>
												<td>
													<?php  
														if ($ambilkios) {
															echo $ambilkios['alamat'];
														}else{
															echo "<div class='text-error'>Data Kosong!</div>";
														}
													?>
												</td>
											</tr>
											<tr>
												<td><strong>Pekerjaan</strong></td>
												<td>:</td>
												<td>
													<?php  
														if ($ambilkios) {
															echo $ambilkios['pekerjaan'];
														}else{
															echo "<div class='text-error'>Data Kosong!</div>";
														}
													?>
												</td>
											</tr>
											
											<tr>
												<td><strong>Jenis Komoditas</strong></td>
												<td>:</td>
												<td>
													<?php  
														if ($ambilkios) {
															echo $ambilkios['jenis_komoditas'];
														}else{
															echo "<div class='text-error'>Data Kosong!</div>";
														}
													?>
												</td>
											</tr>
											<tr>
												<td><strong>Type Kios</strong></td>
												<td>:</td>
												<td>
													<?php  
														if ($ambilkios) {
															echo $ambilkios['type'];
														}else{
															echo "<div class='text-error'>Data Kosong!</div>";
														}
													?>
												</td>
											</tr>
											<tr>
												<td><strong>Ukuran Kios</strong></td>
												<td>:</td>
												<td>
													<?php  
														if ($ambilkios) {
															echo $ambilkios['ukuran'];
														}else{
															echo "<div class='text-error'>Data Kosong!</div>";
														}
													?>
												</td>
											</tr>
											<tr>
												<td><strong>Status Kepemilikan</strong></td>
												<td>:</td>
												<td>
													<?php  
														if ($ambilkios) {
															echo $ambilkios['status_kepemilikan'];
														}else{
															echo "<div class='text-error'>Data Kosong!</div>";
														}
													?>
												</td>
											</tr>
											<tr>
												<td><strong>No Register SHGP</strong></td>
												<td>:</td>
												<td><em>
													<?php  
														if ($ambilkios) {
															echo $ambilkios['no_shgp'];
														}else{
															echo "<div class='text-error'>Data Kosong!</div>";
														}
													?>
												</em></td>
											</tr>
										</table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'page/page_footer.php'; ?>
    </body>
</html>