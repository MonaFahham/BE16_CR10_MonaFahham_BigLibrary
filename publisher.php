<?php

require_once "actions/db_connect.php";

$publisher = $_GET["publisher_name"];
$sql = "select * from library where publisher_name = '$publisher'";
$result = mysqli_query($connect, $sql);
$tbody="";
if(mysqli_num_rows($result)  > 0) {     
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ 
        $tbody .= "
      <div class='container col-lg-3 col-md-6 col-sm-12 justify-content-center'>
        <div class='col-12 justify-content-center '>
          <a href='details.php?library_id=".$row['library_id']."'>
            <img class='image-size' src='./image/" .$row['image']."'>
          </a> 
        </div>
        <div class='text-center nsl2'>
          <a class='details' href='details.php?library_id=".$row['library_id']."'>
            <h4 class='book-title'>" .$row['title']."</h4>
            <h4 class='book-author'>" .$row['author_first_name']." " .$row['author_last_name']."</h4>
          <a class='publisher' href='publisher.php?publisher_name=".$row['publisher_name']."'>".$row['publisher_name']."
          </a>
        </div>
      </div>";
   };
} else {
    $tbody_book =  "<tr><td colspan='5'><center>No Data Available</center></td></tr>";
}
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
        <div class="text-center fw-bold fs-1"><?php echo $publisher; ?>
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
