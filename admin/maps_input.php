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
                	Silahkan Masukan data Koordinat Maps Pasar Modern Cisaat baru dibawah ini 
                </div>
                <br>
                <form class="form-horizontal" method="POST" action="?page=<?php echo base64_encode('maps_proses'); ?>">
                    <div class="control-group">
                        <label class="control-label">ID Maps</label>
                        <div class="controls">
                            <input type="text" name="id_blok" placeholder="Contoh : Mushola Pasar" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">ALT Maps</label>
                        <div class="controls">
                            <input type="text" name="alt" placeholder="Contoh : Mushola Pasar" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Koordinat Maps</label>
                        <div class="controls">
                            <input type="text" name="coords" placeholder="Contoh :  29,206,102,235">
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