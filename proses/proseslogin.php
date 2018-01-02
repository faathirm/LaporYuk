<?php

session_start();

include('koneksi.php');
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    //$login = mysql_query("SELECT * FROM data_admin WHERE username='$username' AND password='$password'");
    //$result= mysql_num_rows($login);

    //cek data admin
    $adminquery = mysql_query("SELECT * FROM data_admin WHERE email='$email' AND password='$password'");
    $resultadmin = mysql_num_rows($adminquery);

    //cek data user
    $userquery = mysql_query("SELECT * FROM data_user WHERE email='$email' AND password='$password'");
    $resultuser = mysql_num_rows($userquery);

    if($resultadmin>0){
        $admin = mysql_fetch_array($adminquery);
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['id'] = $admin['id'];
        $_SESSION['user'] = $admin['username'];
        header("location:../admin.php");
    }else if($resultuser>0){
        $user = mysql_fetch_array($userquery);
        session_start();
        $_SESSION['userlogin'] = true;
        $_SESSION['id']= $user['id'];
        $_SESSION['user'] = $user['namadepan'];
        $_SESSION['namabelakang'] = $user['namabelakang'];
        $_SESSION['email'] = $user['email'];
        header("location:../dashboard.php");
    }else{
        $_SESSION["error_msg"] = "Belum Terdaftar";
        header("Location:../login.php");
    }


?>