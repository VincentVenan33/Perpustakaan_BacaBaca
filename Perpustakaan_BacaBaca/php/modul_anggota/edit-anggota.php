<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: ../login.php');
    exit();
}

include '../connection.php';

// ambil artikel yang mau di edit
$id_anggota = $_GET['id_anggota'];
$query = "SELECT * FROM anggota WHERE anggota_id = $id_anggota";
$hasil = mysqli_query($db, $query);
$data_anggota = mysqli_fetch_assoc($hasil);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form Kategori</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../assets/icon.png">
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
            <h3>Edit Data Anggota</h3>
            <form method="post" action="proses-edit-anggota.php">
                <input type="hidden" name="id_anggota" value="<?php echo $data_anggota['anggota_id']; ?>">
                <p>Nama</p>
                <p><input type="text" name="nama" value="<?php echo $data_anggota['anggota_nama']; ?>"></p>
                <p>Alamat</p>
                <p><input type="text" name="alamat" value="<?php echo $data_anggota['anggota_alamat']; ?>"></p>
                <p>Jenis Kelamin</p>
                <p>
                    <select name="jk">
                        <?php if ($data_anggota['anggota_jk'] == "L") : ?>
                        <option value="L" selected>Laki-laki</option>
                        <option value="P">Perempuan</option>
                        <?php else : ?>
                        <option value="L">Laki-laki</option>
                        <option value="P" selected>Perempuan</option>
                        <?php  endif ?>
                    </select>
                </p>
                <p>Telepon</p>
                <p><input type="text" name="no_telepon" value="<?php echo $data_anggota['anggota_telp']; ?>"></p>
                <p>
                    <input type="submit" class="btn btn-submit" value="Simpan">
                    <input type="reset" class="btn btn-submit" value="Batal" onclick="self.history.back();">
                </p>
            </form>
        </div>

    </div>
</body>

</html>