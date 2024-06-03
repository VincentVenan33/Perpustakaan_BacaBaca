<?php

include 'proses-list-kategori.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Kategori</title>
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

    .search {
        position: relative;
    }


    .search input {
        height: 45px;
        border: none;
    }

    .search .fa-search {
        position: absolute;
        top: 20px;
        left: 16px
    }

    .form-control {
        width: 200px;
    }

    .form-control1 {
        width: 80px;
        background-color: rgba(0, 104, 255, 1);

    }
    </style>
</head>

<body>
    <div class="container clearfix">
        <h1><a href="../home.php"><img src="../assets/Bacabaca.png" height="50px" alt=""></a></h1>

        <?php include '../sidebar.php' ?>
        <div class="content">
            <h1>Daftar Kategori</h1>
            <div class="container1">
                <div class="row height d-flex justify-content-center align-items-center">
                    <div class="col-md-8">
                        <div class="search"> <i class="fa fa-search"></i>
                            <form method="post" action="proses-search-kategori.php">
                                <input class="form-control" type="text" name="Search" placeholder="Search">
                                <input class="form-control1" type="submit" name="submit" value="Search">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" btn-tambah-div">
                <a href="tambah-kategori.php"><button class="btn btn-tambah">Tambah Data</button></a>
            </div>
            <?php if (empty($data_kategori)) : ?>
            Tidak ada data.
            <?php else : ?>
            <table class="data">
                <tr>
                    <th>Kategori</th>
                    <th width="20%">Pilihan</th>
                </tr>
                <?php foreach ($data_kategori as $kategori) : ?>
                <tr>
                    <td><?php echo $kategori['kategori_nama'] ?></td>
                    <td>
                        <a href="edit-kategori.php?id_kategori=<?php echo $kategori['kategori_id']; ?>"
                            class="btn btn-edit">Edit</a>
                        <a href="delete-kategori.php?id_kategori=<?php echo $kategori['kategori_id']; ?>"
                            class="btn btn-hapus" onclick="return confirm('anda yakin akan menghapus data?');">Hapus</a>
                    </td>
                </tr>
                <?php  endforeach ?>
            </table>
            <?php endif ?>
        </div>

    </div>
</body>

</html>