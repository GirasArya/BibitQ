<?php
session_start();
include("configuration.php");
if(!isset($_SESSION['username']))
{
    header("Location: fiturlogin.php");
}
if(isset($_POST["submit"]))
{
    $kueri = mysqli_query($con, "SELECT * FROM confirmation WHERE userid = '$iduser'");
    
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
        <a href="index.html">
            <img src="/img/logo/bibitq logo putih.png">
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
    
    <main>
    </br>
    <table border="1">
	<thead>
		<tr>
			
			<th>Item</th>
			<th>Nama Lengkap</th>
			<th>Alamat</th>
			<th>Postalcode</th>
            <th>Phone Number</th>
			<th>Quantity</th>
            <th>courier</th>
            <th></th>
		</tr>
	</thead>
	<tbody>

		<?php
        $iduser = $_SESSION["id_user"];
		$kueri = mysqli_query($con, "SELECT * FROM confirmation WHERE iduser = '$iduser'");
       
         
        
		while($baris = mysqli_fetch_array($kueri)){
           //mengambil id konfirmasi
          
           $_POST["confirmationid"]=$baris["confirmationid"];

			echo "<tr>";
            
            
			echo "<td>".$baris['namaproduk']."</td>";
			echo "<td>".$baris['Namalengkap']."</td>";
			echo "<td>".$baris['alamat']."</td>";
			echo "<td>".$baris['postalcode']."</td>";
			echo "<td>".$baris['phonenumber']."</td>";
            echo "<td>".$baris['quantity']."</td>";
            echo "<td>".$baris['courier']."</td>";

            echo "<td>";
            echo "<a href='hapus.php?id=".$baris['confirmationid']."'>Delete</a>";
            echo "<br>";
            echo "<a href='edit.php?id=".$baris['confirmationid']."'>Edit</a>";
            echo "</td>";
			echo "</tr>";

			}


		?>

	</tbody>
	</table>

    </main>
</body>
</html>