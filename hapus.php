<?php
session_start();
include("configuration.php");
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $query = mysqli_query($con,"DELETE FROM confirmation WHERE confirmationid='$id'");
    if($query)
    {
        header("Location: cart.php");
    }
}
?>