<div id="masthead">
    <div class="container">
        <div class="masthead-pad">
            <div class="masthead-text">
                <h2>Data Keterangan Pemilik KIOS Pasar Modern Cisaat</h2>
            </div>
        </div>
    </div>
</div>

<div id="content">
    <div class="container">
        <div class="row">
            <div class="span12">    
                <div class="alert alert-info">
                	Silahkan Masukan data Keterangan Pemilik KIOS Pasar Semi Modern Cisaat baru dibawah ini 
                </div>
                <br>
                <form class="form-horizontal" method="POST" action="maps_keterangan_proses.php" enctype="multipart/form-data">
                    <div class="control-group">
                        <label class="control-label">Blok</label>
                        <div class="controls">
                            <?php    
                                include '../page/page_config.php';    
                                $result = mysql_query("SELECT * FROM image_maps");  
                                $Array = "var id_blok = new Array();\n";  
                                    echo '<select name="id_blok" class="form-control" onchange="document.getElementById(\'id_blok\').value = id_blok[this.value]" required>';  
                                    echo '<option>--- BLOK KIOS ----</option>';  
                                        while ($row = mysql_fetch_array($result)) {  
                                            echo '<option value="' . $row['id_blok'] . '">' . $row['id_blok'] . '</option>';  
                                            $Array .= "id_blok['" . $row['id'] . "'] = '" . addslashes($row['id_blok']) . "';\n";  
                                        }  
                                    echo '</select>';  
                            ?>  
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Nomer Blok</label>
                        <div class="controls">
                            <input type="text" name="no_blok" placeholder="Contoh : 2B/3H" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Nama Pemilik</label>
                        <div class="controls">
                            <input type="text" name="nama" placeholder="Nama Pemilik Kios" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Tempat & Tanggal lahir</label>
                        <div class="controls">
                            <input type="text" name="tempat" placeholder="Tempat Lahir" required>
                            <input type="date" name="tanggal" class="datepicker"  required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Alamat</label>
                        <div class="controls">
                        <textarea name="alamat" style="margin: 0px; height: 178px; width: 581px;" required></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Pekerjaan</label>
                        <div class="controls">
                            <input type="text" name="pekerjaan" placeholder="Pekerjaan Pemilik Kios" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Jenis Komoditas</label>
                        <div class="controls">
                            <select name="jenis_komoditas" required>
                                <option value="" selected="selected">--- JENIS KOMODITAS KIOS ---</option>
                                <option value="Apotik">Apotik</option>
                                <option value="Bako">Bako</option>
                                <option value="Bakso">Bakso</option>
                                <option value="Bank">Bank</option>
                                <option value="Beras">Beras</option>
                                <option value="Buah-buahan">Buah-buahan</option>
                                <option value="Bubur">Bubur</option>
                                <option value="Bumbu giling">Bumbu giling</option>
                                <option value="Cilok">Cilok</option>
                                <option value="Counter">Counter</option>
                                <option value="Cue">Cue</option>
                                <option value="Daging ayam potong">Daging ayam potong</option>
                                <option value="Daging kambing">Daging kambing</option>
                                <option value="Daging sapi">Daging sapi</option>
                                <option value="Elektronik">Elektronik</option>
                                <option value="Emas">Emas</option>
                                <option value="Gula mera">Gula merah</option>
                                <option value="Ikan asin">Ikan asin</option>
                                <option value="Ikan basah/tawar">Ikan basah/tawar</option>
                                <option value="Ikan laut">Ikan laut</option>
                                <option value="Jahit">Jahit</option>
                                <option value="Kain">Kain</option>
                                <option value="Kecantikan">Kecantikan</option>
                                <option value="Kitab">Kitab</option>
                                <option value="Kelapa parut">Kelapa parut</option>
                                <option value="Kelontongan">Kelontongan</option>
                                <option value="Keringan">Keringan</option>
                                <option value="Kitab">Kitab</option>
                                <option value="Mainan">Mainan</option>
                                <option value="Mushola/WC">Mushola/WC</option>
                                <option value="Pakaian jadi">Pakaian jadi</option>
                                <option value="Penggilingan bakso">Penggilingan bakso</option>
                                <option value="Perak">Perak</option>
                                <option value="34">Pete/Sepi</option>
                                <option value="Plastik">Plastik</option>
                                <option value="Rampe">Rampe</option>
                                <option value="Rempah-rempah">Rempah-rempah</option>
                                <option value="Salon">Salon</option>
                                <option value="Sayuran">Sayuran</option>
                                <option value="Sembako">Sembako</option>
                                <option value="Sepatus/sandal">Sepatus/sandal</option>
                                <option value="Tahu/tempe">Tahu/tempe</option>
                                <option value="Telur">Telur</option>
                                <option value="Warung kopi/rokok">Warung kopi/rokok</option>
                                <option value="Warung nasi">Warung nasi</option>
                                <option value="Gajih">Gajih</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Type Kios</label>
                        <div class="controls">
                            <select name="ukuran" required>
                                <option value="">--- KATEGORI TYPE KIOS ---</option>
                                <option value="KIOS">KIOS</option>
                                <option value="GUKI">GUKI</option>
                                <option value="LOS">LOS</option>
                                <option value="HUK">HUK</option>
                                <option value="BADAN">BADAN</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Ukuran Kios</label>
                        <div class="controls">
                            <select name="type" required>
                                <option value="" selected="selected">--- UKURAN KIOS ---</option>
                                <option value="2 x 1,6">2 x 1,6</option>
                                <option value="2 x 1,9">2 x 1,9</option>
                                <option value="2 x 2,5">2 x 2,5</option>
                                <option value="2 x 3">2 x 3</option>
                                <option value="2 x 3,3">2 x 3,3</option>
                                <option value="3 x 2,5">3 x 2,5</option>
                                <option value="3 x 3,3">3 x 3,3</option>
                                <option value="3 x 3,5">3 x 3,5</option>
                                <option value="3 x 6">3 x 6</option>
                                <option value="4 x 2,5">4 x 2,5</option>
                                <option value="4 x 3">4 x 3</option>
                                <option value="4 x 3,3">4 x 3,3</option>
                                <option value="4 x 3,5">4 x 3,5</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Status Kepemilikan</label>
                        <div class="controls">
                            <select name="status_kepemilikan" required>
                                <option value="" selected="selected">--- STATUS KEPEMILIKAN ---</option>
                                <option value="Kontrak">Kontrak</option>
                                <option value="Cicilan">Cicilan</option>
                                <option value="Lunas">Lunas</option>
                                <option value="Dalam Proses">Dalam Proses</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Nomer Register SHGP</label>
                        <div class="controls">
                            <input type="text" name="no_shgp" placeholder="Contoh : 511.2/414/KA_2 B/DKPP/2013" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Foto</label>
                        <div class="controls">
                            <input type="file" name="foto" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Active</label>
                        <div class="controls">
                            <select name="status" required>
                                <option value="">--- STATUS KETERANGAN KIOS ---</option>
                                <option value="ADA">ADA</option>
                                <option value="TIDAK ADA">TIDAK ADA</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" name="simpan" class="btn btn-success btn-large">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>