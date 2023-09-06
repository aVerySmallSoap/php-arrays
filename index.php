<?php
session_start();
$arr = array("Apple", "Mango", "Orange", "Dragon Fruit", "Pineapple");
if(!isset($_SESSION["myArray"])) {
    $_SESSION["myArray"] = $arr;
}else{
    $arr = $_SESSION["myArray"];
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./CSS/grid.css">
    <link rel="stylesheet" href="./CSS/index.css">
    <link rel="stylesheet" href="./CSS/error.css">
    <title>Document</title>
</head>
<body>
    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" id="moon">
    <path  d="M11.0174 2.80157C6.37072 3.29221 2.75 7.22328 2.75 12C2.75 17.1086 6.89137
    21.25 12 21.25C16.7767 21.25 20.7078 17.6293 21.1984 12.9826C19.8717 14.6669 17.8126
    15.75 15.5 15.75C11.4959 15.75 8.25 12.5041 8.25 8.5C8.25 6.18738 9.33315 4.1283 11.0174
    2.80157ZM1.25 12C1.25 6.06294 6.06294 1.25 12 1.25C12.7166 1.25 13.0754 1.82126 13.1368 2.27627C13.196
    2.71398 13.0342 3.27065 12.531 3.57467C10.8627 4.5828 9.75 6.41182 9.75 8.5C9.75 11.6756 12.3244 14.25 15.5
    14.25C17.5882 14.25 19.4172 13.1373 20.4253 11.469C20.7293 10.9658 21.286 10.804 21.7237 10.8632C22.1787 10.9246
    22.75 11.2834 22.75 12C22.75 17.9371 17.9371 22.75 12 22.75C6.06294 22.75 1.25 17.9371 1.25 12Z" fill="#DBC4F0"/>
    </svg>
    <div class="container">
        <div class="title-container">
            <span id="title">Fruit Vending Shop</span>
        </div>
        <div class="left-container">
            <form action="./operations/addOnArray.php" method="post" id="array-form">
                <input type="text" name="input">
                <div class="form-control">
                    <button type="submit" class="btn" id="btn-add">Add</button>
                </div>
            </form>
        </div>
            <hr class="in-the-middle">
        <div class="right-container">
            <div class="selection-container">
                <form action="./operations/deleteOnArray.php" method="post" id="array-deletion-form">
                    <select name="mySelect" id="array-selector">
                        <option value=""></option>
                        <?php
                        foreach ($arr as $item){
                            echo "<option value='$item'>". $item ."</option>";
                        }
                        ?>
                    </select>
                    <button type="submit" formaction="./operations/selectOnArray.php" formmethod="post"
                            class="btn" id="btn-display">
                        Display
                    </button>
                    <button type="submit" class="btn" id="btn-delete">Delete</button>
                </form>
            </div>
        </div>
    </div>
    <script src="./JS/error.js"></script>
    <script src="./JS/btn-animation.js"></script>
</body>
</html>
<?php
if(isset($_SESSION["status"])){
    echo match ($_SESSION["status"]) {
        "added" => "<script>throwAlert('Success!', 'Entry successfully added!', 'green');</script>",
        "display" => "<script> let arg = '".$_SESSION['item']."';throwAlert('You have selected:', arg, 'green');
        </script>",
        "deleted" => "<script>throwAlert('Success!', 'Entry successfully deleted!', 'green');</script>",
        "selectError" => "<script>throwAlert('Error!', 'Please select an entry!');</script>",
        "invalidEntry" => "<script>throwAlert('Error!', 'Invalid entry!');</script>",
        default => "<script>throwAlert('Error!', 'Please fill out the field!');</script>",
    };
}
?>
