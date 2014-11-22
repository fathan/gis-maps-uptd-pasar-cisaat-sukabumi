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
                            <h2>Kotak Saran</h2>
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
                            $idd  = base64_decode($id);
                            $iddd = base64_decode($idd);

                            $query = mysql_query("SELECT * FROM profil WHERE id='$iddd'") or die (mysql_error('Tabel tidak ditemukan'));
                            $data  = mysql_fetch_array($query);
                        ?>

                        <div id="content">
                            <div class="container">
                                <div class="row">
                                    <div class="span3 bs-docs-sidebar">
                                        <ul class="nav nav-list bs-docs-sidenav">

                                          <li><h3 class="sidebar_kiri">Berita Terbaru</h3></li>
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
                                          <li><h3 class="sidebar_kiri">Agenda</h3></li>
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
                                          <li><h3 class="sidebar_kiri">Pengumuman</h3></li>
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
                                        <div class="alert alert-success">
                                          <iframe width="850" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=id&amp;geocode=&amp;q=Kota+Sukabumi&amp;sll=37.0625,-95.677068&amp;sspn=41.275297,86.572266&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=Sukabumi,+Jawa+Barat,+Indonesia&amp;ll=-6.92405,106.922203&amp;spn=0.025348,0.042272&amp;z=14&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=id&amp;geocode=&amp;q=Kota+Sukabumi&amp;sll=37.0625,-95.677068&amp;sspn=41.275297,86.572266&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=Sukabumi,+Jawa+Barat,+Indonesia&amp;ll=-6.92405,106.922203&amp;spn=0.025348,0.042272&amp;z=14" style="color:#0000FF;text-align:left">Lihat Peta Dalam Tampilan Lebih Besar</a></small>
                                        </div>
                                        <br>
                                        <form action="kotak_saran_proses.php" method="POST">
                                          <div class="control-group">
                                              <label class="control-label">Nama</label>
                                              <div class="controls">
                                                <input type="text" name="nama" placeholder="Nama Lengkap" required>      
                                              </div>
                                          </div>
                                          <div class="control-group">
                                              <label class="control-label">Email</label>
                                              <div class="controls">
                                                <input type="email" name="email" placeholder="Youremail@mail.com" required>      
                                              </div>
                                          </div>
                                          <div class="control-group">
                                              <label class="control-label">Isi</label>
                                              <div class="controls">
                                                <textarea name="isi" style="margin: 0px 0px 10px; height: 200px; width: 675px;" cols="30" rows="10" required></textarea>
                                              </div>
                                          </div>
                                          <div class="control-group">
                                              <label class="control-label"></label>
                                              <div class="controls">
                                                <input type="submit" class="btn btn-info btn-lg" value="Kirim">      
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