<?php
session_start();
include("configuration.php");
if(!isset($_SESSION['username']))
{
    header("Location: fiturlogin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <script src="https://kit.fontawesome.com/44003bbbd7.js" crossorigin="anonymous"></script>
        <title>BibitQ</title>
    </head>
<body>
    <header>
        <a href="index.php">
            <img src="img/logo/bibitq logo putih.png">
        </a>
        <nav>
            <ul class="navbar">
                <li><a href="index1.php">Home</a></li>
                <li><a href="Shop.php">Store</a></li>
                <li>
                    <a href="cart.php">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                </li>
                <li>
                    <a href="profile.php">
                        <i class="fa-solid fa-user"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <div class="profile">
        <div class="profile-login">
            <h3>WELCOME</h3>
            <i class="fa-solid fa-user"></i>
            <p id ="profile-username"><?php echo$_SESSION['username']?></p>
            <div class="profile-button">
                <button> <a href="logout.php">Sign Out</a></button>
            </div>
        </div>
    </div>
</body>
</html>