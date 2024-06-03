<?php 
    session_start(); 

    //jika belum login, alihkan ke login
    if (empty($_SESSION['user'])) {
        header('Location: login.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Petugas</title>
    <link rel="shortcut icon" href="assets/icon.png">
    <link rel="stylesheet" href="css/style.css">
    <style>
    body {
        margin: 0;
        background-image: url('assets/3bfd4dbadf6843a1a0263428e3e0c9ff.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .container {
        width: 960px;
        max-width: 100%;
        margin: 0 auto;

        border-radius: 5px;
        padding: 10px;
        box-shadow: 0px 0px 5px black;
        color: #FFF;
    }

    a {
        color: white;
        font-weight: bold;
        text-shadow: 0 0 5px black,
            0 0 15px white,
            0 0 10px white;
    }
    </style>
</head>

<body>
    <div class="container clearfix">
        <h1><a href="home.php"><img src="assets/Bacabaca.png" height="50px" alt=""></a></h1>
        <div class="sidebar">
            <ul>
                <li><a href="modul_kategori/list-kategori.php"><img src="assets/2.png" height="30px" alt=""> Data
                        Kategori</a></li>
                <li><a href="modul_buku/list-buku.php"><img src="assets/buku.png" height="30px" alt=""> Data Buku</a>
                </li>
                <li><a href="modul_anggota/list-anggota.php"><img src="assets/Member.png" height="30px" alt=""> Data
                        Anggota</a>
                </li>
                <li><a href="modul_peminjaman/pinjam-data.php"><img src="assets/6.png" height="30px" alt="">
                        Peminjaman</a>
                </li>
                <li><a href=" modul_pengembalian/list-pengembalian.php"><img src="assets/5.png" height="30px" alt="">
                        Pengembalian</a>
                </li>
                <li><a href="logout.php" onclick="return confirm('Yakin mau keluar?')"><img src="assets/7.png"
                            height="30px" alt=""> Logout</a></li>
            </ul>
        </div>
        <div class="content">
            <h1 style="text-align: center;">Selamat datang, <?php echo $_SESSION['user']['petugas_nama']; ?>!</h1>
        </div>
    </div>
</body>

</html>