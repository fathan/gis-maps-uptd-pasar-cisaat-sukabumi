<div id="header">
    
    <div class="container">
        
        <a href="index.php" class="brand_kaduana">Sistem Informasi Geografis</a>
        
        <a href="#" class="btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <i class="icon-reorder"></i>
        </a>
    
        <div class="nav-collapse">
            <ul id="main-nav" class="nav pull-right">
                <li>                   
                    <a href="index.php">
                        <i class="icon-home"></i>
                        <span>Home</span> 
                    </a>                     
                </li>
                
                <li class="dropdown">                   
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-th"></i>
                        <span>Profil</span> 
                        <b class="caret"></b>
                    </a>    
                
                    <ul class="dropdown-menu">
                        <?php
                            include 'page/page_config.php';
                            $query = mysql_query("SELECT * FROM profil WHERE status = '1' ORDER BY id") or die (mysql_error('Tabel tidak ditemukan'));
                            while ($data = mysql_fetch_array($query)){

                            $id   = base64_encode($data['id']);
                        ?>

                        <li><a href="profil_detail.php?&id=<?php echo $id; ?>"><?php echo $data['judul']; ?></a></li>
                        <?php
                            }
                        ?>
                    </ul>                   
                </li>

                <li class="dropdown">                   
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-th"></i>
                        <span>Info</span> 
                        <b class="caret"></b>
                    </a>    
                
                    <ul class="dropdown-menu">
                        <li><a href="informasi_detail.php">Berita terbaru</a></li>
                        <li><a href="sembako_detail.php">Harga Sembako</a></li>
                        <li><a href="kios_detail.php">Status Kepemilikan</a></li>
                    </ul>                   
                </li>

                <li>                   
                    <a href="peta_detail.php">
                        <i class="icon-th"></i>
                        <span>Peta Denah Kios</span> 
                    </a>                     
                </li>

                <li>                   
                    <a href="galeri_detail1.php">
                        <i class="icon-th"></i>
                        <span>Galeri</span> 
                    </a>                     
                </li>

                <li>                   
                    <a href="kotak_saran_detail.php">
                        <i class="icon-th"></i>
                        <span>Kotak Saran</span> 
                    </a>                     
                </li>
            </ul>
        </div>
    </div>
</div>