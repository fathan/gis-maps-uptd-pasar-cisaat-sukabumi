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
                <form class="form-horizontal" method="POST" action="?page=<?php echo base64_encode('sembako_proses'); ?>">
                    <div class="control-group">
                        <label class="control-label">Kategori</label>
                        <div class="controls">
                            <input type="text" name="kategori" placeholder="Cth: Sayuran, Buah-buahan" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Jenis</label>
                        <div class="controls">
                            <input type="text" name="jenis" placeholder="Cth: Mangga, Buncis" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Satuan Jenis</label>
                        <div class="controls">
                            <input type="text" name="jenis_satuan" placeholder="Kg, Ltr" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Perkembangan Harga Minggu Lalu</label>
                        <div class="controls">
                            <input type="text" name="ph_minggu_lalu" placeholder="Rp.1.xxx.xxx" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Perkembangan Harga Minggu ini</label>
                        <div class="controls">
                            <input type="text" name="ph_minggu_ini" placeholder="Rp.1.xxx.xxx" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Persediaan Harga Minggu Lalu</label>
                        <div class="controls">
                            <input type="text" name="ps_minggu_lalu" placeholder="Rp.1.xxx.xxx" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Persediaan Harga Minggu ini</label>
                        <div class="controls">
                            <input type="text" name="ps_minggu_ini" placeholder="Rp.1.xxx.xxx" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Persediaan Satuan</label>
                        <div class="controls">
                            <select name="ps_satuan" required>
                                <option value="Ton">Ton</option>
                                <option value="Kuintal">Kuintal</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Asal Barang</label>
                        <div class="controls">
                            <input type="text" name="asal_barang" placeholder="Asal Barang">
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