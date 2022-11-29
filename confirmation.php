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
        <a href="index1.php">
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
    <main class="confirmation">
        <h1>Please Fill This Information Below</h1>
        <form action="prosesconfirmation.php" method="post">
        <div class="confirmation-text-box">
            <div class="confirmation-item">
                <h3>Item</h3>
                <select name="namaproduk">
                    <option>Spinach</option>
                    <option>Turnip</option>
                    <option>Chilli</option>
                    <option>Tomato</option>
                </select>
            </div>

            <div class="confirmation-name">
                <h3>Full Name</h3>
                <input type="text" name="Namalengkap">
            </div>

            <div class="confirmation-address">
                <h3>Address</h3>
                <input type="text" name="alamat">
            </div>

            <div class="confirmation-postalcode">
                <h3>Postal Code</h3>
                <input type="text" name="postalcode">
            </div>

            <div class="confirmation-phone">
                <h3>Phone Number</h3>
                <input type="text" name="phonenumber">
            </div>

            <div class="confirmation-quantity">
                <h3>Quantity</h3>
                <input type="number" min="1" max="3" name="quantity">
            </div>

            <div class="confirmation-courier" >
                <h3>Courier</h3>
                <select name="courier">
                    <option>JST</option>
                    <option>SiFast</option>
                    <option>Gr*b</option>
                    <option>GoJ*k</option>
                </select>
            </div>

            <div class="confirmation-submit">
                <button name="submit">Submit</button>
            </div>
        </form>

        </div>
    </main>
</body>
</html>