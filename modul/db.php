<?php
$db_user = "root";
$db_passwd  = "";
$db_name  = "db_test";
$db_host = "localhost";
//
// $connect_db = mysql_connect($db_host, $db_user, $db_passwd);
// $find_db = mysql_select_db($db_name);

$connect = mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

$inputan1 = $_POST['nama'];
$inputan2 = $_POST['alamat'];
$operasi = $_POST['daerah'];
$tanggal = date ("Y.m.d");
$simpan = mysqli_query($connect,"INSERT INTO test VALUES ('', '$inputan1', '$operasi','$inputan2',  '$tanggal', '$hasil')");
if ($simpan) {
  echo "terhubung <br/>";
}
else {
  echo "gagals <br/>";
}


 ?>
