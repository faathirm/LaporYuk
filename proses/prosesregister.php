<?php

include('koneksi.php');

$namadepan = $_POST['namadepan'];
$namabelakang = $_POST['namabelakang'];
$password = $_POST['password'];
$email = $_POST['email'];
$nomortelepon = $_POST['nomortelepon'];

$input = mysql_query("INSERT INTO data_user VALUES('','$namadepan','$namabelakang','$password','$email','$nomortelepon','','','')");

if(!$input){
    echo 'Gagal Menambahkan';
}else{
    echo '<script>window.location.href = "../login.php";</script>';
    //echo 'berhasil';
}

?>