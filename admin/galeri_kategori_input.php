<div id="masthead">
    <div class="container">
        <div class="masthead-pad">
            <div class="masthead-text">
                <h2>Data Galeri</h2>
                <p>Halaman Management Data Galeri</p>
            </div>
        </div>
    </div>
</div>

<div id="content">
    <div class="container">
        <div class="row">
            <div class="span4 well">  
                <form action="?page=<?php echo base64_encode('galeri_kategori_proses'); ?>" method="POST">
                    <div class="control-group">
                        <label class="control-label">Judul</label>
                        <div class="controls">
                            <input type="text" name="kategori" placeholder="Kategori Gambar">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="span7">    
                <div class="alert alert-info">
                    Data Kategori Album Galeri UPTD Pasar Tradisional Semi Modern Cisaat
                </div>

                <table cellpadding="0" cellspacing="0" border="0" class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th class="nosort"><h3>NO</h3></th>
                            <th><h3>KATEGORI</h3></th>
                            <th><h3>ACTION</h3></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include '../page/page_config.php';

                            $no = 1;
                            $query = mysql_query("SELECT * FROM galeri_kategori") or die (mysql_error('Tabel tidak ditemukan'));
                                while ($data = mysql_fetch_array($query)){

                                $id = base64_encode($data['id']);
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $data['kategori']; ?></td>
                            <td>
                                <a href="+home.php?page=<?php echo base64_encode('galeri_kategori_delete') ?><?php echo '&id='.$id; ?>"><div class="btn btn-danger btn-sm">DELETE</div></a>
                            </td>
                        </tr>
                        <?php
                            $no++;
                        }
                        ?>
                    </tbody>
                </table>
                <br>
                <a href="+home.php?page=<?php echo base64_encode('galeri_input'); ?>"><div class="btn btn-info ">Kembali ke Halaman Input Galeri</div></a>
                </div>
            </div>
        </div>
    </div>
</div>