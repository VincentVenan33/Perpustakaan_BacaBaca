<?php
include 'proses-list-buku.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
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
            <h1>Daftar Buku</h1>
            <div class="container1">
                <div class="row height d-flex justify-content-center align-items-center">
                    <div class="col-md-8">
                        <div class="search"> <i class="fa fa-search"></i>
                            <form method="post" action="proses-search-buku.php">
                                <input class="form-control" type="text" name="Search" placeholder="Search">
                                <input class="form-control1" type="submit" name="submit" value="Search">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-tambah-div">
                <input class="btn btn-tambah" type="reset" value="Kembali" onclick="self.history.back();">
            </div>
            <table class="data">
                <tr>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Deskripsi</th>
                    <th>Jumlah</th>

                </tr>
                <?php 
$Search = $_POST['Search'];
$query = "SELECT * FROM buku WHERE buku_judul LIKE '%$Search%'";
    
$hasil = mysqli_query($db, $query);

while($data_buku = mysqli_fetch_array($hasil)) {
    echo "<tr>
       <td>".$data_buku['buku_judul']."</td>
       <td>".$data_buku['kategori_id']."</td>
       <td>".$data_buku['buku_deskripsi']."</td>
       <td>".$data_buku['buku_jumlah']."</td>
                <tr>";
                    }
                    ?>
            </table>

        </div>

    </div>
</body>

</html>