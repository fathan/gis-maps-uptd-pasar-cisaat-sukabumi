<!DOCTYPE html>
<head>
  <link rel="stylesheet" type="text/css" href="asset/css/print.css">
  <title>laporan Harga Sembako UPTD Pasar Cisaat Kabupaten Sukabumi</title>
  <style type="text/css">#myGroup {visibility:hidden} </style>
  <script type="text/javascript">
  </script>
</head>
  <div id="semua">
    <body onLoad="window.print()">
      <a onClick="window.print()">
        <img src='asset/images/kabsukabumi.jpg' style="width: 70px; height: 70px;">
      </a>
      <hr>
      <?php  
        include 'page/page_config.php';

        $query1 = mysql_query("SELECT * FROM keterangan_harga_sembako");
        $data1  = mysql_fetch_array($query1);
      ?>
      <h3><?php echo $data1['judul']; ?><br>
          MINGGU KE <?php echo $data1['minggu']; ?> &nbsp; BULAN <?php echo $data1['bulan']; ?> &nbsp; TAHUN <?php echo $data1['tahun']; ?></h3>
      <br>
      <br>
      <table border=1 cellpadding=0 cellspacing=0 width=100%>
      <tr>
        <th rowspan="2"><center>No</center></th>
        <th colspan="2"><center>Jenis Bahan Pokok</center></th>
        <th rowspan="2"><center>Satuan</center></th>
        <th colspan="2"><center>Perkembangan Harga</center></th>
        <th colspan="3"><center>Persediaan</center></th>
        <th rowspan="2"><center>Asal Barang</center></th>
      </tr>
      <tr>
        <td><strong><center>Kategori</center></strong></td>
        <td><strong><center>Jenis</center></strong></td>
        <td><strong><center>Minggu Lalu</center></strong></td>
        <td><strong><center>Minggu Ini</center></strong></td>
        <td><strong><center>Minggu lalu</center></strong></td>
        <td><strong><center>Minggu Ini</center></strong></td>
        <td><strong><center>Satuan</center></strong></td>
      </tr>
      <?php  
        include 'page/page_config.php';

        $no = 1;
        $query = mysql_query("SELECT * FROM sembako") or die (mysql_error('tabel tidak ditemukan'));
          while($data2 = mysql_fetch_array($query)){
      ?>
      <tr>
        <td><center><strong><?php echo $no; ?></strong></center></td>
        <td><center><strong><?php echo $data2['kategori']; ?></strong></center></td>
        <td><center><strong><?php echo $data2['jenis']; ?></strong></center></td>
        <td><center><strong><?php echo $data2['jenis_satuan']; ?></strong></center></td>
        <td><center><strong>Rp. <?php echo $data2['ph_minggu_lalu']; ?></strong></center></td>
        <td><center><strong>Rp. <?php echo $data2['ph_minggu_ini']; ?></strong></center></td>
        <td><center><strong>Rp. <?php echo $data2['ps_minggu_lalu']; ?></strong></center></td>
        <td><center><strong>Rp. <?php echo $data2['ps_minggu_ini']; ?></strong></center></td>
        <td><center><strong><?php echo $data2['ps_satuan']; ?></strong></center></td>
        <td><center><strong><?php echo $data2['asal_barang']; ?></strong></center></td>
      </tr>
      <?php
          $no++;
        }
      ?>
      </table>
      <br>
      <table align=left>
        <tr>
          <td align=center><strong>Mengatahui,</strong><br>Kepala UPTD Pasar Cisaat Kabupaten Sukabumi,</td>
        </tr>
        <tr>
          <td align=center>
            <br>
            <br>
            <!-- <img src="asset/images/ttd1.png" style="width: 265px; height: 148px;"> -->
            <br>
            <br>
            <strong><u><?php echo $data1['kepala_uptd']; ?></u></strong><br>NIP. <?php echo $data1['nip_kepala_uptd']; ?>
          </td>
        </tr>
      </table>
      <table align=right>
        <tr>
          <td align=center>&nbsp;<br>Pencatat Harga,</td>
        </tr>
        <tr>
          <td align=center>
            <br>
            <br>
            <!-- <img src="asset/images/ttd2.png" style="width: 265px; height: 148px;"> -->
            <br>
            <br>
            <strong><u><?php echo $data1['pencatat_harga']; ?></u></strong><br>NIP. <?php echo $data1['nip_pencatat_harga']; ?>
          </td>
        </tr>
      </table>
    </body>
  </div>