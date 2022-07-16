<?php

require_once 'db_connect.php';
require_once 'file_upload.php';

if ($_POST) {  
    $title = $_POST['title'];
    $isbncode = $_POST['isbn_code'];
    $type= $_POST['type'];
    $firstname = $_POST['author_first_name'];
    $lastname = $_POST['author_last_name'];
    $publishername = $_POST['publisher_name'];
    $publisheraddress = $_POST['publisher_address'];
    $publishdate = $_POST['publish_date'];
    $availability = $_POST['availability'];
    $shortdescription = $_POST['short_description'];
    $id = $_POST['id'];
    
    
    $uploadError = '';

    $image = file_upload($_FILES['image']);
    if($image->error===0){
        ($_POST["image"]=="pic.jpg")?: unlink("../image/$_POST[image]");           
        $sql = "UPDATE library SET title = '$title', image = '$image->fileName', isbn_code = $isbncode, type = '$type', author_first_name = '$firstname', author_last_name = '$lastname', publisher_name = '$publishername', publisher_address = '$publisheraddress', publish_date = $publishdate, availability = '$availability', short_description = '$shortdescription'  WHERE library_id = {$id}";
    }else{
        $sql = "UPDATE library SET title = '$title', isbn_code = $isbncode, type = '$type', author_first_name = '$firstname', author_last_name = '$lastname', publisher_name = '$publishername', publisher_address = '$publisheraddress', publish_date = $publishdate, availability = '$availability', short_description = '$shortdescription' WHERE library_id = {$id}";
    }    
    if (mysqli_query($connect, $sql) === TRUE) {
        $class = "success";
        $message = "The record was successfully updated";
        $uploadError = ($image->error !=0)? $image->ErrorMessage :'';
    } else {
        $class = "danger";
        $message = "Error while updating record : <br>" . mysqli_connect_error();
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
        <title>Update</title>
        <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
        
    </head>
    <body>
        <div class="container">
            <div class="mt-3 mb-3 update_request">
                <h1>Update the Book or Media</h1>
            </div>
            <div class="alert alert-<?php echo $class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../update.php?id=<?=$id;?>'><button class="btn btn-warning" type='button'>Back</button></a>
                <a href='../index.php'><button class="btn btn-success" type='button'>Home</button></a>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>

