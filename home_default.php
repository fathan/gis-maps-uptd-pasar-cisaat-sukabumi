<style type="text/css">
    hr.style-eight {
        padding: 0;
        border: none;
        border-top: medium double #333;
        color: #333;
        text-align: center;
    }
    hr.style-eight:after {
        font-family: Arial;
        font-size: 9px;
        content: "Website Resmi Kantor UPTD Pasar Cisaat Semi Modern Kabupaten Sukabumi";
        display: inline-block;
        position: relative; 
        top: -0.7em;  
        font-size: 1.5em;
        padding: 0 0.25em;
        background: white;
    }
</style>


<div id="masthead">
    <div class="container">
        <div class="masthead-pad">
            <div class="masthead-text">
                <h2>Beranda</h2>
            </div>
        </div>
    </div>
</div>

<div id="content">
    <div class="container">
        <div class="row"> 
            <div class="span12">
                <div class="pricing-plans plans-4">
                    <div class="alert alert-info">
                        <i class="icon-user"></i>&nbsp;&nbsp;Selamat Datang di website resmi UPTD Pasar Cisaat Semi Modern, Silahkan Pilih Menu dibawah ini
                    </div>

                    <a href="informasi_detail.php">
                        <div class="plan-container">
                            <div class="plan">
                                <div class="plan-header">
                                    <div class="plan-title">
                                        BERITA TERBARU           
                                    </div> 
                                    
                                    <div class="plan-price">
                                       <img src="asset/images/1.png" style="width: 210px; height: 210px;">
                                    </div>     
                                </div>
                            </div>
                        </div>
                    </a>   
                   
                   <a href="peta_detail.php">
                        <div class="plan-container">
                            <div class="plan">
                                <div class="plan-header">
                                    <div class="plan-title">
                                        PETA DENAH KIOS              
                                    </div> 
                                    
                                    <div class="plan-price">
                                       <img src="asset/images/mapss.png" style="width: 210px; height: 210px;">
                                    </div>     
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="galeri_detail1.php">
                        <div class="plan-container">
                            <div class="plan">
                                <div class="plan-header">
                                    <div class="plan-title">
                                        GALERI KEGIATAN         
                                    </div> 
                                    
                                    <div class="plan-price">
                                       <img src="asset/images/3.png" style="width: 210px; height: 210px;">
                                    </div>     
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="sembako_detail.php">
                        <div class="plan-container">
                            <div class="plan">
                                <div class="plan-header">
                                    <div class="plan-title">
                                        DAFTAR HARGA SEMBAKO  
                                    </div> 
                                    
                                    <div class="plan-price">
                                       <img src="asset/images/harga.png" style="width: 210px; height: 210px;">
                                    </div>     
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="span4">
                    <div class="alert alert-info">Berita Terbaru</div>
                    <ul class="nav nav-list bs-docs-sidenav affix-top">
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
                </div>
                <div class="span3">
                    <div class="alert alert-info">Agenda Terbaru</div>
                    <ul class="nav nav-list bs-docs-sidenav affix-top">
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
                </div>
                <div class="span4">
                    <div class="alert alert-info">Pengumuman Terbaru</div>
                    <ul class="nav nav-list bs-docs-sidenav affix-top">
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
            </div>
        </div>
    </div>
</div>