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
                            <h2>Detail Informasi Terbaru</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div id="content">
                <div class="container-fluid">
                    <div class="row">
                        <?php
                            include 'page/page_config.php';

                            $id   = base64_decode($_GET['id']);

                            $query = mysql_query("SELECT * FROM informasi WHERE id='$id'") or die (mysql_error('Tabel tidak ditemukan'));
                            $data  = mysql_fetch_array($query);
                        ?>

                        <div id="content">
                            <div class="container">
                                <div class="row">
                                    <div class="span3 bs-docs-sidebar">
                                        <ul class="nav nav-list bs-docs-sidenav">
                                          <li><h3>Berita Terbaru</h3></li>
                                          <li><hr></li>
                                          <?php
                                            $query = mysql_query("SELECT * FROM informasi WHERE status='1' AND kategori='Berita Terbaru' ORDER BY id DESC LIMIT 5");
                                              while ($dataartikel = mysql_fetch_array($query)) {

                                              $id = base64_encode($dataartikel['id']);
                                          ?>
                                          <li><a href="informasi_read.php?id=<?php echo $id; ?>"><i class="icon-chevron-right"></i> <?php echo $dataartikel['judul']; ?></a></li>
                                          <?php
                                              }

                                          ?>
                                        </ul>
                                        <br>
                                        <br>
                                        <ul class="nav nav-list bs-docs-sidenav">
                                          <li><h3>Agenda</h3></li>
                                          <li><hr></li>
                                          <?php
                                            $query = mysql_query("SELECT * FROM informasi WHERE status='1' AND kategori='Agenda' ORDER BY id DESC LIMIT 5");
                                              while ($dataartikel = mysql_fetch_array($query)) {
                                                $id = base64_encode($dataartikel['id']);
                                          ?>
                                          <li><a href="informasi_read.php?id=<?php echo $id; ?>"><i class="icon-chevron-right"></i> <?php echo $dataartikel['judul']; ?></a></li>
                                          <?php
                                              }

                                          ?>
                                        </ul>
                                        <br>
                                        <br>
                                        <ul class="nav nav-list bs-docs-sidenav">
                                          <li><h3>Pengumuman</h3></li>
                                          <li><hr></li>
                                          <?php
                                            $query = mysql_query("SELECT * FROM informasi WHERE status='1' AND kategori='Pengumuman' ORDER BY id DESC LIMIT 5");
                                              while ($dataartikel = mysql_fetch_array($query)) {
                                                $id = base64_encode($dataartikel['id']);
                                          ?>
                                          <li><a href="informasi_read.php?id=<?php echo $id; ?>"><i class="icon-chevron-right"></i> <?php echo $dataartikel['judul']; ?></a></li>
                                          <?php
                                              }

                                          ?>
                                        </ul>
                                    </div>
                                    <div class="span9">    
                                        <h2><?php echo $data['judul']; ?></h2>
                                        <small>Pengirim : <strong><?php echo $data['anchor']; ?></strong>| Tanggal : <strong><?php echo $data['date']; ?></strong>| Kategori : <strong><?php echo $data['kategori']; ?></strong></small>
                                        <br>
                                        <br>
                                        <center><a href="project_gis/<?php echo $data['gambar']; ?>" class="ui-lightbox"><img class="thumbnail" width="300" height="300" src="project_gis/<?php echo $data['gambar']; ?>" alt="<?php echo $data['judul']; ?>"></a></center><br>
                                        <?php echo $data['isi']; ?>
                                        <hr>
                                        <br>
                                        <div class="post-comments pad-25">
                                          <div class="subpage-title">
                                              <h5>Komentar Masuk</h5>
                                          </div>

                                          <?php
                                             $query = "SELECT * FROM komentar WHERE id_topik='$id' AND topik='Berita' ORDER BY id DESC";
                                             $hasil = mysql_query($query);

                                             if (mysql_num_rows($hasil) > 0)
                                             {
                                                while ($data = mysql_fetch_array($hasil))
                                                {
                                          ?>

                                          <div class="well">
                                          <ul class="media-list">
                                              <li class="media">
                                                  <a class="pull-left" href="#">
                                                  <img class="img-circle" width="64" height="64" src="asset/images/forum1.png" alt="Gambar User">
                                                  </a>
                                                  <div class="media-body">
                                                      <h5 class="media-heading">
                                                          <a href="#"><?php echo $data['nama']; ?></a>
                                                          <span class="comment-date"><?php echo $data['date']; ?></span>
                                                      </h5>
                                                      <div style=" border-bottom: dashed #000 1px; margin-bottom:9px;"></div>
                                                      <p>
                                                          <?php echo $data['isi']; ?>
                                                      </p>
                                                  </div>
                                              </li>
                                          </ul>
                                          </div>

                                          <?php
                                                }
                                             }elseif (mysql_num_rows($hasil) == 0) echo "<p><div class='alert alert-danger'>Maaf, Belum ada Komentar</div></p>";
                                          ?>
                                      </div>
                                        <br>
                                        <hr>
                                        <form action="informasi_komentar.php" method="POST">
                                          <input type="hidden" name="id_topik" value="<?php echo $id; ?>">
                                          <div class="control-group">
                                              <label class="control-label">Nama</label>
                                              <div class="controls">
                                                <input type="text" name="nama" placeholder="Username" style="width: 670px;" required>      
                                              </div>
                                          </div>
                                          <div class="control-group">
                                              <label class="control-label">Isi Komentar</label>
                                              <div class="controls">
                                                <textarea name="isi" style="margin: 0px 0px 10px; height: 200px; width: 675px;" cols="30" rows="10" placeholder="Masukan Isi Komentar Anda" required></textarea>
                                              </div>
                                          </div>
                                          <div class="control-group">
                                              <label class="control-label"></label>
                                              <div class="controls">
                                                <input type="submit" class="btn btn-success btn-large" value="Kirim">      
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

        <?php include 'page/page_foo.php'; ?>
        <?php include 'page/page_footer.php'; ?>
    </body>
</html>