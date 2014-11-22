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
                            <h2>Daftar Berita Terbaru</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div id="content">
                <div class="container-fluid">
                    <div class="row">
                        <div id="content">
                            <div class="container">
                                <div class="row">
                                	<div class="col-md-12">
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
										                <th class="nosort"><h3>PEMILIK</h3></th>
										                <th><h3>PEKERJAAN</h3></th>
										                <th><h3>JENIS KIOS</h3></th>
										                <th><h3>BLOK</h3></th>
										                <th><h3>NO SHGP</h3></th>
										                <th><h3>STATUS</h3></th>
										                <th><h3>DETAIL</h3></th>
										            </tr>
										        </thead>
										        <tbody>
										        	<?php
										        		include 'page/page_config.php';
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
										            	<td><button class="btn btn-danger btn-sm"><?php echo $data['status_kepemilikan']; ?></button></td>
										            	<td>
										            		<a href="kios_detail_full.php?id=<?php echo $id; ?>"><button class="btn btn-info btn-sm">DETAIL</button></a>
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
										                <img s
										                rc="asset/tinytable/images/first.gif" width="16" height="16" alt="First Page" onclick="sorter.move(-1,true)" />
										                <img src="asset/tinytable/images/previous.gif" width="16" height="16" alt="First Page" onclick="sorter.move(-1)" />
										                <img src="asset/tinytable/images/next.gif" width="16" height="16" alt="First Page" onclick="sorter.move(1)" />
										                <img src="asset/tinytable/images/last.gif" width="16" height="16" alt="Last Page" onclick="sorter.move(1,true)" />
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
                    </div>
                </div>
            </div>
        </div>

        <?php include 'page/page_foo.php'; ?>
        <?php include 'page/page_footer_kios.php'; ?>
    </body>
</html>