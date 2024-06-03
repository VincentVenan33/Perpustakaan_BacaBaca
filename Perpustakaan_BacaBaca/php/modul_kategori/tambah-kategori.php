<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: ../login.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form Kategori</title>
    <link rel="shortcut icon" href="../assets/icon.png">
    <link rel="stylesheet" href="../css/style.css">
    <style>
    body {
        margin: 0;
        background-image: url('../assets/4b13b151c02133caa0429e4c600bd340.jpg');
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
    </style>
</head>

<body>
    <div class="container clearfix">
        <h1><a href="../home.php"><img src="../assets/Bacabaca.png" height="50px" alt=""></a></h1>
        <?php include '../sidebar.php'?><div class="content">
            <h3>Tambah Data Kategori</h3>
            <form method="post" action="proses-tambah-kategori.php">
                <p>Kategori</p>
                <p><input type="text" name="kategori"></p>
                <p><input type="submit" class="btn btn-submit" value="Simpan"><input type="reset" class="btn btn-submit"
                        value="Batal" onclick="self.history.back();"></p>
            </form>
        </div>
    </div>
</body>

</html>