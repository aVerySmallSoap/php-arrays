<?php
session_start();
if(isset($_POST["mySelect"])){
    $_SESSION["status"] = "display";
    $_SESSION["item"] = $_POST["mySelect"];
}
header("location: ../index.php");
