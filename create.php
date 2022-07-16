<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book or Media</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <?php require_once 'components/boot.php'?>
    
</head>

<body class="body_style">
    <!-- Navbar -->
    <?php require_once 'components/navbar.php' ?>

    <div class="container" style="padding-top:4rem;">
        <div class="row row-cols-1 row-cols-md-2 g-4 d-flex justify-content-center">
            <div class="col">
                    <h3 class="text-center create-title">Add your book or Media</h3>
                <fieldset>
                    <form action="actions/a_create.php" method="post" enctype="multipart/form-data">
                        <table class="table text-light">
                            <tr>
                                <th class="left-title">Title</th>
                                <td><input class='form-control' type="text" name="title" placeholder="Book or Media Name" /></td>
                            </tr>    
                            <tr>
                                <th class="left-title">ISBN Code</th>
                                <td><input class='form-control' type="number" name= "isbncode" placeholder="ISBN Code" step="any"/></td>
                            </tr>
                            <tr>
                                <th class="left-title">Type</th>
                                <td>
                                    <!-- <input class='form-control' type="text" name="type" placeholder="Type" > -->
                                    <select class="form-control" name="type">
                                        <option>Choose the type</option>
                                        <option>Book</option>
                                        <option>CD</option>
                                        <option>DVD</option>
                                    </select>
                                </td>
                            </td>
                            </tr> 
                            <tr>
                                <th class="left-title">Author first name</th>
                                <td><input class='form-control' type="text" name="author_first_name" placeholder="Author first name" /></td>
                            </tr>   
                            <tr>
                                <th class="left-title">Author last name</th>
                                <td><input class='form-control' type="text" name="author_last_name" placeholder="Author last name" /></td>
                            </tr>     
                            <tr>
                                <th class="left-title">Publisher name</th>
                                <td><input class='form-control' type="text" name="publisher_name" placeholder="Publisher Name" /></td>
                            </tr>       
                            <tr>
                                <th class="left-title">Publisher address</th>
                                <td><input class='form-control' type="text" name="publisher_address" placeholder="Publisher Address" /></td>
                            </tr>      
                            <tr>
                                <th class="left-title">Publish date</th>
                                <td><input class='form-control' type="date" name="publish_date" placeholder="Publish Date"/></td>
                            </tr>       
                            <tr>
                                <th class="left-title">Availability</th>
                                <td>
                                    <select class="form-control" name="availability">
                                        <option>Choose the availability</option>
                                        <option>Available</option>
                                        <option>Reserved</option>
                                    </select>
                                </td>
                            </tr>  
                            <tr>
                                <th class="left-title">Image</th>
                                <td><input class='form-control' type="file" name="image" /></td>
                            </tr>    
                            <tr>
                                <th class="left-title">Short description</th>
                                 <td>
                                <textarea class="form-control" placeholder="Short description" name="short_description" rows="5"></textarea>
                              </td>
                            </tr>     
                            
                            <tr>
                                <td></td>
                            <td>
                                    <button class='insert_btn' type="submit">Insert Book or Media</button>
                                    <a href="index.php"><button class='home_btn' type="button">Home
                                    </button></a>
                                </td>
                            </tr>
                        </table>
                    </form>
                </fieldset>
            </div>
          </div>

      </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
