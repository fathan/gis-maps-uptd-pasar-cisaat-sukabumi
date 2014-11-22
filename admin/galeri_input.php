<div id="masthead">
    <div class="container">
        <div class="masthead-pad">
            <div class="masthead-text">
                <h2>Data Galeri</h2>
            </div>
        </div>
    </div>
</div>

<div id="content">
    <div class="container">
        <div class="row">
            <div class="span12">    
                <div class="alert alert-info">
                	Silahkan Masukan data galeri baru dibawah ini 
                </div>
                <br>
                <form class="form-horizontal" method="POST" action="?page=<?php echo base64_encode('galeri_proses'); ?>" enctype="multipart/form-data">
                    <div class="control-group">
                        <label class="control-label">Judul</label>
                        <div class="controls">
                            <input type="text" name="judul" placeholder="Judul Gambar">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Kategori</label>
                        <div class="controls">
                            <?php    
                                include '../page/page_config.php';    
                                $result = mysql_query("SELECT * FROM galeri_kategori");  
                                $Array = "var kategori = new Array();\n";  
                                    echo '<select name="kategori" class="form-control" onchange="document.getElementById(\'kategori\').value = kategori[this.value]">';  
                                    echo '<option>--- Kategori ----</option>';  
                                        while ($row = mysql_fetch_array($result)) {  
                                            echo '<option value="' . $row['kategori'] . '">' . $row['kategori'] . '</option>';  
                                            $Array .= "kategori['" . $row['katbe_id'] . "'] = '" . addslashes($row['kategori']) . "';\n";  
                                        }  
                                    echo '</select>';  
                            ?>   

                            <a href="?page=<?php echo base64_encode('galeri_kategori_input'); ?>"><div name="simpan" class="btn btn-success">Masukan Kategori Galeri Baru</div></a>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Gambar</label>
                        <div class="controls">
                            <input type="file" name="gambar" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>