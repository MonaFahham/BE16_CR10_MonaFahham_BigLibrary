<?php

require_once "actions/db_connect.php";

$id = $_GET["library_id"];
$sql = "select * from library where library_id = '$id'";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);
$tbody="";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <?php require_once 'components/boot.php'?>
    <title>Publisher</title>
</head>
<body>
<div class = 'container'> 
    <div class = 'row'>
        <div class="text-center fw-bold fs-1"><?php echo $id; ?>
        </div>
        <hr>
        <!-- <a href="publisher.php?publisher_name=<?= $row["publisher_name"] ?>">
                                <button class="btn btn-outline-secondary btn-sm" type="button"><?= $row["publisher_name"] ?></button></a> -->
            <?php
                echo $tbody; 
            ?>
    </div>
</div>
</body>
</html>
