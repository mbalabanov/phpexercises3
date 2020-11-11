<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <title>PHP Exercises Day 3</title>
    </head>
    <body class="bg-light">

    <div class="container">
        <h1 class="mt-4">PHP Exercises Day 3</h1>
        <h2 class="mt-2">Restaurante Unicórnio Tesão</h2>
        <h3 class="mt-2">Database</h3>
        <div class="row">
            <div class="col-12">
                <p><a class="btn btn-success m-2">Add a meal</a></p>
            </div>
        </div>
        <div class="row mb-5 bg-warning pb-4">

            <?php
                $servername = 'localhost';
                $username   = 'root';
                $password   = '';
                $dbname     = 'restaurant';
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                if (!$conn) {
                die('<h4>Connection failed: ' . mysqli_connect_error() . '</h4>');
                }
                $sql = 'SELECT meal_id, name, image, image, price, ingredients, allergens FROM meals';
                $result = mysqli_query($conn, $sql);

                while($row = mysqli_fetch_assoc($result)) {
                    printf('<div class="col-lg-4 pt-4"><div class="bg-white border p-2 rounded-lg"><h3 class="text-center">%s</h3><p><img src="%s" class="img-fluid rounded-lg"></p><div class="alert alert-secondary" role="alert"><h4>Ingredients</h4><p>%s</p></div><div class="alert alert-danger" role="alert"><h4>Allergens</h4><p>%s</p></div><h4 class="text-center"><span class="badge badge-pill badge-dark p-3">€ %s</span></h4><p class="text-center"><a class="btn btn-primary m-2" data-mealid="%s">Edit meal</a><a class="btn btn-danger m-2" data-mealid="%s">Delete meal</a></p></div></div>',
                        $row['name'], $row['image'], $row['ingredients'], $row['allergens'], $row['price'], $row['meal_id'], $row['meal_id']);
                }
                mysqli_free_result($result);
                mysqli_close($conn);
            ?>

        </div>
    </div>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

  </body>
</html>





