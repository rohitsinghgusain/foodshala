<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    include ('images/db.php');
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    $sql = "select * from user where email = '$email' AND password = '$password' AND cpassword = '$cpassword'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    
    if($num == 1)
    {
        echo "you are in";
        // session_start();
        //$_SESSION['eamil'] = $email;
        //header('location : admin/adash.php');
    }
    else
    {
        ?><script>
            alert("Invalid Fields");
        </script><?php
    }
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/rregis.css">
    <link rel="stylesheet" href="css/clogin.css">
    <link rel="stylesheet" href="css/home.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>Registeration</title>
</head>

<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
            <a class="navbar-brand" href="#">FoodShala</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html"><i class="fa fa-home"></i><span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Restaurant
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="rregis.php">Register</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="rlogin.php">Login</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Coustomer
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="cregis.php">Register</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="clogin.php">Login</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                      </li>
                </ul>
            </div>
        </nav>
    </div>
    <div>
        <div>
            <form method="POST">
                <i class="fa fa-user fa-5x rounded mx-auto d-block"></i>

                <div class="row justify-content-center">
                    <div class="form-group col-md-3">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email" required name="email">
                    </div>
                </div>
               
                
                <div class="row justify-content-center">
                    <div class="form-group col-md-3">
                        <label for="inputPassword4"> Password</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Password" required name="password">
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="form-group col-md-3">
                        <label for="inputPassword4"> Confirm Password</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Confirm Password" required name="cpassword">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary" style="margin-left: 48%; margin-top: 30px;">Login</button>
            </form>
        </div>
    </div>


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