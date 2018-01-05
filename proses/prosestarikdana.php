<?php
session_start();
include('koneksi.php');

$permintaan = $_POST['permintaan'];
$id = $_POST['id'];

$row = mysql_fetch_assoc(mysql_query("SELECT * FROM data_user WHERE id='$id'"));

$bank = $row['bank'];
$rekening = $row['rekening'];
$nama = ($row['namadepan']." ".$row['namabelakang']);
$saldoakhir = $row['saldo'];
$tanggaldilaporkan = date("d/m/Y");

$saldodikurang = ($saldoakhir-$permintaan);

if($permintaan <= $saldoakhir){ //berhasil
    
    $input = mysql_query("INSERT INTO data_withdrawl VALUES ('','$id','$nama','$bank','$rekening','$saldodikurang','$permintaan','','$tanggaldilaporkan')");
    $update = mysql_query("UPDATE data_user SET saldo='$saldodikurang' WHERE id='$id'");
    
    if($input){
        $_SESSION["success_msg"] = "Berhasil membuat permintaan";
        echo '<script>window.location.href = "../dashboard.php";</script>';   
    }else{
        $_SESSION["error_msg"] = "Gagal membuat permintaan";
        echo '<script>window.location.href = "../dashboard.php";</script>';   
    }
    
}else{ //gagal
    
    $_SESSION["error_msg"] = "Gagal membuat permintaan";
    echo '<script>window.location.href = "../dashboard.php";</script>'; 
}

?>