<?php require_once 'actions/db_connect.php'; ?>
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
        <h1 class="mt-4">PHP Exercises Day 3: Restaurante Unicórnio Tesão</h2>
        <h3 class="mt-2">Database</h3>
        <div class="row">
            <div class="col-12">
                <p><a class="btn btn-primary m-2" href="create.php">Add a meal</a></p>
            </div>
        </div>
        <div class="row mb-5 bg-warning pb-4 rounded-lg">

            <?php
                $sql = 'SELECT * FROM meals';
                $result = $connect->query($sql);

                if($result->num_rows > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        printf('<div class="col-lg-4 pt-4"><div class="bg-white border p-2 rounded-lg"><h3 class="text-center">%s</h3><p><img src="%s" class="img-fluid rounded-lg"></p><div class="alert alert-secondary" role="alert"><h4>Ingredients</h4><p>%s</p></div><div class="alert alert-danger" role="alert"><h4>Allergens</h4><p>%s</p></div><h4 class="text-center"><span class="badge badge-pill badge-dark p-3">€ %s</span></h4><p class="text-center"><a class="btn btn-primary m-2" href="update.php?id=%s">Edit meal</a><a class="btn btn-danger m-2"  href="delete.php?id=%s">Delete meal</a></p></div></div>',
                            $row['name'], $row['image'], $row['ingredients'], $row['allergens'], $row['price'], $row['meal_id'], $row['meal_id']);
                    }
                } else {
                    echo('<div class="alert alert-danger text-center" role="alert"><h3>No meals in database</h3></div>');
                }
            ?>

        </div>
    </div>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

  </body>
</html>





