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
                <div class="alert alert-info">
                	Form Update Data Informasi Artikel dengan ID => <?php echo $data['id']; ?>
                </div>
                <br>
                <form class="form-horizontal" method="POST" action="?page=<?php echo base64_encode('artikel_update'); ?>" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">        
            
                    <div class="control-group">
                        <label class="control-label">Judul</label>
                        <div class="controls">
                            <input type="text" name="judul" value="<?php echo $data['judul']; ?>" required>
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
                                    echo '<option value="' . $data['kategori'] . '">' . $data['kategori'] . '</option>';    
                                        while ($row = mysql_fetch_array($result)) {  
                                            echo '<option value="' . $row['kategori'] . '">' . $row['kategori'] . '</option>';  
                                            $Array .= "kategori['" . $row['id'] . "'] = '" . addslashes($row['kategori']) . "';\n";  
                                        }  
                                    echo '</select>';  
                            ?>    
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Gambar</label>
                        <div class="controls">
                            <input type="file" name="gambar" placeholder="Judul" value="<?php echo $data['gambar']; ?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"></label>
                        <div class="controls">
                            <textarea class="ckeditor" name="isi"><?php echo $data['isi']; ?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" name="simpan" class="btn btn-success">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>