<?php
session_start();
include("configuration.php");
if(isset($_POST["submit"]))
{   

    $iduser = $_SESSION["id_user"];
    $res = mysqli_query($con, "SELECT * FROM confirmation WHERE userid = '$iduser'");
    $baris1 = mysqli_fetch_assoc($res);
    $_POST['confirmation_id'] = $baris1['confirmation_id'];
    $confirmationid = $_POST['confirmation_id'];  
    mysqli_query($con, "INSERT INTO cart VALUES ('','$confirmationid')");
    header("Location: cart.php");
    
}






?>