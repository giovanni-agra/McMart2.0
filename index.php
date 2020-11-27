<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- styles -->
    <!-- <link href="assets/css/bootstrap.css" rel="stylesheet">-->
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    <link href="assets/css/flexslider.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/color/default.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,600,400italic|Open+Sans:400,600,700" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>

<body>

<header>
    <nav class="navbar navbar-light bg-light static-top">
        <div class="container">

            <?php include('includes/nav_bar.php'); ?>

        </div>

    </nav>

</header>


<?php
// Include the database configuration file
require ('includes/db.inc.php');

//if($_SESSION['Loggedin'] = True){
//
//}else {

//    $_SESSION['Loggedin'] = false;
//}

?>

<h1 class="text-center">PRODUCT'S CATEGORY</h1>



    <div class="container mb-5 justify-content-center">
        <div class="form-row">
            <div class="form-group col-md-4 text-center">
                <div class="card btn-no-waves" style="width: 18rem;">
                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Food</h5>
                        <hr>
                        <p class="card-text">No need to go outside.</p>
                        <a href="products/food_index.php" target="_blank" class="stretched-link btn btn-primary">See Products</a>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-4 text-center">
                <div class="card btn-no-waves" style="width: 18rem;">
                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Books</h5>
                        <hr>
                        <p class="card-text">Find your Course's books in here.</p>
                        <a href="#" target="_blank" class="stretched-link btn btn-primary">See Products</a>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-4 text-center">
                <div class="card btn-no-waves" style="width: 18rem;">
                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Medicine</h5>
                        <hr>
                        <p class="card-text">All light medicines.</p>
                        <a href="#" target="_blank" class="stretched-link btn btn-primary">See Products</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4 text-center">
                <div class="card btn-no-waves" style="width: 18rem;">
                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Stationary</h5>
                        <hr>
                        <p class="card-text">Find any types of drawing and writing items in here.</p>
                        <a href="#" target="_blank" class="stretched-link btn btn-primary">See Products</a>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-4 text-center">
                <div class="card btn-no-waves" style="width: 18rem;">
                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Uniform</h5>
                        <hr>
                        <p class="card-text">Upper uniform, Lower uniform, belt, pin, etc.</p>
                        <a href="#" target="_blank" class="stretched-link btn btn-primary">See Products</a>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-4 text-center">
                <div class="card btn-no-waves" style="width: 18rem;">
                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Find other products</h5>
                        <hr>
                        <p class="card-text">You can see other products in here.</p>
                        <a href="#" target="_blank" class="stretched-link btn btn-primary">See Products</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



<nav class="static-top">
    <div class="container">
        
    </div>
</nav>

</body>

</html>