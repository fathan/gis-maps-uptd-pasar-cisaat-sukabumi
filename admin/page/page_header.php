<div id="header">
    <div class="container">
        <a href="+home.php" class="brand">Sistem Informasi Geografis</a>
        <a href="#" class="btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <i class="icon-reorder"></i>
        </a>
    
        <div class="nav-collapse">
            <ul id="main-nav" class="nav pull-right">
                <li class="dropdown active">                   
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-home"></i>
                        <span>Home</span> 
                    </a>                     
                </li>
                
                <li class="dropdown">                   
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-th"></i>
                        <span>Lihat Data Informasi</span> 
                        <b class="caret"></b>
                    </a>    
                
                    <ul class="dropdown-menu">
                        <li><a href="?page=<?php echo base64_encode('artikel_view'); ?>">Lihat Data Artikel</a></li>
                        <li><a href="?page=<?php echo base64_encode('profil_view'); ?>">Lihat Data Profil</a></li>
                        <li><a href="?page=<?php echo base64_encode('galeri_view'); ?>">Lihat Data Galeri</a></li>
                        <li><a href="?page=<?php echo base64_encode('komentar_view'); ?>">Lihat Data Komentar</a></li>
                        <li><a href="?page=<?php echo base64_encode('kotak_saran_view'); ?>">Lihat Data Kotak Saran </a></li>
                    </ul>                   
                </li>

                <li class="dropdown">                   
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-th"></i>
                        <span>Input Data Informasi</span> 
                        <b class="caret"></b>
                    </a>    
                
                    <ul class="dropdown-menu">
                        <li><a href="?page=<?php echo base64_encode('artikel_input'); ?>">Input Data Artikel</a></li>
                        <li><a href="?page=<?php echo base64_encode('profil_input'); ?>">Input Data Profil</a></li>
                        <li><a href="?page=<?php echo base64_encode('galeri_input'); ?>">Input Data Galeri</a></li>
                    </ul>                   
                </li>

                <li class="dropdown">                   
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-th"></i>
                        <span>Data Maps</span> 
                        <b class="caret"></b>
                    </a>    
                
                    <ul class="dropdown-menu">
                        <li><a href="?page=<?php echo base64_encode('maps_keterangan_view'); ?>">Input Data Keterangan Maps KIOS</a></li>
                        <li><a href="?page=<?php echo base64_encode('maps_view'); ?>">Lihat Data Maps KIOS</a></li>
                    </ul>                   
                </li>

                <li class="dropdown">                  
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-th"></i>
                        <span>Data Harga Sembako</span> 
                        <b class="caret"></b>
                    </a>    
                
                    <ul class="dropdown-menu">
                        <li><a href="?page=<?php echo base64_encode('sembako_input'); ?>">Input Data Harga Sembako</a></li>
                        <li class="dropdown-submenu">
                          <a tabindex="-1" href="#">Lihat Data</a>
                          <ul class="dropdown-menu">
                            <li><a href="?page=<?php echo base64_encode('sembako_view'); ?>">Data Harga Sembako</a></li>
                            <li><a href="?page=<?php echo base64_encode('keterangan_input_update'); ?>">Data Keterangan Harga Sembako</a></li>
                          </ul>
                        </li>
                    </ul>                   
                </li>
            </ul>
        </div>
    </div>
</div>