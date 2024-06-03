<?php

session_start();

if (isset($_SESSION['user'])) {
    header('Location: home.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Perpustakaan</title>
    <link rel="shortcut icon" href="assets/icon.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
    body {
        margin: 0;
        background-image: url('assets/b07563b4cb915b66b32422cb697438d5.jpg');
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
    <form method="post" name="form_login" id="form_login" action="proses-login.php" style="margin-top: 120px;">
        <table class="form">
            <tr>
                <td colspan="2">
                    <h1 align="center" style="margin:0;"><img src="assets/Bacabaca.png" height="50px" alt=""></h1>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <h1 align="center" style="margin:0;"><img src=" assets/1.png" height="35px" alt=""> Login Petugas
                    </h1>
                </td>
            </tr>
            <tr>
                <td>Username</td>
                <td>
                    <input type="text" autofocus="" name="username" id="username" required="" />
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
                <td colspan=" 2" align="right">
                    <button style="background-color: #2ecc71; border: none; height: 37px;"><a href=" signin.php">Sign
                            In</a></button>
                    <input type="submit" name="login" id="login" value="Login" class="btn btn-submit" />
                </td>
            </tr>
        </table>
    </form>
</body>

</html>