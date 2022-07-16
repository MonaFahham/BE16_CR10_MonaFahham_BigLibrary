<?php
require_once 'db_connect.php';
require_once 'file_upload.php';

if ($_POST) {   
    $title = $_POST['title'];
    $isbncode = $_POST['isbncode'];
    $type= $_POST['type'];
    $firstname = $_POST['author_first_name'];
    $lastname = $_POST['author_last_name'];
    $publishername = $_POST['publisher_name'];
    $publisheraddress = $_POST['publisher_address'];
    $publishdate = $_POST['publish_date'];
    $availability = $_POST['availability'];
    $shortdescription = $_POST['short_description'];
    $uploadError = '';
    $image= file_upload($_FILES['image']);  
  
  $sql = "INSERT INTO Library (title, image, isbn_code, type, author_first_name, author_last_name, publisher_name, publisher_address, publish_date, availability, short_description ) VALUES ('$title','$image->fileName', $isbncode, '$type', '$firstname', '$lastname', '$publishername', '$publisheraddress', $publishdate, '$availability', '$shortdescription' )";

  if (mysqli_query($connect, $sql) === true) {
      $class = "success";
      $message = " 
        <div class='container text-center justify-content-center'>
            <div class='row text-center justify-content-center'>
                <h3 class='col-12 succesfull_title'>$title</h3>
        </div>
      
          <table class='table text-center'><tr>
          <td> $title </td>
          <td> $isbncode </td>
          <td> $type </td>
          <td> $firstname </td>
          <td> $lastname </td>
          <td> $publishername </td>
          <td> $publisheraddress</td>
          <td> $publishdate </td>
          <td> $availability </td>
          <td> $shortdescription </td>
          </tr></table><hr>
        </div>";
      $uploadError = ($image->error !=0)? $image->ErrorMessage :'';
    // header("refresh: 5; url= ../index.php");
    header("url= ../index.php");
  } else {
      $class = "danger";
      $message = "Error while creating record. Try again: <br>" . $connect->error;
      $uploadError = ($image->error !=0)? $image->ErrorMessage :'';
  }
  mysqli_close($connect);
} else {
    header("location: ../error.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Create Book and Media</title>
        <link rel="stylesheet" href="../css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    <body>
            <div class="row text-center justify-content-center mt-5">
                <div class="succesfull"></div>
                <div class="col-12 succesfull">
                    <h2 class="succesfull_title">You have successfully created your product</h2>
                </div>
                <div class="col-6 succesfull">
                    <div class="boxx">
                        
                    </div>
                </div>
            </div>
        <div class="container">
            <div class="text-center justify-content-center alert alert-<?=$class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../index.php'><button class="btn btn-success" type='button'>Home</button></a>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>