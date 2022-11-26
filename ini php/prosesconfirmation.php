<?php
session_start();
include("configuration.php");
if(isset($_POST["submit"]))
{
    //pengambilan tabel produk
    $item = $_POST['namaproduk'];
    $result = mysqli_query($con, "SELECT * FROM produk WHERE namaproduk = '$item'");
    $baris = mysqli_fetch_assoc($result);
    $idprodak = $baris['Productid'];
    
    //ambiltabel
    $nama=$_POST['Namalengkap'];
    $alamat=$_POST['alamat'];
    $postal=$_POST['postalcode'];
    $notel=$_POST['phonenumber'];
    $kuantiti=$_POST['quantity'];
    $kurir=$_POST["courier"];  
    $iduser = $_SESSION["id_user"];
    //operasi
    mysqli_query($con, "INSERT INTO confirmation VALUES ('','$nama', '$alamat', '$postal', '$notel', '$kuantiti', '$kurir','$iduser','$idprodak','$item')");
    $iduser = $_SESSION["id_user"];
    $res = mysqli_query($con, "SELECT * FROM confirmation WHERE iduser = '$iduser'");
    $baris1 = mysqli_fetch_assoc($res);
    $_POST['confirmationid'] = $baris1['confirmationid'];
    $confirmationid = $_POST['confirmationid'];  
    mysqli_query($con, "INSERT INTO cart VALUES ('','$confirmationid')");
    header("Location: cart.php");
   
    
    
    
}
else{
    echo"terdapat kesalahan";
}


?>