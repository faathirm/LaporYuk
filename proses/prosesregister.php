<?php
session_start();
include('koneksi.php');

$namadepan = $_POST['namadepan'];
$namabelakang = $_POST['namabelakang'];
$password = $_POST['password'];
$email = $_POST['email'];
$nomortelepon = $_POST['nomortelepon'];

$usercek = mysql_query("SELECT * FROM data_user WHERE email='$email'");

//cek admin
if(mysql_num_rows($usercek) > 0){
    $_SESSION["error_msg"] = "Email telah terdaftar";
    header("Location:../register.php");
}else{
    $input = mysql_query("INSERT INTO data_user VALUES('','$namadepan','$namabelakang','$password','$email','$nomortelepon','','','')");
    if(!$input){
        $_SESSION["error_msg"] = "SQL Error";
        header("Location:../register.php");
    }else{
        $_SESSION["success_msg"] = "berhasil daftar, sekarang kamu bisa login!";
        header("Location:../login.php");
        
    }
}

?>