<?php  
    include '../page/page_config.php';

    $id = base64_decode($_GET['id']);

    $query    = mysql_query("SELECT * FROM kios WHERE id='$id'") or die (mysql_error('Tabel tidak ditemukan'));
    $data = mysql_fetch_array($query);
?>

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
                <form class="form-horizontal" method="POST" action="maps_keterangan_update.php" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                    <div class="control-group">
                        <label class="control-label">Blok</label>
                        <div class="controls">
                            <?php    
                                include '../page/page_config.php';    
                                $result = mysql_query("SELECT * FROM image_maps");  
                                $Array = "var id_blok = new Array();\n";  
                                    echo '<select name="id_blok" class="form-control" onchange="document.getElementById(\'id_blok\').value = id_blok[this.value]" required>';  
                                    echo '<option value="' . $data['blok'] . '">' . $data['blok'] . '</option>';    
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
                            <input type="text" name="no_blok" value="<?php echo $data['no_blok']; ?>" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Nama Pemilik</label>
                        <div class="controls">
                            <input type="text" name="nama" value="<?php echo $data['nama']; ?>" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Tempat & Tanggal lahir</label>
                        <div class="controls">
                            <input type="text" name="tempat" value="<?php echo $data['tempat']; ?>" required>
                            <input type="date" name="tanggal" class="datepicker" value="<?php echo $data['tanggal']; ?>"  required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Alamat</label>
                        <div class="controls">
                        <textarea name="alamat" style="margin: 0px; height: 178px; width: 581px;" required><?php echo $data['alamat']; ?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Pekerjaan</label>
                        <div class="controls">
                            <input type="text" name="pekerjaan" value="<?php echo $data['pekerjaan']; ?>" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Jenis Komoditas</label>
                        <div class="controls">
                            <select name="jenis_komoditas" required>
                                <option value="<?php echo $data['jenis_komoditas']; ?>"><?php echo $data['jenis_komoditas']; ?></option>
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
                                <option value="<?php echo $data['type']; ?>"><?php echo $data['type']; ?></option>
                                <option value="KIOS">KIOS</option>
                                <option value="GUKI">GUKI</option>
                                <option value="LOS">LOS</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Ukuran Kios</label>
                        <div class="controls">
                            <select name="type" required>
                                <option value="<?php echo $data['ukuran']; ?>"><?php echo $data['ukuran']; ?></option>
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
                                <option value="<?php echo $data['status_kepemilikan']; ?>"><?php echo $data['status_kepemilikan']; ?></option>
                                <option value="Kontrak">Kontrak</option>
                                <option value="Cicilan">Cicilan</option>
                                <option value="Lunas">Lunas</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Nomer Register SHGP</label>
                        <div class="controls">
                            <input type="text" name="no_shgp" value="<?php echo $data['no_shgp']; ?>" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"></label>
                        <div class="controls">
                            <img src="<?php echo $data['foto']; ?>" style="width: 100px; height: 100px;">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Foto</label>
                        <div class="controls">
                            <input type="file" name="foto" value="<?php echo $data['foto']; ?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Active</label>
                        <div class="controls">
                            <select name="status" required>
                                <option value="<?php echo $data['status']; ?>"><?php echo $data['status']; ?></option>
                                <option value="">--- STATUS KETERANGAN KIOS ---</option>
                                <option value="ADA">ADA</option>
                                <option value="TIDAK ADA">TIDAK ADA</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" name="simpan" class="btn btn-success btn-large">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>