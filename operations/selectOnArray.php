<?php
session_start();
if(isset($_POST["mySelect"])){
    if($_POST["mySelect"] === ""){
        $_SESSION["status"] = "selectError";
    }else{
        $_SESSION["status"] = "display";
        $_SESSION["item"] = $_POST["mySelect"];
    }
}
header("location: ../index.php");
