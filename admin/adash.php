<?php
session_start();
if ($_SESSION['email']) {
} else {
    header("location: ../clogin.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/rregis.css">
    <link rel="stylesheet" href="../css/clogin.css">
    <link rel="stylesheet" href="../css/home.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
        <a class="navbar-brand" href="#">FoodShala</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
                <ul>
        </div>
    </nav>
    <section class="facilities">
        <div class="container" style="margin-top: 150px;">
            <div class="row">
                <div class="col-md-4">
                    <div class="card text-center" style="width: 18rem;">
                        <img class="card-img-top" src="../images/img5.jpg" alt="Card image cap" height="250px">
                        <div class="card-body">
                            <h5 class="card-title">Veg Menu</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="veg.php" class="btn btn-primary">Add</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center" style="width: 18rem;">
                        <img class="card-img-top" src="../images/img6.jpg" alt="Card image cap" height="250px">
                        <div class="card-body">
                            <h5 class="card-title">Non-Veg Menu</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="nonveg.php" class="btn btn-primary">Add</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center" style="width: 18rem;">
                        <img class="card-img-top" src="../images/img7.jpg" alt="Card image cap" height="250px">
                        <div class="card-body">
                            <h5 class="card-title">Orders</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Check</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <div>
        <footer>
            <div>
                <div class="footer">
                    Copyright &#169 2021

                </div>
            </div>
        </footer>
    </div>



</body>

</html>