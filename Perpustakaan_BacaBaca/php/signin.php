<?php
session_start();
include "connection.php";

// jika sudah Register, alihkan ke halaman list
if (isset($_SESSION['user'])) {
    header('Location: home.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In </title>
    <link rel="shortcut icon" href="assets/icon.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
    body {
        margin: 0;
        background-image: url('assets/687f75341487f9f00c71ae52f19f14ef.jpg');
        background-size: cover;
        background-repeat: no-repeat;
    }

    .form {
        border-radius: 10px;
        padding: 4px 20px 15px 20px;
        box-shadow: 0px 0px 30px white;
        color: #FBFF00;
        margin: 0 auto;
        width: 430px;
    }
    </style>
</head>

<body class="fadeIn animated">
    <form method="post" name="form_signin" id="form_signin" action="proses-signin.php" style="margin-top: 120px;">
        <table class="form">
            <tr>
                <td colspan="2">
                    <h1 align="center" style="margin:0;"><img src="assets/Bacabaca.png" height="50px" alt=""></h1>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <h1 align="center" style="margin:0;"><img src=" assets/8.png" height="35px" alt="">Register</h1>
                </td>
            </tr>
            <tr>
                <td>Nama Petugas</td>
                <td>
                    <input type="text" autofocus="" name="petugas_nama" id="petugas_nama" required="" />
                </td>
            </tr>
            <tr>
                <td>Username</td>
                <td>
                    <input type="text" name="username" id="username" required="" />
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input type="password" name="password" id="password" required="" />
                </td>
            </tr>
            <tr style="height:10px"></tr>
            <tr>
                <td colspan="2" align="right">
                    <button style="background-color: #2ecc71; border: none; height: 37px;"><a href=" login.php">Log
                            In</a></button>
                    <input type="submit" name="Register" id="Register" value="Register" class="btn btn-submit" />
                </td>
            </tr>
        </table>
    </form>
</body>

</html>