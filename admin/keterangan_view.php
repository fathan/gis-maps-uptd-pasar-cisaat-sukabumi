<div id="masthead">
    <div class="container">
        <div class="masthead-pad">
            <div class="masthead-text">
                <h2>Data Keterangan Harga Sembako</h2>
            </div>
        </div>
    </div>
</div>

<div id="content">
    <div class="container">
        <div class="row">
            <div class="span12">    
                <div class="alert alert-info">
                	Data Keterangan Harga Sembako UPTD Pasar Tradisional Semi Modern Cisaat Kabupaten Sukabumi
                </div>
                <?php
            		include '../page/page_config.php';

            		$query = mysql_query("SELECT * FROM keterangan_harga_sembako") or die (mysql_error('Tabel tidak ditemukan'));
            		$data  = mysql_fetch_array($query);
            	?>  
                <table class="table table-hover table-striped">
                	<tr>
                		<td>Judul</td>
                		<td>:</td>
                		<td><?php echo $data['judul'] ?></td>
                	</tr>
                	<tr>
                		<td>Minggu</td>
                		<td>:</td>
                		<td><?php echo $data['minggu'] ?></td>
                	</tr>
                	<tr>
                		<td>Bulan</td>
                		<td>:</td>
                		<td><?php echo $data['bulan'] ?></td>
                	</tr>
                	<tr>
                		<td>Tahun</td>
                		<td>:</td>
                		<td><?php echo $data['tahun'] ?></td>
                	</tr>
                	<tr>
                		<td>Kepala UPTD Pasar Cisaat</td>
                		<td>:</td>
                		<td><?php echo $data['kepala_uptd'] ?></td>
                	</tr>
                	<tr>
                		<td>NIP Kepala</td>
                		<td>:</td>
                		<td><?php echo $data['nip_kepala_uptd'] ?></td>
                	</tr>
                	<tr>
                		<td>Pencatat Harga</td>
                		<td>:</td>
                		<td><?php echo $data['pencatat_harga'] ?></td>
                	</tr>
                	<tr>
                		<td>NIP Pencatat</td>
                		<td>:</td>
                		<td><?php echo $data['nip_pencatat_harga'] ?></td>
                	</tr>
                	<tr>
                		<td></td>
                		<td></td>
                		<td><a href="+home.php?page=<?php echo base64_encode('keterangan_input_update') ?>"><button class="btn btn-inverse btn-sm">UPDATE</button></a></td>
                	</tr>
                </table>
		    </div>
        </div>
    </div>
</div>