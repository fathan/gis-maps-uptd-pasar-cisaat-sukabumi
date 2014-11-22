<div id="masthead">
    <div class="container">
        <div class="masthead-pad">
            <div class="masthead-text">
                <h2>Data Koordinat Maps Pasar Modern Cisaat</h2>
            </div>
        </div>
    </div>
</div>

<div id="content">
    <div class="container">
        <div class="row">
            <div class="span12">    
                <div class="alert alert-info">
                	Data Koordinat Maps UPTD Pasar Tradisional Semi Modern Cisaat
                </div>
                <div class="container">
                	<div class="row">
                		<div class="span6">
                			<div class="alert alert-info" style="height: 87px; padding-top: 34px;">
                				<h5><center>Silahkan Pilih Data berdasarkan Keterangan BLOK disamping berikut ini.untuk mencetak laporan jumlah Kios setiap Blok nya! dan untuk bagian button Hitam berfungsi untuk mencetak semua laporan data kios secara keseluruhan</center></h5>
                			</div>
                		</div>
                		<div class="span-sm-2 well">
							<a href="#" onclick="MyWindow=window.open('maps_keterangan_cari3.php','MyWindow','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=1366,height=741'); return false;" target="_blank"><button class="btn btn-inverse btn-sm" style="height: 90px;"><i class="icon-print"></i>&nbsp;CETAK SEMUA DATA </button></a>
                		</div>
                		<div class="span3">
                			<div class="well" style="padding-bottom: 0px;">
				                <form action="?page=<?php echo base64_encode('maps_keterangan_cari1'); ?>" method="POST">
				                    <div class="control-group">
				                        <div class="controls">
				                            <select name="cari" class="form-control" style="width: 100%;">
				                              <option>------ PILIH BLOK KIOS --------</option>  
				                              <option value="KA">KA</option>  
				                              <option value="KB">KB</option>  
				                              <option value="KC">KC</option>
				                              <option value="KD">KD</option>  
				                              <option value="KE">KE</option>  
				                              <option value="KF">KF</option>  
				                              <option value="KG">KG</option>  
				                              <option value="KH">KH</option>  
				                              <option value="KI">KI</option>  
				                              <option value="KJ">KJ</option>  
				                              <option value="LA">LA</option>  
				                              <option value="LB">LB</option>  
				                              <option value="LC">LC</option>  
				                              <option value="LD">LD</option>  
				                            </select>
				                            <!-- <input type="text" placeholder='Masukan Kata Kunci Pencarian' name="cari" class="form-control input-sm input-large" style="width: 590px;"> -->
				                       		<button type="submit" name="submit" class="btn btn-info btn-sm" style="height: 50px; width: 100%;"><i class="icon-print"></i>&nbsp;TAMPILKAN DATA</button>
				                        </div>
				                    </div>
				                </form>
				            </div>
                		</div>
                	</div>
                </div>
                <hr style="border-bottom: 1px solid #c9c9c9;-webkit-box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.15);-moz-box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.15);box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.15);">
                <div id="tablewrapper">
					<div id="tableheader">	
						<a href="?page=<?php echo base64_encode('maps_keterangan_input'); ?>"><button class="btn btn-info btn-sm">MASUKAN DATA BARU</button></a><br><br>
			        	<div class="search">
			                <select id="columns" onchange="sorter.search('query')"></select>
			                <input type="text" id="query" onkeyup="sorter.search('query')" placeholder="Masukan Kata Kunci Pencarian">
			            </div>
			        </div>

			        <table cellpadding="0" cellspacing="0" border="0" id="table" class="table table-bordered table-striped">
			            <thead>
			                <tr>
			                    <th class="nosort"><h3>PEMILIK</h3></th>
			                    <th><h3>PEKERJAAN</h3></th>
			                    <th><h3>JENIS KIOS</h3></th>
			                    <th><h3>BLOK</h3></th>
			                    <th><h3>NO SHGP</h3></th>
			                    <th><h3>ACTION</h3></th>
			                </tr>
			            </thead>
			            <tbody>
			            	<?php
			            		include '../page/page_config.php';
			            		$query = mysql_query("SELECT * FROM kios ORDER BY id DESC LIMIT 0, 30") or die (mysql_error('Tabel tidak ditemukan'));
			            			while ($data = mysql_fetch_array($query)){

			            			$id = base64_encode($data['id']);
			            	?>
			                <tr>
				            	<td><strong><?php echo $data['nama']; ?></strong></td>
				            	<td><?php echo $data['pekerjaan']; ?></td>
				            	<td><?php echo $data['type']; ?></td>
				            	<td><?php echo $data['id_blok']; ?></td>
				            	<td><?php echo $data['no_shgp']; ?></td>
				            	<td>
				            		<a href="+home.php?page=<?php echo base64_encode('maps_keterangan_detail') ?><?php echo '&id='.$id; ?>"><button class="btn btn-info btn-sm">DETAIL</button></a>
				            		<a href="+home.php?page=<?php echo base64_encode('maps_keterangan_input_update') ?><?php echo '&id='.$id; ?>"><button class="btn btn-warning btn-sm">UPDATE</button></a>
				            		<a href="+home.php?page=<?php echo base64_encode('maps_keterangan_delete') ?><?php echo '&id='.$id; ?>"><button class="btn btn-danger btn-sm">DELETE</button></a>
				            	</td>
			                </tr>
			                <?php
			                }
			                ?>
			            </tbody>
			        </table>

			        <div id="tablefooter">
			          <div id="tablenav">
			            	<div>
			                    <img src="../asset/tinytable/images/first.gif" width="16" height="16" alt="First Page" onclick="sorter.move(-1,true)" />
			                    <img src="../asset/tinytable/images/previous.gif" width="16" height="16" alt="First Page" onclick="sorter.move(-1)" />
			                    <img src="../asset/tinytable/images/next.gif" width="16" height="16" alt="First Page" onclick="sorter.move(1)" />
			                    <img src="../asset/tinytable/images/last.gif" width="16" height="16" alt="Last Page" onclick="sorter.move(1,true)" />
			                </div>
			                <div>
			                	<select id="pagedropdown"></select>
							</div>
			                <div>
			                	<a href="javascript:sorter.showall()"><button class="btn btn-info btn-sm">LIHAT SEMUA DATA</button></a>
			                </div>
			            </div>
						<div id="tablelocation">
			            	<div>
			                    <select onchange="sorter.size(this.value)">
			                    <option value="5">5</option>
			                        <option value="10" selected="selected">10</option>
			                        <option value="20">20</option>
			                        <option value="50">50</option>
			                        <option value="100">100</option>
			                    </select>
			                </div>
			            </div>
			        </div>
			    </div>
            </div>
        </div>
    </div>
</div>