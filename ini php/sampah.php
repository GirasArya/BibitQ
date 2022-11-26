<?php
mysqli_query($con, "INSERT INTO confirmation VALUES ('$item', '$nama', '$alamat', '$postal', '$notel','$kurir','$iduser')");
    
$res = mysqli_query($con, "SELECT * FROM confirmation WHERE userid = '$iduser'");
$baris1 = mysqli_fetch_assoc($res);
$_POST['confirmation_id'] = $baris1['confirmation_id'];
$confirmationid = $_POST['confirmation_id'];  
mysqli_query($con, "INSERT INTO cart VALUES ('','$confirmationid')");
header("Location: cart.php");



$res = mysqli_query($con, "SELECT * FROM confirmation WHERE userid = '$iduser'");
$baris1 = mysqli_fetch_assoc($res);
$_POST['confirmation_id'] = $baris1['confirmation_id'];
$confirmationid = $_POST['confirmation_id'];  
mysqli_query($con, "INSERT INTO cart VALUES ('','$confirmationid')");



//hapus
session_start();
include("configuration.php");
$iduser = $_SESSION["id_user"];
    $res = mysqli_query($con, "SELECT * FROM confirmation WHERE iduser = '$iduser'");
    $baris1 = mysqli_fetch_assoc($res);
    
    $_GET['confirmationid'] = $baris1["confirmationid"];
    var_dump($_GET['confirmationid']);
?>
