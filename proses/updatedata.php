<?php

session_start();
include('koneksi.php');

$id = $_POST['id'];
$userid = $_POST['userid'];
$komentar = $_POST['komentar'];
$saldoawal = $_POST['saldoawal'];

if(isset($_POST['status'])){
    
    $status = $_POST['status'];
    $update = mysql_query("UPDATE data_laporan set status='$status', komentar='$komentar' WHERE id='$id'");
    if(!$update){
        $_SESSION["error_msg"] = "Gagal merubah status laporan";
        echo '<script>window.location.href = "../admin.php";</script>';
    }else{
        $_SESSION["success_msg"] = "Berhasil merubah status laporan";
        echo '<script>window.location.href = "../admin.php";</script>';
    }
}else if(isset($_POST['saldo'])){
    
    $saldo = $_POST['saldo'];
    $saldoakhir = $saldo+$saldoawal;
    $tahap = "TAHAP 4";
    
    //update saldo pada user
    $tambahsaldo = mysql_query("UPDATE data_user set saldo='$saldoakhir' WHERE id='$userid'");
    //update status pada data laporan
    $updatelaporan = mysql_query("UPDATE data_laporan set status='$tahap', komentar='$komentar' WHERE id='$id'");
    if($updatelaporan){
        $_SESSION["success_msg"] = "Berhasil merubah status laporan";
        echo '<script>window.location.href = "../admin.php";</script>';
    }else{
        $_SESSION["error_msg"] = "Gagal merubah status laporan";
        echo '<script>window.location.href = "../admin.php";</script>';
    }
}

?>