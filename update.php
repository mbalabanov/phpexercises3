<?php 
    require_once 'actions/db_connect.php';

    if ($_GET['id']) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM meals WHERE meal_id = {$id}" ;
        $result = $connect->query($sql);
        $data = $result->fetch_assoc();
        $connect->close();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Edit meal | Restaurant</title>

</head>
<body class="bg-light">

<div class="container">
    <h1 class="mt-4">PHP Exercises Day 3: Restaurante Unicórnio Tesão</h2>

    <div class="row pt-2 bg-success text-white rounded-lg">
        <div class="col-10 offset-1">
            <h3 class="mt-2">Edit Meal</h3>
            <form action="actions/a_update.php" method="post">
                <table class="table">
                    <tr>
                        <th>Meal ID (read only)</th >
                        <td><input class="form-control" type="text" name="formid" value="<?php echo $data['meal_id'] ?>"  readonly/></td >
                    </tr>    
                    <tr>
                        <th>Meal Name</th >
                        <td><input class="form-control" type="text" name="formname"  placeholder="Meal Name"  value="<?php echo $data['name'] ?>" /></td >
                    </tr>    
                    <tr>
                        <th>Image URL</th>
                        <td><input class="form-control" type="text" name= "formimage" placeholder="Image URL" value="<?php echo $data['image'] ?>" /></td>
                    </tr>
                    <tr>
                        <th>Ingredients</th>
                        <td><textarea rows="4" cols="50" class="form-control" name="formingredients" placeholder="Ingredients"><?php echo $data['ingredients'] ?></textarea></td>
                    </tr>
                    <tr>
                        <th>Allergens</th>
                        <td><input class="form-control" type="text" name="formallergens" placeholder="Allergens"  value="<?php echo $data['allergens'] ?>" /></td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td><input class="form-control" type="number" name="formprice" placeholder="0" value="<?php echo $data['price'] ?>" /></td>
                    </tr>
                    <tr>
                        <td><button class="btn btn-light m-2" type ="submit">Update meal</button><a class="btn btn-light m-2" href="index.php">Back to home</a></td>
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