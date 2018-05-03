<?php
$nama = $_POST ['nama'];
$alamat = $_POST ['alamat'];
$tanggal = $_POST ['tgl'];
$proses = $_POST ['proses'];

echo "nama :".$nama . "<br/>";
echo "alamat :".$alamat . "<br/>";
echo "terdaftar pada :".$_POST ['tgl'] . "<br/>";


 ?>


<?php
echo htmlentities ($_POST['nama']);
echo "<br/>";
echo htmlentities ($_POST['alamat']);
}
else {
echo "silahkan isi data anda disini";
}
 ?>
