<?php  
    include '../page/page_config.php';

    $id = base64_decode($_GET['id']);

    $query = mysql_query("SELECT * FROM profil WHERE id='$id'") or die (mysql_error('tabel tidak ditemukan'));
    $data  = mysql_fetch_array($query);
?>

<div id="masthead">
    <div class="container">
        <div class="masthead-pad">
            <div class="masthead-text">
                <h2>Data Profil</h2>
            </div>
        </div>
    </div>
</div>

<div id="content">
    <div class="container">
        <div class="row">
            <div class="span12">    
                <div class="alert alert-info">
                	Silahkan Masukan data profil baru dibawah ini 
                </div>
                <br>
                <form class="form-horizontal" method="POST" action="?page=<?php echo base64_encode('profil_update'); ?>">
                    
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                    <div class="control-group">
                        <label class="control-label">Judul</label>
                        <div class="controls">
                            <input type="text" name="judul" value="<?php echo $data['judul']; ?>">
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