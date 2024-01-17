<?php
    session_start();
    require_once "koneksi.php";

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sqlSelect = mysqli_query($koneksi, "SELECT * FROM admin_kelas WHERE username='$username' AND password='$password'");
    $baris = mysqli_num_rows($sqlSelect);
    if($baris == 1){
        $_SESSION['user'] = $username;
        $_SESSION['status'] = "admin";

        header('Location:beranda_admin.php');
    }else{
        
    }
?>