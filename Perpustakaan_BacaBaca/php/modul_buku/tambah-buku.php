<?php
include '../modul_kategori/proses-list-kategori.php';

if (!isset($_SESSION['user'])) {
    header('Location: ../login.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form Buku</title>
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

        <?php include '../sidebar.php' ?>

        <div class="content">
            <h3>Tambah Data Buku</h3>
            <form method="post" action="proses-tambah-buku.php" enctype="multipart/form-data">
                <p>Judul</p>
                <p><input type="text" name="judul"></p>

                <p>Kategori</p>
                <p>
                    <select name="kategori">
                        <?php foreach ($data_kategori as $kategori) : ?>
                        <option value="<?php echo $kategori['kategori_id'] ?>"><?php echo $kategori['kategori_nama'] ?>
                        </option>
                        <?php endforeach ?>
                    </select>
                </p>

                <p>Deskripsi</p>
                <p><textarea name="deskripsi"></textarea></p>

                <p>Jumlah</p>
                <p><input type="number" name="jumlah"></p>

                <p>Cover</p>
                <p><input type="file" name="cover"></p>

                <p>
                    <input type="submit" class="btn btn-submit" value="Simpan">
                    <input type="reset" class="btn btn-submit" value="Batal" onclick="self.history.back();">
                </p>
            </form>
        </div>

    </div>
</body>

</html>