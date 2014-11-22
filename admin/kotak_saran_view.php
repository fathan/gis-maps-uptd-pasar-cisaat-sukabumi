<div id="masthead">
    <div class="container">
        <div class="masthead-pad">
            <div class="masthead-text">
                <h2>Data Kotak Saran</h2>
            </div>
        </div>
    </div>
</div>

<div id="content">
    <div class="container">
        <div class="row">
            <div class="span12">    
                <div class="alert alert-info">
                	Data Kotak saran yang masuk 
                </div>
                <div id="tablewrapper">
					<div id="tableheader">
			        	<div class="search">
			                <select id="columns" onchange="sorter.search('query')"></select>
			                <input type="text" id="query" onkeyup="sorter.search('query')" placeholder="Masukan Kata Kunci Pencarian">
			            </div>
			        </div>

			        <table cellpadding="0" cellspacing="0" border="0" id="table" class="table table-bordered table-striped">
			            <thead>
			                <tr>
			                    <th class="nosort"><h3>NO</h3></th>
			                    <th><h3>NAMA</h3></th>
			                    <th><h3>EMAIL</h3></th>
			                    <th><h3>TANGGAL</h3></th>
			                    <th><h3>ACTION</h3></th>
			                </tr>
			            </thead>
			            <tbody>
			            	<?php
			            		include '../page/page_config.php';

			            		$no = 1;
			            		$query = mysql_query("SELECT * FROM kotak_saran") or die (mysql_error('Tabel tidak ditemukan'));
			            			while ($data = mysql_fetch_array($query)){

			            			$id = base64_encode($data['id']);
			            	?>
			                <tr>
				            	<td><?php echo $no; ?></td>
				            	<td><?php echo $data['nama']; ?><br>[<small><em><?php echo $data['isi']; ?></em></small>]</td>
				            	<td><?php echo $data['email']; ?></td>
				            	<td><?php echo $data['date']; ?></td>
				            	<td>
				            		<a href="+home.php?page=<?php echo base64_encode('kotak_saran_delete') ?><?php echo '&id='.$id; ?>"><button class="btn btn-danger btn-sm">DELETE</button></a>
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