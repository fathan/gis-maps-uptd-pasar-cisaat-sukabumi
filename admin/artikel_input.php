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
                <div class="alert alert-info">
                	Silahkan Masukan data artikel baru dibawah ini 
                </div>
                <br>
                <form class="form-horizontal" method="POST" action="?page=<?php echo base64_encode('artikel_proses'); ?>" enctype="multipart/form-data">
                    <div class="control-group">
                        <label class="control-label">Judul</label>
                        <div class="controls">
                            <input type="text" name="judul" placeholder="Judul">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Kategori</label>
                        <div class="controls">
                            <?php    
                                include '../page/page_config.php';    
                                $result = mysql_query("SELECT * FROM informasi_kategori");  
                                $Array = "var kategori = new Array();\n";  
                                    echo '<select name="kategori" class="form-control" onchange="document.getElementById(\'kategori\').value = kategori[this.value]">';  
                                    echo '<option>--- Kategori ----</option>';  
                                        while ($row = mysql_fetch_array($result)) {  
                                            echo '<option value="' . $row['kategori'] . '">' . $row['kategori'] . '</option>';  
                                            $Array .= "kategori['" . $row['katbe_id'] . "'] = '" . addslashes($row['kategori']) . "';\n";  
                                        }  
                                    echo '</select>';  
                            ?>    
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Gambar</label>
                        <div class="controls">
                            <input type="file" name="gambar" placeholder="Judul">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"></label>
                        <div class="controls">
                            <textarea class="ckeditor" name="isi"></textarea>
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