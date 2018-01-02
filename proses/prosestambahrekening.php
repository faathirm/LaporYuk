<?php
session_start();
include('koneksi.php');

$bank = $_POST['bank'];
$rekening = $_POST['rekening'];

$id = $_POST['id'];

$cekrekening = mysql_query("SELECT * FROM data_user WHERE rekening='$rekening'");

//cek rekening
if(mysql_num_rows($cekrekening) > 0){
    $_SESSION["error_msg"] = "Sudah menambah rekening sebelumnya !";
    header("Location:../dashboard.php");
}else{
    
    $update = mysql_query("UPDATE data_user SET bank='$bank',rekening='$rekening' WHERE id='$id'");
    if(!$update){
        $_SESSION["error_msg"] = "SQL Error";
        echo '<script>window.location.href = "../dashboard.php";</script>';
    }else{
        $_SESSION["success_msg"] = "Berhasil menambahkan rekening !";
        echo '<script>window.location.href = "../dashboard.php";</script>';    
    }
}

?>