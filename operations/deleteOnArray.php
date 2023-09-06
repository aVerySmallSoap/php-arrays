<?php
session_start();
if(isset($_POST["mySelect"])){
    $arr = $_SESSION["myArray"];
    for ($i = 0; $i < count($arr); $i++){
        if($arr[$i] === $_POST["mySelect"]){
            array_splice($arr, $i, 1);
            $_SESSION["myArray"] = $arr;
        }
    }
    $_SESSION["status"] = "deleted";
}else{
    $_SESSION["status"] = "error";
}
header("location: ../index.php");