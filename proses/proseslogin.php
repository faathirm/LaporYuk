<?php

include('koneksi.php');
$username = $_POST['username'];
    $password = $_POST['password'];
    
    $login = mysql_query("SELECT * FROM data_admin WHERE username='$username' AND password='$password'");
    $result= mysql_num_rows($login);

    if($result>0){
        $user = mysql_fetch_array($login);
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $user['username'];
        header("location:../admin.php");
    }else{
        header("location:../login.php");
    }


?>