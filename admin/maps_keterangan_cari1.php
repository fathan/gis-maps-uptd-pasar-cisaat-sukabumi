<script type="text/javascript">
    function print1(meh)
    {
        var x = screen.width/2 - 900/2;
        var y = screen.height/2 - 450/2;
        window.open('maps_keterangan_cari2.php?blok=<?php echo $_POST[cari]; ?>','MyWindow','toolbar=no,colors=yes,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=1366,height=741');
    }
</script>

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
                <a href="?page=<?php echo base64_encode('maps_keterangan_view'); ?>"><button class="btn btn-success btn-sm"><i class="icon-tag"></i>&nbsp;ViEW ALL</button></a>
                <a href="?page=<?php echo base64_encode('maps_keterangan_input'); ?>"><button class="btn btn-info btn-sm"><i class="icon-tag"></i>&nbsp;MASUKAN DATA BARU</button></a>
                <a href="#" onclick="print1(this); return false;" target="_blank"><button class="btn btn-warning btn-sm"><i class="icon-print"></i>&nbsp;CETAK LAPORAN</button></a>
                <br>
                <br>
                <div id="tablewrapper">
					<div id="tableheader">
			        	<div class="search">
			                <select id="columns" onchange="sorter.search('query')"></select>
			                <input type="text" id="query" onkeyup="sorter.search('query')" />
			            </div>
			        </div>

			        <table cellpadding="0" cellspacing="0" border="0" id="table" class="table table-bordered table-striped">
			            <thead>
			                <tr>
			                    <th class="nosort"><h3>NO</h3></th>
			                    <th><h3>PEMILIK</h3></th>
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

								$cari 	= $_POST['cari'];
			            		$no 	= 1;
			            		$query 	= mysql_query("SELECT * FROM kios WHERE id_blok LIKE '%$cari%' LIMIT 0, 30") or die (mysql_error('Tabel tidak ditemukan'));
			            			while ($data = mysql_fetch_array($query)){

			            			$id = base64_encode($data['id']);
			            	?>

							<tr>
				            	<td><?php echo $no; ?></td>
				            	<td><strong><?php echo $data['nama']; ?></strong></td>
				            	<td><?php echo $data['pekerjaan']; ?></td>
				            	<td><?php echo $data['type']; ?></td>
				            	<td><?php echo $data['id_blok']; ?></td>
				            	<td><?php echo $data['no_shgp']; ?></td>
				            	<td>
				            		<a href="+home.php?page=<?php echo base64_encode('maps_keterangan_detail') ?><?php echo '&id='.$id; ?>"><button class="btn btn-info btn-sm">DETAIL</button></a>
				            		<a href="+home.php?page=<?php echo base64_encode('maps_keterangan_input_update') ?><?php echo '&id='.$id; ?>"><button class="btn btn-warning btn-sm">UPDATE</button></a>
				            		<a href="+home.php?page=<?php echo base64_encode('maps_keterangan_delete') ?><?php echo '&id='.$id; ?>"><button class="btn btn-danger btn-sm">DELETE</button></a>
				            		<!-- <a href="#" onclick="MyWindow=window.open('maps_keterangan_cari3.php?id=<?php echo $data['id']; ?>','MyWindow','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=1366,height=741'); return false;" target="_blank"><button class="btn btn-inverse btn-sm"><i class="icon-print"></i>&nbsp;CETAK</button></a> -->
				            	</td>
			                </tr>
			                <?php
				                	$no++;
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