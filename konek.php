<? php
<?php
  // buat koneksi dengan database mysql
  $host = "localhost";
  $user = "root";
  $pass = "";
  $name = "fix_fp";
  $link = mysqli_connect($host,$user,$pass,$name);
  //periksa koneksi, tampilkan pesan kesalahan jika gagal
  if(!$link){
    die ("Koneksi dengan database gagal: ".mysql_connect_errno().
    " - ".mysql_connect_error());
  }
?>?>