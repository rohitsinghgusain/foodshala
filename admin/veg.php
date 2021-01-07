<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    include '../images/db.php';
    $name = $_POST["name"];
    $image = $_FILES["image"]["name"];
    $tmp_name = $_FILES["image"]["tmp_name"];
    $price = $_POST["price"];
    $restau = $_POST["restau"];

    move_uploaded_file($tmp_name, "./veg/$image");

    $sql = "INSERT INTO `veg` (`name`, `image`, `price`, `restau`) VALUES ('$name', '$image', '$price', '$restau')";
    $result = mysqli_query($conn, $sql);

?>
    <script>
        alert('Added Succesfully!');
    </script>
<?php

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/veg.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Veg Food</title>
</head>

<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
            <a class="navbar-brand" href="#">FoodShala</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="adash.php"><i class="fa fa-home"></i></a>
                    </li>
                    <ul>
            </div>
        </nav>
    </div>
    <div>
        <div>
            <form method="post" enctype="multipart/form-data">
                <i class="fa fa-cutlery fa-5x"></i>

                <div class="row justify-content-center">
                    <div class="form-group col-md-3">
                        <label for="inputCity">Item Name</label>
                        <input type="text" class="form-control" id="inputCity" required name="name">
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="form-group col-md-3">
                        <label for="inputPassword4">Picture</label>
                        <input type="file" class="form-control" id="inputPassword4" required name="image">
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="form-group col-md-3">
                        <label for="inputCity">Price</label>
                        <input type="number" class="form-control" id="inputCity" required name="price">
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="form-group col-md-3">
                        <label for="inputCity">Restaurant Name</label>
                        <input type="text" class="form-control" id="inputCity" required name="restau">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" style="margin-left: 48%;">Add Menu</button>
            </form>
        </div>
    </div>
</body>

</html>