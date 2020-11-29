<?php
//require("../products/requires/process_new_product.php");
require("../products/requires/product_index_component.php");
?>

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

            <?php include('../includes/nav_bar.php'); ?>

        </div>
    </nav>
</header>

<h1 class="text-center">All Food Products</h1>

<div class="container mb-5 justify-content-center">

    <div class="form-row">
        <?php
        require ("../includes/db.inc.php");
        $sql = "SELECT * FROM Products WHERE Products.ProductCategory = 'Food'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                component($row['PictureURI'],$row['Name'], $row['Status'], $row['Price'],$row['ProductDesc']);
            }
        }
        else {
            echo "0 results";
        }
        //                echo $result->num_rows
        $conn->close();
        ?>
    </div>

</div>

</body>

</html>