<?php  
   include 'page/page_config.php';

   session_start();

   $id_topik = $_POST['id_topik'];
   $topik    = 'Profil';
   $nama     = $_POST['nama'];
   $isi      = $_POST['isi'];
   $date     = date("Y-m-d H:i:s");
   $status   = '1';
   
   $query=mysql_query("INSERT INTO komentar (id_topik,topik,nama,isi,date,status) VALUES ('$id_topik', '$topik', '$nama', '$isi', '$date', '$status')") or die (mysql_error());

   if ($query) {
      echo "<script> alert ('Terima kasih telah memberikan komentar'); document.location.href='index.php'; </script>";
   }else{
      echo "<script> alert ('Komentar Gagal dikirim'); document.location.href='index.php'; </script>";
   }
?>