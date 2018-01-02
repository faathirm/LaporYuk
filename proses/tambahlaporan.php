<?php
    
include('koneksi.php');
$namapelapor = $_POST['namapelapor'];
$userid = $_POST['userid'];
$nopol = strtoupper($_POST['nopol']);
$detail = $_POST['detail'];
$tanggalkejadian = strtoupper($_POST['tanggalkejadian']);
$jamkejadian = $_POST['jamkejadian'];
$tanggaldilaporkan = date("d/m/Y");
$status = "TAHAP 1";

$jam = date("dhis");
$nama_file = ($namapelapor . $jam);
$array = explode('.', $_FILES['gambar']['name']);
$extension = end($array);

$lokasi_file = $_FILES['gambar']['tmp_name'];
$tipe_file   = $_FILES['gambar']['type'];
//$nama_file   = $_FILES['gambar']['name'];
$direktori   = "../images/fotoupload/$nama_file.$extension";

if(!empty($lokasi_file)){
    move_uploaded_file($lokasi_file,$direktori);
    
    $input = mysql_query("INSERT INTO data_laporan VALUES('','$namapelapor','$userid','$nopol','$detail','$tanggalkejadian','$jamkejadian','$nama_file.$extension','$tanggaldilaporkan','$status','')");

    if(!$input){
        echo 'Gagal Menambahkan';
    }else{
        echo '<script>window.location.href = "../dashboard.php";</script>';
        //echo 'berhasil';
        //echo ("$nama_file.$extension");
    }
  
}else{
    echo 'error';
}
?>