<?php 
require_once 'actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM library WHERE library_id = {$id}" ;

    $result = mysqli_query($connect, $sql);
    $data = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) == 1) {
        $title = $data['title'];
        $isbn_code = $data['isbn_code'];
        $type= $data['type'];
        $firstname = $data['author_first_name'];
        $lastname = $data['author_last_name'];
        $publishername = $data['publisher_name'];
        $publisheraddress = $data['publisher_address'];
        $publishdate = $data['publish_date'];
        $availability = $data['availability'];
        $shortdescription = $data['short_description'];
        $image = $data['image'];
    } else {
        header("location: error.php");
    }
    mysqli_close($connect);
} else {
    header("location: error.php");
}  
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Delete Book or Media</title>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    </head>
    <body>
        <?php require_once 'components/navbar.php' ?>
        <fieldset>
            <div class="row text-center justify-content-center">
                <div></div>
                <div class="col-12">
                    <h3 class="delete_request">Delete Book or Media</h3>
                </div>
                <div class="col-6">
                    <div>
                        <img src='image/<?php echo $image ?>' alt="<?php echo $title ?>">
                    </div>
                </div>
                <h4 class="name_delete"><?php echo $title?></h4>
                <h6 class="delete_question">Do you want to delete this Book/Media?</h6>
                <div class="col-12">
                    <form action ="actions/a_delete.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $id ?>" />
                        <input type="hidden" name="photo" value="<?php echo $image ?>" />
                        <button class="button_delete1" type="submit" name="submit" value="Yes">Yes, I want to delete it!</button>
                        <a href="index.php"><button class="button_edit1" type="button">No, Not now!</button></a>
                    </form>

                </div>
            </div>

        </fieldset>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>