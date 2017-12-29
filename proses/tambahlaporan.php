<?php
    
include('koneksi.php');
$namapelapor = $_POST['namapelapor'];
$nomortelepon = $_POST['nomortelepon'];
$email = $_POST['email'];
$bank = $_POST['bank'];
$nomorrekening = $_POST['nomorrekening'];
$nopol = strtoupper($_POST['nopol']);
$detail = $_POST['detail'];
$tanggalkejadian = strtoupper($_POST['tanggalkejadian']);
$jamkejadian = $_POST['jamkejadian'];
$tanggaldilaporkan = date("Y/m/d");
$status = "TAHAP 1";

$lokasi_file = $_FILES['gambar']['tmp_name'];
$tipe_file   = $_FILES['gambar']['type'];
$nama_file   = $_FILES['gambar']['name'];
$direktori   = "../images/fotoupload/$nama_file";

if(!empty($lokasi_file)){
    move_uploaded_file($lokasi_file,$direktori);
    
    $input = mysql_query("INSERT INTO data_laporan VALUES('','$namapelapor','$nomortelepon','$email','$bank','$nomorrekening','$nopol','$detail','$tanggalkejadian','$jamkejadian','$nama_file','$tanggaldilaporkan','$status','')");

    if(!$input){
        echo 'Gagal Menambahkan';
    }else{
        //echo '<script>window.location.href = "index.php";</script>';
        echo 'berhasil';
    }
  
}else{
    echo 'error';
}
?>