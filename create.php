<?php require_once 'actions/db_connect.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Add meal | Restaurant</title>

</head>
<body class="bg-light">

<div class="container">
    <h1 class="mt-4">PHP Exercises Day 3</h1>
    <h2 class="mt-2">Restaurante Unicórnio Tesão</h2>

    <div class="row pt-2 bg-info text-white rounded-lg">
        <div class="col-10 offset-1">
            <h3 class="mt-2">Add Meal</h3>
            <form action="actions/a_create.php" method="post">
                <table class="table">
                    <tr>
                        <th>Meal Name</th >
                        <td><input class="form-control" type="text" name="formname"  placeholder="Meal Name" /></td >
                    </tr>    
                    <tr>
                        <th>Image URL</th>
                        <td><input class="form-control" type="text" name= "formimage" placeholder="Image URL" /></td>
                    </tr>
                    <tr>
                        <th>Ingredients</th>
                        <td><textarea rows="4" cols="50" class="form-control"  name="formingredients" placeholder="Ingredients" ></textarea></td>
                    </tr>
                    <tr>
                        <th>Allergens</th>
                        <td><input class="form-control" type="text" name="formallergens" placeholder="Allergens" /></td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td><input class="form-control" type="number" name="formprice" placeholder="0" /></td>
                    </tr>
                    <tr>
                        <td><button class="btn btn-light m-2" type ="submit">Insert meal</button><a class="btn btn-light m-2" href="index.php">Back to home</a></td>
                        <td>&nbsp;</td>
                    </tr >
                </table>
            </form>
        </div>
    </div>
</div >
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>