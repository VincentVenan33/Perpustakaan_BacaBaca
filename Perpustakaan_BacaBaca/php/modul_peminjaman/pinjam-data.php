<?php
include 'proses-list-pinjam-data.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Peminjaman</title>
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
            <h1>Daftar Peminjaman</h1>
            <?php
            if(!empty($_SESSION['messages'])) {
                echo $_SESSION['messages'];
                unset($_SESSION['messages']);
            }
            ?>
            <div class="btn-tambah-div">
                <a href="pinjam-form.php"><button class="btn btn-tambah">Transaksi Baru</button></a>
            </div>
            <?php if (empty($data_pinjam)) : ?>
            Tidak ada data.
            <?php else : ?>
            <table class="data">
                <tr>
                    <th>Buku</th>
                    <th>Nama</th>
                    <th>Tgl Pinjam</th>
                    <th>Tgl Jatuh Tempo</th>
                    <th>Tgl Kembali</th>
                    <th>Status</th>
                    <th width="30%">Pilihan</th>
                </tr>
                <?php foreach ($data_pinjam as $pinjam) : ?>
                <tr>
                    <td><?php echo $pinjam['buku_judul'] ?></td>
                    <td><?php echo $pinjam['anggota_nama'] ?></td>
                    <td><?php echo date('d-m-Y', strtotime($pinjam['tgl_pinjam'])) ?></td>
                    <td><?php echo date('d-m-Y', strtotime($pinjam['tgl_jatuh_tempo'])) ?></td>
                    <td>
                        <?php  
                        if (empty($pinjam['tgl_kembali'])) {
                            echo "-";
                        } 
                        else {
                            echo date('d-m-Y', strtotime($pinjam['tgl_kembali']));
                        }
                    ?>
                    </td>
                    <td>
                        <?php $status = '' ?>
                        <?php if (empty($pinjam['tgl_kembali'])): ?>
                        pinjam
                        <?php $status = 'pinjam' ?>
                        <?php else: ?>
                        kembali
                        <?php $status = 'kembali' ?>
                        <?php endif ?>
                    </td>
                    <td>

                        <?php if (empty($pinjam['tgl_kembali'])): ?>
                        <a href="../modul_pengembalian/pengembalian.php?id_pinjam=<?php echo $pinjam['pinjam_id'] ?>"
                            class="btn btn-tambah" title="klik untuk proses pengembalian">Kembali</a>
                        <a href="edit-pinjam.php?id_pinjam=<?php echo $pinjam['pinjam_id']; ?>&&status=<?php echo $status; ?>"
                            class="btn btn-edit">Edit</a>
                        <?php endif ?>
                        <a href="proses-delete-pinjam.php?id_pinjam=<?php echo $pinjam['pinjam_id']; ?>&&status=<?php echo $status; ?>&&buku_id=<?php echo $pinjam['buku_id']; ?>"
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