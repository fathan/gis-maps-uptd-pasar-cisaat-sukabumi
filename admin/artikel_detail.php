<?php  
    include '../page/page_config.php';

    $id = base64_decode($_GET['id']);

    $query = mysql_query("SELECT * FROM informasi WHERE id='$id'") or die (mysql_error('tabel tidak ditemukan'));
    $data  = mysql_fetch_array($query);
?>

<div id="masthead">
    <div class="container">
        <div class="masthead-pad">
            <div class="masthead-text">
                <h2>Data artikel</h2>
            </div>
        </div>
    </div>
</div>

<div id="content">
    <div class="container">
        <div class="row">
            <div class="span12">    
            	<a href="+home.php?page=YXJ0aWtlbF92aWV3"><div class="btn btn-primary btn-lg">Kembali</div></a>
            	<br>
                <center><img src="<?php echo $data['gambar']; ?>" style="width: 300px; height: 200px;"></center>
                <br>
                <table>
                	<tr>
                		<td><strong>Judul</strong> : <?php echo $data['judul']; ?></td>
                	</tr>
                	<tr>
                		<td><strong>Pengirim</strong> : <?php echo $data['anchor']; ?></td>
                	</tr>
                	<tr>
                		<td><strong>Tanggal</strong> : <?php echo $data['date']; ?></td>
                	</tr>
                	<tr>
                		<td><strong>Kategori</strong> : <?php echo $data['kategori']; ?></td>
                	</tr>
                	<tr>
                		<td>&nbsp;&nbsp;</td>
                	</tr>
                	<tr>
                		<td colspan="2">
                			<?php echo $data['isi']; ?>
                		</td>
                	</tr>
                </table>
            </div>
        </div>
    </div>
</div>