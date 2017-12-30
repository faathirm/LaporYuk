<?php

include('koneksi.php');

$id = $_POST['id'];

/*$namapelapor = $_POST['namapelapor'];
$nomortelepon = $_POST['nomortelepon'];
$email = $_POST['email'];
$bank = $_POST['bank'];
$nomorrekening = $_POST['nomorrekening'];
$nopol = strtoupper($_POST['nopol']);
$detail = $_POST['detail'];
$tanggalkejadian = strtoupper($_POST['tanggalkejadian']);
$jamkejadian = $_POST['jamkejadian'];
$tanggaldilaporkan = $_POST['tanggaldilaporkan'];*/
$status = $_POST['status'];
//$gambar = $_POST['gambar'];
$komentar = $_POST['komentar'];

echo $id;
echo $komentar;
echo $status;

//$update = mysql_query("UPDATE data_laporan set namapelapor='$namapelapor', nomortelepon='$nomortelepon', email='$email', bank='$bank', nomorrekening='$nomorrekening', nopol='$nopol', detail='$detail', tanggalkejadian='$tanggalkejadian', jamkejadian='$jamkejadian', tanggaldilaporkan='$tanggaldilaporkan', status='$status', gambar='$gambar', komentar='$komentar' WHERE id='$id'");

$update = mysql_query("UPDATE data_laporan set status='$status', komentar='$komentar' WHERE id='$id'");

if(!$update){
    echo "gagal";
}else{
    //echo "berhasil";
    echo '<script>window.location.href = "../admin.php";</script>';
}

?>