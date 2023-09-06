<?php
session_start();
if(isset($_POST["mySelect"])){
    if($_POST["mySelect"] === ""){
        $_SESSION["status"] = "invalidEntry";
    }else{
        $arr = $_SESSION["myArray"];
        for ($i = 0; $i < count($arr); $i++){
            if($arr[$i] === $_POST["mySelect"]){
                array_splice($arr, $i, 1);
                $_SESSION["myArray"] = $arr;
            }
        }
        $_SESSION["status"] = "deleted";
    }
}else{
    $_SESSION["status"] = "invalidEntry";
}
header("location: ../index.php");