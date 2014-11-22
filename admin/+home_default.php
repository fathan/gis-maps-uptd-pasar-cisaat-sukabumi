<?php  
    include '../conf_config.php';
?>

<div id="masthead">
    <div class="container">
        <div class="masthead-pad">
            <div class="masthead-text">
                <h2>Beranda</h2>
                <p>Halaman Utama Ruang Administrator Website UPTD Pasar Cisaat</p>
            </div>
        </div>
    </div>
</div>

<div id="content">
    <div class="container">
        <div class="row">
            
            <div class="span3">
                <h3>Welcome back, Admin.</h3>
                
                <p>Dalam ruang Administrator ini anda bisa memanagement semua konten yang ada dalam ruang ini.</p>
                
                <table class="table stat-table table-hover">
                    <tbody>
                        <tr>
                            <td class="value">
                            <?php
                                include '../conf_config.php';
                                $query =mysql_query("SELECT * FROM informasi");
                                $num_log1 = mysql_num_rows ($query);
                                echo "<span class=\"badge badge-secondary\">$num_log1</span>";
                            ?>
                            </td>
                            <td class="full">Jumlah Berita</td>
                        </tr>
                        <tr>
                            <td class="value">
                            <?php
                                $query =mysql_query("SELECT * FROM komentar");
                                $num_log2 = mysql_num_rows ($query);
                                echo "<span class=\"badge badge-secondary\">$num_log2</span>";
                            ?>
                            </td>
                            <td class="full">Jumlah Komentar</td>
                        </tr>
                        <tr>
                            <td class="value">
                            <?php
                                $query =mysql_query("SELECT * FROM galeri");
                                $num_log3 = mysql_num_rows ($query);
                                echo "<span class=\"badge badge-secondary\">$num_log3</span>";
                            ?>
                            </td>
                            <td class="full">Jumlah Foto Galeri</td>
                        </tr>
                        <tr>
                            <td class="value">
                            <?php
                                $query =mysql_query("SELECT * FROM kios");
                                $num_log4 = mysql_num_rows ($query);
                                echo "<span class=\"badge badge-secondary\">$num_log4</span>";
                            ?>
                            </td>
                            <td class="full">Jumlah Kios</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="span9">
                <div class="pricing-plans plans-4">
                    <div class="alert alert-info">
                        <i class="icon-user"></i>&nbsp;&nbsp;Selamat Datang di Ruang Administrator website resmi UPTD Pasar Cisaat Semi Modern, Silahkan Pilih Menu dibawah ini
                    </div>

                    <div class="plan-container">
                        <div class="plan">
                            <div class="plan-header">
                                <div class="plan-title">
                                    Data Informasi                
                                </div> 
                                
                                <div class="plan-price">
                                   <a href="informasi_detail.php"><img src="../asset/images/1.png" style="width: 220px; height: 220px;"></a>
                                </div>     
                            </div>
                        </div>
                    </div>
                    <div class="plan-container">
                        <div class="plan">
                            <div class="plan-header">
                                <div class="plan-title">
                                    Data Peta Kios             
                                </div> 
                                
                                <div class="plan-price">
                                   <a href="peta_detail.php"><img src="../asset/images/mapss.png" style="width: 220px; height: 220px;"></a>
                                </div>     
                            </div>
                        </div>
                    </div>
                    <div class="plan-container">
                        <div class="plan">
                            <div class="plan-header">
                                <div class="plan-title">
                                    Data Galeri             
                                </div> 
                                
                                <div class="plan-price">
                                   <a href="galeri_detail1.php"><img src="../asset/images/3.png" style="width: 220px; height: 220px;"></a>
                                </div>     
                            </div>
                        </div>
                    </div>
                    <div class="plan-container">
                        <div class="plan">
                            <div class="plan-header">
                                <div class="plan-title">
                                    Data Sembako         
                                </div> 
                                
                                <div class="plan-price">
                                   <a href="sembako_detail.php"><img src="../asset/images/harga.png" style="width: 220px; height: 220px;"></a>
                                </div>     
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>