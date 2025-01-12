<?php

include '../modul_buku/proses-list-buku.php';

include '../modul_anggota/proses-list-anggota.php';

if (!isset($_SESSION['user'])) {
    header('Location: ../login.php');
    exit();
}

$id_pinjam = $_GET['id_pinjam'];
$query = "SELECT * FROM pinjam WHERE pinjam.pinjam_id = $id_pinjam";
$hasil = mysqli_query($db, $query);
$data_pinjam = mysqli_fetch_assoc($hasil);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form Peminjaman</title>
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
            <h3>Edit Data Peminjaman</h3>
            <?php  
            if(!empty($_SESSION['messages'])) {
                echo $_SESSION['messages'];
                unset($_SESSION['messages']);
            }
            ?>
            <form action="proses-edit-pinjam.php" method="post">
                <input type="hidden" name="pinjam_id" value="<?php echo $id_pinjam ?>">
                <p>Buku</p>
                <p>
                    <select name="buku">
                        <?php foreach ($data_buku as $buku): ?>
                        <option value="<?php echo $buku['buku_id'] ?>"
                            <?php echo ($buku['buku_id'] == $data_pinjam['buku_id']) ? 'selected' : '' ; ?>>
                            <?php echo $buku['buku_judul'] ?></option>
                        <?php endforeach ?>
                    </select>
                </p>

                <p>Anggota</p>
                <p>
                    <select name="anggota">
                        <?php foreach ($data_anggota as $anggota) : ?>
                        <option value="<?php echo $anggota['anggota_id'] ?>"
                            <?php echo ($anggota['anggota_id'] == $data_pinjam['anggota_id']) ? 'selected' : '' ; ?>>
                            <?php echo $anggota['anggota_nama'] ?></option>
                        <?php endforeach ?>
                    </select>
                </p>

                <p>Tanggal Pinjam</p>
                <p><input type="date" name="tgl_pinjam" value="<?php echo $data_pinjam['tgl_pinjam'] ?>"></p>

                <p>Tanggal Jatuh Tempo</p>
                <p><input type="date" name="tgl_jatuh_tempo" value="<?php echo $data_pinjam['tgl_jatuh_tempo'] ?>"></p>

                <p>
                    <input type="submit" class="btn btn-submit" value="Simpan">
                    <input type="reset" class="btn btn-submit" value="Batal" onclick="self.history.back();">
                </p>
            </form>
        </div>

    </div>
</body>

</html>