<?php

require_once 'actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM library WHERE library_id = {$id}";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $title = $data['title'];
        $image = $data['image'];
        $isbn_code = $data['isbn_code'];
        $type= $data['type'];
        $firstname = $data['author_first_name'];
        $lastname = $data['author_last_name'];
        $publishername = $data['publisher_name'];
        $publisheraddress = $data['publisher_address'];
        $publishdate = $data['publish_date'];
        $availability = $data['availability'];
        $shortdescription = $data['short_description'];
    } else {
        header("location: error.php");
    }
    mysqli_close($connect);
} else {
   header("location: error.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Edit Product</title> 
        <link rel="stylesheet" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     
        
    </head>
    <body class="body_style">
    
        <?php require_once 'components/navbar.php' ?>
        
        <div class="container">
            <div class="row text-center justify-content-center">
                <div></div>
                <div class="col-12">
                    <h3 class="update_request">Update Book/Media</h3>
                </div>
                <div class="col-6">
                    <div>
                        <img class="image_update" src='image/<?php echo $image ?>' alt="<?php echo $image ?>">
                    </div>
                </div>
            </div>
        
        <fieldset>
            <form action="actions/a_update.php"  method="post" enctype="multipart/form-data">
                <table class="table text-light">
                   <tr>
                       <th class="left-title">Title</th>
                       <td><input class='form-control' type="text" name="title" placeholder="Book or Media Name" value="<?php echo $title ?>" /></td>
                   </tr>
                   <tr>
                       <th class="left-title">Isbn Code</th>
                       <td><input class='form-control' type="number" name="isbn_code" placeholder="Isbn Code" step="any" value="<?php echo $isbn_code ?>"  /></td>
                   </tr>
                   <tr>
                       <th class="left-title">Type</th>
                       <td><input class='form-control' type="text" name="type" placeholder="Type"  value="<?php echo $type ?>"  /></td>
                   </tr> 
                   <tr>
                       <th class="left-title">Author first name</th>
                       <td><input class='form-control' type="text" name="author_first_name" placeholder="Author first name" value="<?php echo $firstname ?>"  /></td>
                   </tr>   
                   <tr>
                       <th class="left-title">Author last name</th>
                       <td><input class='form-control' type="text" name="author_last_name" placeholder="Author last name" value="<?php echo $lastname ?>" /></td>
                   </tr>     
                   <tr>
                       <th class="left-title">Publisher Name</th>
                       <td><input class='form-control' type="text" name="publisher_name" placeholder="Publisher Name" value="<?php echo $publishername ?>" /></td>
                   </tr>       
                   <tr>
                       <th class="left-title">Publisher Address</th>
                       <td><input class='form-control' type="text" name="publisher_address" placeholder="Publisher Address" value="<?php echo $publisheraddress ?>" /></td>
                   </tr>      
                   <tr>
                       <th class="left-title">Publish Date</th>
                       <td><input class='form-control' type="date" name="publish_date" placeholder="Publish Date" value="<?php echo $publishdate ?>" /></td>
                   </tr>       
                   <tr>
                       <th class="left-title">Availability</th>
                       <td><input class='form-control' type="text" name="availability" placeholder="Availability" value="<?php echo $availability ?>" /></td>
                   </tr>      
                   <tr>
                       <th class="left-title">Short Description</th>
                       <td>
                           <input class='form-control' type="text" name="short_description" placeholder="Short Description" value="<?php echo $shortdescription ?>" />
                   </td>
                   </tr>     
                   <tr>
                       <th class="left-title">Image</th>
                       <td><input class='form-control' type="file" name="image"  /></td>
                   </tr>
                   <tr>
                        <td class="text-center justify-content-center">
                            <input type= "hidden" name= "id" value= "<?php echo $data['library_id'] ?>" /> 
                            <input type= "hidden" name= "image" value= "<?php echo $data['image'] ?>" />
                            <td><button class="button_edit" type= "submit">Save Changes</button>
                            <a href= "index.php"><button class="button_delete" type="button">Back
                            </button></a>
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>