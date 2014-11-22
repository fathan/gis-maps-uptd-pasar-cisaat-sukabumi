<?php  
    include '../page/page_config.php';

    $query = mysql_query("SELECT * FROM keterangan_harga_sembako") or die (mysql_error('Tabel tidak ditemukan'));
    $data  = mysql_fetch_array($query);
?>

<div id="masthead">
    <div class="container">
        <div class="masthead-pad">
            <div class="masthead-text">
                <h2>Data Keterangan Harga Sembako</h2>
            </div>
        </div>
    </div>
</div>

<div id="content">
    <div class="container">
        <div class="row">
            <div class="span12">    
                <div class="alert alert-info">
                	Data Keterangan Harga Sembako UPTD Pasar Tradisional Semi Modern Cisaat Kabupaten Sukabumi
                </div>
                <br>
                <div class="span5">
                    <form class="form-horizontal" method="POST" action="keterangan_update.php" name="update">
                    <input type="hidden" name="id_keterangan" value="<?php echo $data['id_keterangan'] ?>">
                    <div class="control-group">
                        <label class="control-label"><strong>Judul</strong></label>
                        <div class="controls">
                        <textarea name="judul" style="margin: 0px; width: 207px; height: 102px;" required><?php echo $data['judul'] ?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"><strong>Minggu</strong></label>
                        <div class="controls">
                            <input type="text" name="minggu" value="<?php echo $data['minggu'] ?>" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"><strong>Bulan</strong></label>
                        <div class="controls">
                            <input type="text" name="bulan" value="<?php echo $data['bulan'] ?>" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"><strong>Tahun</strong></label>
                        <div class="controls">
                            <input type="text" name="tahun" value="<?php echo $data['tahun'] ?>" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"><strong>Kepala UPTD</strong></label>
                        <div class="controls">
                            <textarea name="kepala_uptd" style="margin: 0px; width: 207px; height: 102px;"><?php echo $data['kepala_uptd'] ?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"><strong>NIP Kepala</strong></label>
                        <div class="controls">
                            <input type="text" name="nip_kepala_uptd" value="<?php echo $data['nip_kepala_uptd'] ?>" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"><strong>Pencatat Harga</strong></label>
                        <div class="controls">
                            <textarea name="pencatat_harga" style="margin: 0px; width: 207px; height: 102px;"><?php echo $data['pencatat_harga'] ?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"><strong>NIP Pencatat Harga</strong></label>
                        <div class="controls">
                            <input type="text" name="nip_pencatat_harga" value="<?php echo $data['nip_pencatat_harga'] ?>" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" name="update" class="btn btn-success btn-large" style="width: 220px;">Update</button>
                        </div>
                    </div>
                </form>
                </div>
                <div class="span6">
                    <?php
                        include '../page/page_config.php';

                        $query = mysql_query("SELECT * FROM keterangan_harga_sembako") or die (mysql_error('Tabel tidak ditemukan'));
                        $data  = mysql_fetch_array($query);
                    ?>  
                    <table class="table table-hover">
                        <tr>
                            <td width="100
                            "><strong>Judul</strong></td>
                            <td>:</td>
                            <td><?php echo $data['judul'] ?></td>
                        </tr>
                        <tr>
                            <td><strong>Minggu</strong></td>
                            <td>:</td>
                            <td><?php echo $data['minggu'] ?></td>
                        </tr>
                        <tr>
                            <td><strong>Bulan</strong></td>
                            <td>:</td>
                            <td><?php echo $data['bulan'] ?></td>
                        </tr>
                        <tr>
                            <td><strong>Tahun</strong></td>
                            <td>:</td>
                            <td><?php echo $data['tahun'] ?></td>
                        </tr>
                        <tr>
                            <td><strong>Kepala UPTD</strong></td>
                            <td>:</td>
                            <td><?php echo $data['kepala_uptd'] ?></td>
                        </tr>
                        <tr>
                            <td><strong>NIP Kepala</strong></td>
                            <td>:</td>
                            <td><?php echo $data['nip_kepala_uptd'] ?></td>
                        </tr>
                        <tr>
                            <td><strong>Pencatat Harga</strong></td>
                            <td>:</td>
                            <td><?php echo $data['pencatat_harga'] ?></td>
                        </tr>
                        <tr>
                            <td><strong>NIP Pencatat</strong></td>
                            <td>:</td>
                            <td><?php echo $data['nip_pencatat_harga'] ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>