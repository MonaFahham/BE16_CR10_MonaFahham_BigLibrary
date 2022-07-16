<?php
require_once './actions/db_connect.php';

$sql = "SELECT * FROM library WHERE library_id = $_GET[library_id]";
$result = mysqli_query($connect, $sql);

$tbody="";

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        $tbody .= "
        <div class='card mb-5 mt-5 py-4 px-3' style='max-width: 100%;'>
            <div class='row g-0'>
              <div class='col-md-4'>
                <img src='./image/".$row['image']."' class='img-fluid rounded-start pe-2' alt='...'>
              </div>
              <div class='col-md-8'>
                <div class='card-body'>
                  <h5 class='card-title'>".$row['title']."</h5>
                  <p class='card-text'>".$row['short_description']."</p>
                  <p class='card-text'> <b>Author: </b>".$row['author_first_name']." ".$row['author_last_name']."</p>
                  <p class='card-text'><b>Availability: </b>".$row['availability']."</p>
                  <p class='card-text'><b>Publisher: </b>".$row['publisher_name']."</p>
                  <p class='card-text'><b>Country: </b>".$row['publisher_address']."</p>
                  <p class='card-text'><b>Published: </b>".$row['publish_date']."</p>
                  <p class='card-text'><small class='text-muted'><b>ISBN/EAN: </b>".$row['isbn_code']."</small></p>
                </div>
                <div class='col-12'>
                    <a href='update.php?id=".$row['library_id']."'><button class='button_edit' type='button'>Edit</button></a>
                    <a href='delete.php?id=".$row['library_id']."'><button class='button_delete'       type='button'>Delete</button></a>

                </div>
              </div>
            </div>
        </div>
        ";
    };
}else {
    $tbody="
       <tr>
         <td> colspan='5' class='text-center'>Not Data </td>
        </tr>
    ";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Details</title>
</head>
<body class="body_style">
    
  <?php require_once 'components/navbar.php' ?>
      <div class="container">   
        <?php  
           echo $tbody;
        ?>   
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
