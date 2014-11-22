<?php  
    include '../page/page_config.php';

    $id = base64_decode($_GET['id']);

    $query    = mysql_query("SELECT * FROM image_maps WHERE id='$id'") or die (mysql_error('Tabel tidak ditemukan'));
    $datamaps = mysql_fetch_array($query);
?>

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
                	Form Update data Koordinat Maps Pasar Modern Cisaat baru dibawah ini 
                </div>
                <br>
                <form class="form-horizontal" method="POST" action="?page=<?php echo base64_encode('maps_update'); ?>">
                    <input type="hidden" name="id" value="<?php echo $datamaps['id']; ?>">

                    <div class="control-group">
                        <label class="control-label">ID Maps</label>
                        <div class="controls">
                            <input type="text" name="id_blok" value="<?php echo $datamaps['id_blok']; ?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">ALT Maps</label>
                        <div class="controls">
                            <input type="text" name="alt" value="<?php echo $datamaps['alt']; ?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Koordinat Maps</label>
                        <div class="controls">
                            <input type="text" name="coords" value="<?php echo $datamaps['coords']; ?>">
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