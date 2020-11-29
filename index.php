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

    <style>
        
</style>



</head>

<body>




<?php
// Include the database configuration file
require ('includes/db.inc.php');

//if($_SESSION['Loggedin'] = True){
//
//}else {

//    $_SESSION['Loggedin'] = false;
//}

?>



    <br>
    <br>
    <br>
    <div class="container mb-5 justify-content-center">
        <div class="jumbotron text-center">
            <h1 class="display-4">Welcome to McMart Online!</h1>
            <hr>
            <h3>Visit as a Student</h3>
            <p class="lead">Click here to see all types of products provided in the McMart!</p>
            <a href="category_index.php" class="btn btn-primary">Continue</a>
        </div>
    
        <br>
        <div class="alert alert-secondary text-center" role="alert">
            For Admin and Workers, <a href="admin_login.php" class="alert-link">CLICK HERE</a>  to Sign In.
        </div>
    </div>



<nav class="static-top">
    <div class="container">
    <footer class="page-footer font-small blue">

        <!-- Copyright -->
        <hr>
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="apiu.edu">www.apiu.edu</a>
            <img src="assets/images/mcmart2.0logo.png" class="img-fluid" alt="Responsive image" width="500" height="600">
        </div>
        <!-- Copyright -->

    </footer>
    </div>
</nav>

</body>

</html>