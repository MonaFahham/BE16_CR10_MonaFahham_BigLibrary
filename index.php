<?php

require_once 'actions/db_connect.php';

$sql = "SELECT * FROM library";
$result = mysqli_query($connect ,$sql);
$tbody_book= '';
if(mysqli_num_rows($result)  > 0) {     
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ 
        $tbody_book .= "
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
          <a class='publisher' href='publisher.php?library_id=".$row['publisher_name']."'>".$row['publisher_name']."
          </a>
        </div>
      </div>";
   };
} else {
    $tbody_book =  "<tr><td colspan='5'><center>No Data Available</center></td></tr>";
}

mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Big Library</title>
</head>
<body class="body_style">
    
<!-- Navbar -->
  <?php require_once 'components/navbar.php' ?>
  
  <!-- Hero -->
  <div class="hero text-center align-items-center">
    <h1 class="library_name text-center">Big Library</h1>
  </div>

  <div id="items">
    <div class="row text-center">
      <div class="col-12">
        <h3 class="library">Library and Media</h3>
      </div>
      <div class="add_product">
        <a href="create.php"><button class='add_product_button' type="button">Add Book or Media</button></a>
      </div>
      <div class="col-12 row">
            <?php
              echo $tbody_book; 
            ?>
      </div>
    </div>
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>