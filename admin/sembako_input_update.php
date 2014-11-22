<?php  
    include '../page/page_config.php';

    $id = base64_decode($_GET['id']);

    $query = mysql_query("SELECT * FROM sembako WHERE id='$id'") or die (mysql_error('Tabel tidak ditemukan'));
    $data  = mysql_fetch_array($query);
?>

<div id="masthead">
    <div class="container">
        <div class="masthead-pad">
            <div class="masthead-text">
                <h2>Data Harga Sembako</h2>
            </div>
        </div>
    </div>
</div>

<div id="content">
    <div class="container">
        <div class="row">
            <div class="span12">    
                <div class="alert alert-info">
                	Data Harga Sembako UPTD Pasar Tradisional Semi Modern Cisaat Kabupaten Sukabumi
                </div>
                <br>
                <form class="form-horizontal" method="POST" action="?page=<?php echo base64_encode('sembako_update'); ?>" name="update">
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                    <div class="control-group">
                        <label class="control-label">Kategori</label>
                        <div class="controls">
                            <input type="text" name="kategori" value="<?php echo $data['kategori']; ?>" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Jenis</label>
                        <div class="controls">
                            <input type="text" name="jenis" value="<?php echo $data['jenis']; ?>" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Satuan Jenis</label>
                        <div class="controls">
                            <input type="text" name="jenis_satuan" value="<?php echo $data['jenis_satuan']; ?>" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Perkembangan Harga Minggu Lalu</label>
                        <div class="controls">
                            <input type="text" name="ph_minggu_lalu" value="<?php echo $data['ph_minggu_lalu']; ?>" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Perkembangan Harga Minggu ini</label>
                        <div class="controls">
                            <input type="text" name="ph_minggu_ini" value="<?php echo $data['ph_minggu_ini']; ?>" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Persediaan Harga Minggu Lalu</label>
                        <div class="controls">
                            <input type="text" name="ps_minggu_lalu" value="<?php echo $data['ps_minggu_lalu']; ?>" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Persediaan Harga Minggu ini</label>
                        <div class="controls">
                            <input type="text" name="ps_minggu_ini" value="<?php echo $data['ps_minggu_ini']; ?>" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Persediaan Satuan</label>
                        <div class="controls">
                            <input type="text" name="ps_satuan" value="<?php echo $data['ps_satuan']; ?>" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Asal Barang</label>
                        <div class="controls">
                            <input type="text" name="asal_barang" value="<?php echo $data['asal_barang']; ?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" name="update" class="btn btn-success">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>