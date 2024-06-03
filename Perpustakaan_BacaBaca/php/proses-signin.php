<?php
session_start();
include "connection.php";

if($_POST['Register'])
{
    $petugas_nama   = $_POST['petugas_nama'];
    $username       = $_POST['username'];
    $password       = md5($_POST['password']);
    
    $query="INSERT INTO petugas (petugas_nama, username, password) VALUES ('$petugas_nama', '$username', '$password')";

    $hasil = mysqli_query($db, $query);

    if ($hasil) {
        $_SESSION['user'] = $data_user;
        header('Location: home.php');
    }
    else {
      echo "Gagal simpan data anggota";
      exit;
    }  
} 
?>