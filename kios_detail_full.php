<!doctype html>
<html class="no-js" lang="en">
    <?php include 'page/page_head.php'; ?>
   	<body>
        <div id="wrapper">
            <?php include 'page/page_topbar.php'; ?>
            <?php include 'page/page_header.php'; ?>
            <div id="masthead">
                <div class="container">
                    <div class="masthead-pad">
                        <div class="masthead-text">
                            <h2>Daftar Berita Terbaru</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div id="content">
                <div class="container-fluid">
                    <div class="row">
                        <div id="content">
                            <div class="container">
                                <div class="row">
                                    <?php  
                                        include 'page/page_config.php';

                                        $id = base64_decode($_GET['id']);

                                        $query = mysql_query("SELECT * FROM kios WHERE id='$id'") or die (mysql_error('Tabel tidak ditemukan'));
                                        $data  = mysql_fetch_array($query);
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
                                                        Data Keterangan Detail Pemilik Kios Blok <?php echo $data['blok']; ?> dengan Nama Pemilik <?php echo $data['nama']; ?>.
                                                    </div>
                                                    <br>
                                                    <form class="form-horizontal">
                                                        <div class="control-group">
                                                            <label class="control-label"></label>
                                                            <div class="controls">
                                                                <img src="<?php echo $data['foto']; ?>" style="width: 200px; height: 200px;">
                                                            </div>
                                                        </div>
                                                        <div class="control-group">
                                                            <label class="control-label">Blok</label>
                                                            <div class="controls">
                                                                <?php echo $data['id_blok']; ?>
                                                            </div>
                                                        </div>
                                                        <div class="control-group">
                                                            <label class="control-label">Nomer Blok</label>
                                                            <div class="controls">
                                                                <?php echo $data['no_blok']; ?>
                                                            </div>
                                                        </div>
                                                        <div class="control-group">
                                                            <label class="control-label">Nama Pemilik</label>
                                                            <div class="controls">
                                                                <?php echo $data['nama']; ?>
                                                            </div>
                                                        </div>
                                                        <div class="control-group">
                                                            <label class="control-label">Tempat & Tanggal lahir</label>
                                                            <div class="controls">
                                                                <?php echo $data['tempat']; ?>, <?php echo $data['tanggal']; ?>
                                                            </div>
                                                        </div>
                                                        <div class="control-group">
                                                            <label class="control-label">Alamat</label>
                                                            <div class="controls">
                                                                <?php echo $data['alamat']; ?>
                                                            </div>
                                                        </div>
                                                        <div class="control-group">
                                                            <label class="control-label">Pekerjaan</label>
                                                            <div class="controls">
                                                                <?php echo $data['pekerjaan']; ?>
                                                            </div>
                                                        </div>
                                                        <div class="control-group">
                                                            <label class="control-label">Jenis Komoditas</label>
                                                            <div class="controls">
                                                                <?php echo $data['jenis_komoditas']; ?>
                                                            </div>
                                                        </div>
                                                        <div class="control-group">
                                                            <label class="control-label">Type Kios</label>
                                                            <div class="controls">
                                                                <?php echo $data['type']; ?>
                                                            </div>
                                                        </div>
                                                        <div class="control-group">
                                                            <label class="control-label">Ukuran Kios</label>
                                                            <div class="controls">
                                                                <?php echo $data['ukuran']; ?>
                                                            </div>
                                                        </div>
                                                        <div class="control-group">
                                                            <label class="control-label">Status Kepemilikan</label>
                                                            <div class="controls">
                                                                <?php echo $data['status_kepemilikan']; ?>
                                                            </div>
                                                        </div>
                                                        <div class="control-group">
                                                            <label class="control-label">Nomer Register SHGP</label>
                                                            <div class="controls">
                                                                <?php echo $data['no_shgp']; ?>
                                                            </div>
                                                        </div>
                                                        <div class="control-group">
                                                            <div class="controls">
                                                            <a href="kios_detail.php">Kembali ke Daftar Data Pemilik Kios</div></a>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'page/page_foo.php'; ?>
        <?php include 'page/page_footer_kios.php'; ?>
    </body>
</html>