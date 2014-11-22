<!doctype html>
<html class="no-js" lang="en">
    <?php include 'page/page_head.php'; ?>
    <script type="text/javascript">
    function print(meh)
    {
        var x = screen.width/2 - 900/2;
        var y = screen.height/2 - 450/2;
        window.open('sembako_print.php','MyWindow','toolbar=no,colors=yes,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=1063,height=663');
    }
    </script>
    <body>
        <div id="wrapper">
            <?php include 'page/page_topbar.php'; ?>
            <?php include 'page/page_header.php'; ?>
            <div id="masthead">
                <div class="container">
                    <div class="masthead-pad">
                        <div class="masthead-text">
                            <h2>Info Harga Sembako</h2>
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
                                    <div class="span12" style="border:dashed 2px #000; padding:20px; -webkit-border-radius:20px; -moz-border-radius:20px; border-radius:20px; -moz-box-shadow: 0 0 10px 10px rgba(0, 0, 0, 0.21);-webkit-box-shadow: 0 0 10px 10px rgba(0, 0, 0, 0.21); box-shadow: 0 0 10px 10px rgba(0, 0, 0, 0.21); filter:alpha(opacity=100); z-index:2; text-decoration:none">

                                    <?php  
                                      include 'page/page_config.php';

                                      $query1 = mysql_query("SELECT * FROM keterangan_harga_sembako");
                                      $data1  = mysql_fetch_array($query1);
                                    ?>
                                    <center>
                                      <strong>
                                        <h3><?php echo $data1['judul']; ?><br>
                                        MINGGU KE <?php echo $data1['minggu']; ?> &nbsp; BULAN <?php echo $data1['bulan']; ?> &nbsp; TAHUN <?php echo $data1['tahun']; ?>
                                        </h3>
                                      </strong>
                                    </center>
                                      <br>
                                      <br>
                                      <!-- <a href=""><button class="btn btn-success btn-large">PRINT HARGA SEMBAKO</button></a>
                                      <br>
                                      <br> -->
                                      <div class="table-responsive">
                                      <a href="#" onclick="print(this); return false;" target="_blank"><div class="btn btn-info btn-large"><i class="icon-print"></i>&nbsp;&nbsp;CETAK LAPORAN</div></a><br><br>
                                      <table class="table table-bordered table-hover table-striped">
                                        <tr>
                                          <th rowspan="2" style="background-color: #3B4737; color: #FFF;"><center>No</center></th>
                                          <th colspan="2" style="background-color: #23A792; color: #FFF;"><center>Jenis Bahan Pokok</center></th>
                                          <th rowspan="2" style="background-color: #9723A7; color: #FFF;"><center>Satuan</center></th>
                                          <th colspan="2" style="background-color: #236DA7; color: #FFF;"><center>Perkembangan Harga</center></th>
                                          <th colspan="3" style="background-color: #C71717; color: #FFF;"><center>Persediaan</center></th>
                                          <th rowspan="2" style="background-color: #41B14A; color: #FFF;"><center>Asal Barang</center></th>
                                        </tr>
                                        <tr>
                                          <td style="background-color: #23A792; color: #FFF;"><strong><center>Kategori</center></strong></td>
                                          <td style="background-color: #23A792; color: #FFF;"><strong><center>Jenis</center></strong></td>
                                          <td style="background-color: #236DA7; color: #FFF;"><strong><center>Minggu Lalu</center></strong></td>
                                          <td style="background-color: #236DA7; color: #FFF;"><strong><center>Minggu Ini</center></strong></td>
                                          <td style="background-color: #C71717; color: #FFF;"><strong><center>Minggu lalu</center></strong></td>
                                          <td style="background-color: #C71717; color: #FFF;"><strong><center>Minggu Ini</center></strong></td>
                                          <td style="background-color: #C71717; color: #FFF;"><strong><center>Satuan</center></strong></td>
                                        </tr>
                                        <?php  
                                          include 'page/page_config.php';

                                          $no = 1;
                                          $query = mysql_query("SELECT * FROM sembako") or die (mysql_error('tabel tidak ditemukan'));
                                            while($data2 = mysql_fetch_array($query)){
                                        ?>
                                        <tr>
                                          <td style="background-color: #3B4737; color: #FFF;"><center><strong><?php echo $no; ?></strong></center></td>
                                          <td><center><?php echo $data2['kategori']; ?></center></td>
                                          <td><center><?php echo $data2['jenis']; ?></center></td>
                                          <td><center><?php echo $data2['jenis_satuan']; ?></center></td>
                                          <td><center>Rp. <?php echo $data2['ph_minggu_lalu']; ?></center></td>
                                          <td><center>Rp. <?php echo $data2['ph_minggu_ini']; ?></center></td>
                                          <td><center>Rp. <?php echo $data2['ps_minggu_lalu']; ?></center></td>
                                          <td><center>Rp. <?php echo $data2['ps_minggu_ini']; ?></center></td>
                                          <td><center><?php echo $data2['ps_satuan']; ?></center></td>
                                          <td><center><?php echo $data2['asal_barang']; ?></center></td>
                                        </tr>
                                        <?php
                                            $no++;
                                          }
                                        ?>
                                      </table>
                                      </div>
                                      <div class="row">
                                          <div class="span4">
                                            <center>
                                              Mengetahui<br>
                                              Kepala UPTD Pasar Cisaat Kabupaten Sukabumi
                                              <br>
                                              <br>
                                              <!-- <img src="asset/images/ttd1.png" style="width: 265px; height: 148px;"> -->
                                              <br>
                                              <br>
                                              <strong><u><?php echo $data1['kepala_uptd']; ?></u></strong><br>
                                              NIP. <?php echo $data1['nip_kepala_uptd']; ?>
                                            </center>
                                          </div>
                                          <div class="span4">
                                              
                                          </div>
                                          <div class="span4">
                                            <center>
                                              <br>
                                              Pencatat Harga Sembako
                                              <br>
                                              <br>
                                              <!-- <img src="asset/images/ttd2.png" style="width: 265px; height: 148px;"> -->
                                              <br>
                                              <br>
                                              <strong><u><?php echo $data1['pencatat_harga']; ?></u></strong><br>
                                              NIP. <?php echo $data1['nip_pencatat_harga']; ?>
                                            </center>
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
        <?php include 'page/page_footer.php'; ?>
    </body>
</html>