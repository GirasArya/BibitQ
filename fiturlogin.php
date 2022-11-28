
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="editan.css">
    <script src="https://kit.fontawesome.com/44003bbbd7.js" crossorigin="anonymous"></script>

    <title>BibitQ Login</title>
</head>

<body>
    <div class="background">
        <div class="background-login">
            <h3>WELCOME</h3>
            <form action="proseslogin.php" method="post">
                <i class="fa-solid fa-user">
                    <input id ="username" name="username" type="text" placeholder="Username">
                </i>
                <i class="fa-solid fa-lock">
                    <input id="password" name="password" type="password" placeholder="Password">
                </i>
                <div class="background-button">
                    <button name="login1" type="submit">Sign in</button>
                </div>
            </form>
            <p>Don't have an account yet?
                <a href="register.php">
                    <strong>Sign Up<strong>
                </a> 
            </p >
        </div>
    </div>
    
    <!-- <form>
                <label class="nama" for="un">Username</label><br>
                <input class="un" type="text" placeholder=""><br><br>
                <label class="password1" for="pass">Password</label><br>
                <input class="pass" type="password" placeholder="">
                <br><br>
                <button><a href="index.html">Login</a></button>
                <p>Belum punya akun? <a href=#>Sign-in</a></p>
    </form> -->

</body>
</html>