<?php
include '../connection.php';
include '../function.php';

$id_pinjam = $_GET['id_pinjam'];
$q = "SELECT anggota.anggota_nama, buku.*, pinjam.* FROM pinjam 
    LEFT JOIN buku ON pinjam.buku_id = buku.buku_id 
    LEFT JOIN anggota ON pinjam.anggota_id = anggota.anggota_id
    WHERE pinjam.pinjam_id = $id_pinjam";
$hasil = mysqli_query($db, $q);
$data_pinjam = mysqli_fetch_assoc($hasil);
$tgl_kembali = date('Y-m-d');

$denda = hitung_denda($tgl_kembali, $data_pinjam['tgl_jatuh_tempo']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form Peminjaman</title>
    <link rel="shortcut icon" href="../assets/icon.png">
    <style>
    body {
        margin: 0;
        background-image: url('../assets/4b13b151c02133caa0429e4c600bd340.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .container.clearfix {
        width: 960px;
        max-width: 100%;
        margin: 0 auto;
        border-radius: 5px;
        padding: 10px;
        box-shadow: 0px 0px 5px black;
        color: #FFF;
    }
    </style>
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
    <div class="container clearfix">
        <h1><a href="../home.php"><img src="../assets/Bacabaca.png" height="50px" alt=""></a></h1>

        <?php include '../sidebar.php' ?>

        <div class="content">
            <h3>Transaksi Pengembalian Buku</h3>
            <form method="post" action="proses-pengembalian.php">
                <input type="hidden" name="pinjam_id" value="<?php echo $data_pinjam['pinjam_id'] ?>">
                <input type="hidden" name="tgl_kembali" value="<?php echo $tgl_kembali ?>">
                <input type="hidden" name="denda" value="<?php echo $denda ?>">
                <p>Buku</p>
                <p>
                    <input type="text" value="<?php echo $data_pinjam['buku_judul'] ?>" disabled>
                </p>

                <p>Anggota</p>
                <p>
                    <input type="text" value="<?php echo $data_pinjam['anggota_nama'] ?>" disabled>
                </p>

                <p>Tanggal Pinjam</p>
                <p><input type="date" value="<?php echo $data_pinjam['tgl_pinjam'] ?>" disabled></p>

                <p>Tanggal Jatuh Tempo</p>
                <p><input type="date" value="<?php echo $data_pinjam['tgl_jatuh_tempo'] ?>" disabled></p>

                <p>Tanggal Kembali</p>
                <p><input type="date" value="<?php echo $tgl_kembali ?>" disabled></p>

                <p>Denda</p>
                <p><input type="text" value="<?php echo $denda ?>" disabled></p>

                <p><input type="submit" class="btn btn-submit" value="Simpan">
                    <input type="reset" class="btn btn-submit" value="Batal" onclick="self.history.back();">
                </p>
            </form>
        </div>

    </div>
</body>

</html>