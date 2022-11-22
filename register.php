<?php
require 'config.php';
if(isset($_POST["register"]))
{
    if(registrasi($_POST)>0)
    {
        echo"<script> alert('akun berhasil dibuat!')</script>";
        header("Location:index.php");
    }
    else{
        echo mysqli_error($con);
    }
}


?>




<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="editan.css">
    <title>Sign-in</title>
</head>
<body>
    <h1 id="kepala"><img src="img/logo/bibitq logo putih.png" alt="ini logo"></h1>
    <img src="coba.jpg" alt="ini background">
    <br><br>
    <div id="login">
        <h3>Sign-up</h3><br>
        <form action="" method="post">
            <label for="email" class="input">E-mail</label><br>
            <input  id="email" name="email" type="text"><br><br>
            <label for="username" class="input">Username</label><br>
            <input id="username" name="username" type="text">
            <br><br>
            <label for="password" class="input">Password</label>
            <input id="password" type="password" name="password">
            <br><br>
            <label for="password2" class="input">Konfirmasi password</label>
            <input type="password" name="password2" id="password2">
            <button type="submit" name="register">Sign-up</button>
            
            <p>Sudah punya akun? <a href=login1.php>Sign-in</a></p>
        </form>
    </div>
</body>
</html>