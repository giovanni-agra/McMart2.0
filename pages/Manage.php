<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- styles -->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <!-- <link href="assets/css/bootstrap.css" rel="stylesheet">-->
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    <link href="assets/css/flexslider.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/color/default.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,600,400italic|Open+Sans:400,600,700"
          rel="stylesheet">


    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <title>McMart Apps</title>
</head>

<body>
<script>
    $(document).ready(function () {
        $("#load_ItemList").click(function () {
            $("#onload").load("ListItems.php #ItemOrder");
        });
        $("#load_ListBooks").click(function () {
            $("#onload").load("ListBooks.php ");
        });
        $("#load_Cart").click(function () {
            $("#onload").load("Orders.php ");
        });
        $("#load_ItemsCRUD").click(function () {
            $("#onload").load("../ItemsCrud/ItemsCRUD.php ");
        });
        $("#load_BooksCRUD").click(function () {
            $("#onload").load("BooksCrud.php ");
        });
    });

</script>

<!-- Side navigation -->
<div class="sidenav">
    <a href="index.php">MC Mart</a>
    <div class="menu-nav">
        <div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <button type="button" class="btn active" id="load_ItemsCRUD" aria-pressed="true">Items</button>
                </li>
                <li class="list-group-item">
                    <button type="button" class="btn" onclick="" id="load_BooksCRUD">Requests</button>
                </li>
                <?php session_start(); if ($_SESSION['Role'] == 'Admin') : ?>
                    <li class="list-group-item">
                        <button type="button" class="btn" onclick="" id="">Accounts</button>
                    </li>

                <?php endif;?>
<!--                <li class="list-group-item">-->
<!--                    <button type="button" class="btn" onclick="" id="load_Cart">In-Cart</button>-->
<!--                </li>-->

            </ul>


        </div>

    </div>

</div>

<!-- Page content -->
<div class="main">
    <nav class="navbar navbar-expand-md navbar-light bg-light">
<!---->
<!--        <div class="dropdown">-->
<!--            <button class="dropbtn btn-primary"><i class='fas fa-bars'></i></button>-->
<!--            <div class="dropdown-content">-->
<!--                <a href="../ItemsCrud/ItemsCrud.php" target="_blank">Manage Items</a>-->
<!--                <a href="../crud/index.php" target="_blank">Manage Books</a>-->
<!--            </div>-->
<!--        </div>-->
        <div class="">
            <h1 style="padding-right: 5px;">Hello <?php 
                print_r($_SESSION['Name']);?></h1>
        </div>

        <div class="navbar-nav ml-auto">
            <a href="logout.php" class="nav-item nav-link" onclick="">Logout<i class='fas fa-door-closed'></i></a>
        </div>

    </nav>
    <div class="Header">
        <h1>MC Mart Management system</h1>
    </div>

    <div>
        <div class="row ">

            <div class="functionTab">
                <div id="onload">

                </div>

            </div>

        </div>
    </div>

</div>
</body>


</html>