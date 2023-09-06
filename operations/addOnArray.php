<?php
session_start();
if(isset($_POST["input"])) {
    if($_POST["input"] === ""){
        $_SESSION["status"] = "error";
    }else{
        $arr = $_SESSION["myArray"];
        $arr[] = $_POST["input"];
        $_SESSION["myArray"] = $arr;
        $_SESSION["status"] = "added";
    }
}
header("location: ../index.php");