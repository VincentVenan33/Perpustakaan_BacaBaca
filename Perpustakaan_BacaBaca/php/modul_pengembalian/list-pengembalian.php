<?php
include 'proses-list-pengembalian.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Pengembalian</title>
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

    a {
        color: black;
    }
    </style>
</head>

<body>
    <div class="container clearfix">
        <h1><a href="../home.php"><img src="../assets/Bacabaca.png" height="50px" alt=""></a></h1>


        <?php include '../sidebar.php' ?>
        <div class=" content">
            <h1>Daftar Pengembalian</h1>
            <?php if (empty($data_kembali)) : ?>
            Tidak ada data.
            <?php else : ?>
            <table class="data">
                <tr>
                    <th>Buku</th>
                    <th>Nama</th>
                    <th>Tgl Pinjam</th>
                    <th>Tgl Jatuh Tempo</th>
                    <th>Tgl Kembali</th>
                    <th width="20%">Pilihan</th>
                </tr>

                <?php foreach ($data_kembali as $kembali) : ?>
                <tr>
                    <td><?php echo $kembali['buku_judul'] ?></td>
                    <td><?php echo $kembali['anggota_nama'] ?></td>
                    <td><?php echo $kembali['tgl_pinjam'] ?></td>
                    <td><?php echo $kembali['tgl_jatuh_tempo'] ?></td>
                    <td><?php echo $kembali['tgl_kembali'] ?></td>
                    <td>
                        <a href="delete-pengembalian.php?id_kembali=<?php echo $kembali['kembali_id'] ?>"
                            onclick="return confirm('anda yakin akan menghapus data?')" class="btn btn-hapus">Hapus</a>
                    </td>
                </tr>
                <?php endforeach ?>

            </table>
            <?php endif ?>
        </div>

    </div>
</body>

</html>